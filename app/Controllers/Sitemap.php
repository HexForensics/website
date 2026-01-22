<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * Sitemap Controller
 * 
 * Generates dynamic XML sitemap for SEO optimization.
 * Includes all public pages with proper priorities and change frequencies.
 */
class Sitemap extends Controller
{
    /**
     * Site pages configuration
     * Define all pages with their SEO attributes
     */
    protected array $pages = [
        // Homepage - highest priority
        [
            'loc'        => '',
            'priority'   => '1.0',
            'changefreq' => 'weekly',
        ],
        // Main sections
        [
            'loc'        => 'about-us',
            'priority'   => '0.9',
            'changefreq' => 'monthly',
        ],
        [
            'loc'        => 'services',
            'priority'   => '0.9',
            'changefreq' => 'monthly',
        ],
        [
            'loc'        => 'partners',
            'priority'   => '0.8',
            'changefreq' => 'monthly',
        ],
        [
            'loc'        => 'contact',
            'priority'   => '0.8',
            'changefreq' => 'monthly',
        ],
        // Service detail pages
        [
            'loc'        => 'services/digital-forensics',
            'priority'   => '0.8',
            'changefreq' => 'monthly',
        ],
        [
            'loc'        => 'services/cyber-security',
            'priority'   => '0.8',
            'changefreq' => 'monthly',
        ],
        [
            'loc'        => 'services/fraud-investigation',
            'priority'   => '0.8',
            'changefreq' => 'monthly',
        ],
        [
            'loc'        => 'services/intelligence',
            'priority'   => '0.8',
            'changefreq' => 'monthly',
        ],
        [
            'loc'        => 'services/training-and-education',
            'priority'   => '0.8',
            'changefreq' => 'monthly',
        ],
        // Utility pages
        [
            'loc'        => 'report-theft',
            'priority'   => '0.5',
            'changefreq' => 'yearly',
        ],
    ];

    /**
     * Generate and return XML sitemap
     * 
     * @return ResponseInterface
     */
    public function index(): ResponseInterface
    {
        $baseUrl = rtrim(base_url(), '/');
        $lastmod = date('Y-m-d');

        // Build XML
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($this->pages as $page) {
            $loc = $baseUrl . '/' . $page['loc'];
            
            $xml .= "  <url>\n";
            $xml .= "    <loc>" . htmlspecialchars($loc, ENT_XML1, 'UTF-8') . "</loc>\n";
            $xml .= "    <lastmod>{$lastmod}</lastmod>\n";
            $xml .= "    <changefreq>{$page['changefreq']}</changefreq>\n";
            $xml .= "    <priority>{$page['priority']}</priority>\n";
            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>';

        // Return XML response
        return $this->response
            ->setStatusCode(200)
            ->setContentType('application/xml')
            ->setBody($xml);
    }

    /**
     * Generate robots.txt dynamically (alternative to static file)
     * 
     * @return ResponseInterface
     */
    public function robots(): ResponseInterface
    {
        $baseUrl = rtrim(base_url(), '/');
        
        $robots = "# Hex Forensics Robots.txt\n";
        $robots .= "# Last updated: " . date('Y-m-d') . "\n\n";
        
        $robots .= "# Allow all legitimate crawlers\n";
        $robots .= "User-agent: *\n";
        $robots .= "Allow: /\n\n";
        
        $robots .= "# Disallow admin and system paths\n";
        $robots .= "Disallow: /app/\n";
        $robots .= "Disallow: /system/\n";
        $robots .= "Disallow: /writable/\n";
        $robots .= "Disallow: /vendor/\n";
        $robots .= "Disallow: /tests/\n\n";
        
        $robots .= "# Block form submission endpoints\n";
        $robots .= "Disallow: /submit-theft-report\n";
        $robots .= "Disallow: /submit-contact\n\n";
        
        $robots .= "# Crawl-delay for aggressive bots\n";
        $robots .= "User-agent: AhrefsBot\n";
        $robots .= "Crawl-delay: 10\n\n";
        
        $robots .= "User-agent: SemrushBot\n";
        $robots .= "Crawl-delay: 10\n\n";
        
        $robots .= "User-agent: MJ12bot\n";
        $robots .= "Disallow: /\n\n";
        
        $robots .= "User-agent: DotBot\n";
        $robots .= "Disallow: /\n\n";
        
        $robots .= "# Sitemap location\n";
        $robots .= "Sitemap: {$baseUrl}/sitemap.xml\n";

        return $this->response
            ->setStatusCode(200)
            ->setContentType('text/plain')
            ->setBody($robots);
    }
}
