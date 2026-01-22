<?php

namespace App\Controllers;

use Config\Turnstile;

class Home extends BaseController
{
    /**
     * SEO meta data for each page
     */
    protected array $seoData = [
        'home' => [
            'title'       => 'Home',
            'description' => 'Hex Forensics provides expert digital forensics, cyber security, fraud investigation, and intelligence services in Nigeria and across Africa.',
            'keywords'    => 'digital forensics, cyber security, fraud investigation, intelligence, Nigeria, Africa, Hex Forensics',
        ],
        'about' => [
            'title'       => 'About Us',
            'description' => 'Learn about Hex Forensics - a leading digital forensics and cyber security firm based in Abuja, Nigeria. Our expert team solves complex investigations.',
            'keywords'    => 'about Hex Forensics, digital forensics company, cyber security firm, Abuja, Nigeria',
        ],
        'contact' => [
            'title'       => 'Contact',
            'description' => 'Get in touch with Hex Forensics. Contact us for digital forensics, cyber security, and investigation services. Based in Abuja, Nigeria.',
            'keywords'    => 'contact Hex Forensics, digital forensics contact, cyber security consultation, Abuja',
        ],
        'services' => [
            'title'       => 'Services',
            'description' => 'Comprehensive digital forensics, cyber security, fraud investigation, and intelligence services by Hex Forensics.',
            'keywords'    => 'digital forensics services, cyber security services, fraud investigation, intelligence services',
        ],
        'partners' => [
            'title'       => 'Partners',
            'description' => 'Our trusted technology and strategic partners. Hex Forensics collaborates with industry leaders in digital forensics and cyber security.',
            'keywords'    => 'Hex Forensics partners, technology partners, digital forensics partnerships',
        ],
        'report_theft' => [
            'title'       => 'Report Content Theft',
            'description' => 'Report unauthorized use of Hex Forensics content. Help us protect our intellectual property.',
            'keywords'    => 'report content theft, DMCA, intellectual property, Hex Forensics',
        ],
    ];

    public function index()
    {
        $data = $this->getSeoData('home');
        return $this->render('home', $data);
    }

    public function about()
    {
        $data = $this->getSeoData('about');
        return $this->render('about', $data);
    }

    public function contact()
    {
        $data = $this->getSeoData('contact');
        $data['turnstile_site_key'] = env('turnstile.siteKey', '');
        return $this->render('contact', $data);
    }

    public function services()
    {
        $data = $this->getSeoData('services');
        return $this->render('services', $data);
    }

    public function partners()
    {
        $data = $this->getSeoData('partners');
        return $this->render('partners', $data);
    }

    public function report_theft()
    {
        $data = $this->getSeoData('report_theft');
        $data['turnstile_site_key'] = env('turnstile.siteKey', '');
        return $this->render('report_theft', $data);
    }

    /**
     * Handle contact form submission
     */
    public function submit_contact()
    {
        // Validate Turnstile CAPTCHA
        $turnstile = new Turnstile();
        if ($turnstile->isConfigured()) {
            $token = $this->request->getPost('cf-turnstile-response');
            $clientIP = $this->request->getIPAddress();
            $verification = $turnstile->verify($token, $clientIP);
            
            if (!$verification['success']) {
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => $verification['error'] ?? 'CAPTCHA verification failed.'
                ]);
            }
        }

        // Validate input
        $rules = [
            'name'    => 'required|min_length[2]|max_length[100]',
            'email'   => 'required|valid_email|max_length[150]',
            'phone'   => 'permit_empty|max_length[20]',
            'title'   => 'required|min_length[3]|max_length[200]',
            'message' => 'required|min_length[10]|max_length[5000]',
        ];

        if (!$this->validate($rules)) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Please check your input and try again.'
            ]);
        }

        // Sanitize input
        $data = [
            'name'    => esc($this->request->getPost('name')),
            'email'   => esc($this->request->getPost('email')),
            'phone'   => esc($this->request->getPost('phone')),
            'title'   => esc($this->request->getPost('title')),
            'message' => esc($this->request->getPost('message')),
            'submitted_at' => date('Y-m-d H:i:s'),
        ];

        // Send email notification
        $email = \Config\Services::email();
        
        // Use company email as From, user email as Reply-To
        $email->setFrom('info@hexforensics.com', 'Hex Forensics Website');
        $email->setReplyTo($data['email'], $data['name']);
        $email->setTo('info@hexforensics.com');
        $email->setSubject('Contact Form: ' . $data['title']);
        
        $message = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> {$data['name']}</p>
        <p><strong>Email:</strong> {$data['email']}</p>
        <p><strong>Phone:</strong> {$data['phone']}</p>
        <p><strong>Subject:</strong> {$data['title']}</p>
        <p><strong>Submitted:</strong> {$data['submitted_at']}</p>
        <hr>
        <p><strong>Message:</strong></p>
        <p>" . nl2br($data['message']) . "</p>
        ";
        
        $email->setMessage($message);
        
        if ($email->send()) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Message sent successfully! We will get back to you soon.'
            ]);
        } else {
            log_message('error', 'Contact form email failed: ' . $email->printDebugger(['headers']));
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Sorry, there was an error sending your message. Please try again or email us directly.'
            ]);
        }
    }

    /**
     * Handle theft report form submission
     */
    public function submit_theft_report()
    {
        // Validate Turnstile CAPTCHA
        $turnstile = new Turnstile();
        if ($turnstile->isConfigured()) {
            $token = $this->request->getPost('cf-turnstile-response');
            $clientIP = $this->request->getIPAddress();
            $verification = $turnstile->verify($token, $clientIP);
            
            if (!$verification['success']) {
                return redirect()->to(base_url('report-theft'))
                    ->with('error', $verification['error'] ?? 'CAPTCHA verification failed. Please try again.');
            }
        }

        // Validate input
        $rules = [
            'reporter_name'  => 'required|min_length[2]|max_length[100]',
            'reporter_email' => 'required|valid_email|max_length[150]',
            'infringing_url' => 'required|valid_url|max_length[500]',
            'original_url'   => 'required|valid_url|max_length[500]',
            'theft_type'     => 'required|in_list[text,images,logo,services,methodology,multiple,other]',
            'details'        => 'required|min_length[20]|max_length[5000]',
            'evidence_links' => 'permit_empty|max_length[2000]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to(base_url('report-theft'))
                ->with('error', 'Please check your input and try again. All required fields must be filled correctly.')
                ->withInput();
        }

        // Sanitize input
        $data = [
            'reporter_name'  => esc($this->request->getPost('reporter_name')),
            'reporter_email' => esc($this->request->getPost('reporter_email')),
            'infringing_url' => esc($this->request->getPost('infringing_url')),
            'original_url'   => esc($this->request->getPost('original_url')),
            'theft_type'     => esc($this->request->getPost('theft_type')),
            'details'        => esc($this->request->getPost('details')),
            'evidence_links' => esc($this->request->getPost('evidence_links')),
            'reported_at'    => date('Y-m-d H:i:s'),
        ];

        // Send email notification
        $email = \Config\Services::email();
        
        // Use company email as From, reporter email as Reply-To
        $email->setFrom('info@hexforensics.com', 'Hex Forensics - Theft Report');
        $email->setReplyTo($data['reporter_email'], $data['reporter_name']);
        $email->setTo('info@hexforensics.com');
        $email->setSubject('Content Theft Report - ' . $data['theft_type']);
        
        $message = "
        <h2>Content Theft Report</h2>
        <p><strong>Reporter:</strong> {$data['reporter_name']}</p>
        <p><strong>Email:</strong> {$data['reporter_email']}</p>
        <p><strong>Reported:</strong> {$data['reported_at']}</p>
        <hr>
        <p><strong>Infringing URL:</strong> <a href='{$data['infringing_url']}'>{$data['infringing_url']}</a></p>
        <p><strong>Original Content URL:</strong> <a href='{$data['original_url']}'>{$data['original_url']}</a></p>
        <p><strong>Type of Theft:</strong> {$data['theft_type']}</p>
        <hr>
        <p><strong>Details:</strong></p>
        <p>" . nl2br($data['details']) . "</p>
        ";
        
        if (!empty($data['evidence_links'])) {
            $message .= "<hr><p><strong>Evidence Links:</strong></p><p>" . nl2br($data['evidence_links']) . "</p>";
        }
        
        $email->setMessage($message);
        
        if ($email->send()) {
            return redirect()->to(base_url('report-theft'))->with('success', 'Thank you! Your report has been submitted successfully. We will investigate and take appropriate action.');
        } else {
            log_message('error', 'Theft report email failed: ' . $email->printDebugger(['headers']));
            return redirect()->to(base_url('report-theft'))->with('error', 'Sorry, there was an error submitting your report. Please try again or contact us directly.');
        }
    }

    /**
     * Get SEO data for a page
     */
    protected function getSeoData(string $page): array
    {
        $seo = $this->seoData[$page] ?? [
            'title'       => ucfirst($page),
            'description' => 'Hex Forensics - Digital Forensics, Cyber Security, and Investigation Services',
            'keywords'    => 'digital forensics, cyber security, Hex Forensics',
        ];

        return [
            'page_title'       => $seo['title'],
            'meta_description' => $seo['description'],
            'meta_keywords'    => $seo['keywords'],
            'canonical_url'    => current_url(),
        ];
    }

    /**
     * Render the page with layout
     */
    public function render($route, $data = [])
    {
        echo view('layout/header', $data);
        echo view('pages/'.$route, $data);
        echo view('layout/footer', $data);
    }
}
