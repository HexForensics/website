<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data["page_title"] = "Home";
        return $this->render('home', $data);
    }

    public function about()
    {
        $data["page_title"] = "About Us";
        return $this->render('about', $data);
    }

    public function contact()
    {
        $data["page_title"] = "Contact";
        return $this->render('contact', $data);
    }

    public function services()
    {
        $data["page_title"] = "Services";
        return $this->render('services', $data);
    }

    public function partners()
    {
        $data["page_title"] = "Partners";
        return $this->render('partners', $data);
    }

    public function report_theft()
    {
        $data["page_title"] = "Report Content Theft";
        return $this->render('report_theft', $data);
    }

    public function submit_theft_report()
    {
        // Get form data
        $data = [
            'reporter_name' => $this->request->getPost('reporter_name'),
            'reporter_email' => $this->request->getPost('reporter_email'),
            'infringing_url' => $this->request->getPost('infringing_url'),
            'original_url' => $this->request->getPost('original_url'),
            'theft_type' => $this->request->getPost('theft_type'),
            'details' => $this->request->getPost('details'),
            'evidence_links' => $this->request->getPost('evidence_links'),
            'reported_at' => date('Y-m-d H:i:s')
        ];

        // Send email notification
        $email = \Config\Services::email();
        
        $email->setFrom($data['reporter_email'], $data['reporter_name']);
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
        <p>{$data['details']}</p>
        ";
        
        if (!empty($data['evidence_links'])) {
            $message .= "<hr><p><strong>Evidence Links:</strong></p><p>{$data['evidence_links']}</p>";
        }
        
        $email->setMessage($message);
        
        if ($email->send()) {
            return redirect()->to(base_url('report-theft'))->with('success', 'Thank you! Your report has been submitted successfully. We will investigate and take appropriate action.');
        } else {
            return redirect()->to(base_url('report-theft'))->with('error', 'Sorry, there was an error submitting your report. Please try again or contact us directly.');
        }
    }

    // function to render the pages
	public function render($route, $data = [])
	{
	    echo view('layout/header', $data);
		echo view('pages/'.$route, $data);
        echo view('layout/footer', $data);
	}
}
