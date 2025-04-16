<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function digital_forensics()
    {
        $data["page_title"] = "Digital Forensics";
        return $this->render('digital_forensics', $data);
    }

    public function cyber_security()
    {
        $data["page_title"] = "Cyber Security";
        return $this->render('cyber_security', $data);
    }

    public function fraud_investigation()
    {
        $data["page_title"] = "Fraud Investigation";
        return $this->render('fraud_investigation', $data);
    }

    public function intelligence()
    {
        $data["page_title"] = "Intelligence";
        return $this->render('intelligence', $data);
    }

    public function training_and_education()
    {
        $data["page_title"] = "Training and Education";
        return $this->render('training_and_education', $data);
    }

    // Intelligence
    public function geolocation_tracking()
    {
        $data["page_title"] = "Geolocation Tracking";
        $data["nav_title"] = "Intelligence";
        return $this->render('intelligence/geolocation_tracking', $data);
    }

    public function cdr_extraction_analysis()
    {
        $data["page_title"] = "CDR Extraction & Analysis";
        $data["nav_title"] = "Intelligence";
        return $this->render('intelligence/cdr_extraction_analysis', $data);
    }

    public function communication_intelligence()
    {
        $data["page_title"] = "Communication Intelligence";
        $data["nav_title"] = "Intelligence";
        return $this->render('intelligence/communication_intelligence', $data);
    }

    public function intelligence_gathering()
    {
        $data["page_title"] = "Intelligence Gathering";
        $data["nav_title"] = "Intelligence";
        return $this->render('intelligence/intelligence_gathering', $data);
    }

    // Digital Forensics
    public function mobile_phone_extraction_and_analysis()
    {
        $data["page_title"] = "Mobile Phone Extraction & Analysis";
        $data["nav_title"] = "Digital Forensics";
        return $this->render('digital_forensics/mobile_phone_extraction_and_analysis', $data);
    }

    public function computer_extraction_and_analysis()
    {
        $data["page_title"] = "Computer Extraction & Analysis";
        $data["nav_title"] = "Digital Forensics";
        return $this->render('digital_forensics/computer_extraction_and_analysis', $data);
    }

    public function forensic_audio_video_image_analysis()
    {
        $data["page_title"] = "Forensic Audio, Video & Image Analysis";
        $data["nav_title"] = "Digital Forensics";
        return $this->render('digital_forensics/forensic_audio_video_image_analysis', $data);
    }

    public function vehicle_forensics()
    {
        $data["page_title"] = "Vehicle Forensics";
        $data["nav_title"] = "Digital Forensics";
        return $this->render('digital_forensics/vehicle_forensics', $data);
    }

    public function drone_extraction_and_analysis()
    {
        $data["page_title"] = "Drone Extraction & Analysis";
        $data["nav_title"] = "Digital Forensics";
        return $this->render('digital_forensics/drone_extraction_and_analysis', $data);
    }

    public function forensic_laboratory_setup()
    {
        $data["page_title"] = "Forensic Laboratory Setup";
        $data["nav_title"] = "Digital Forensics";
        return $this->render('digital_forensics/forensic_laboratory_setup', $data);
    }

    // Cyber Security
    public function penetration_testing()
    {
        $data["page_title"] = "Penetration Testing";
        $data["nav_title"] = "Cyber Security";
        return $this->render('cyber_security/penetration_testing', $data);
    }

    public function vulnerability_assessment()
    {
        $data["page_title"] = "Vulnerability Assessment";
        $data["nav_title"] = "Cyber Security";
        return $this->render('cyber_security/vulnerability_assessment', $data);
    }

    public function osint_investigation()
    {
        $data["page_title"] = "OSINT Investigation";
        $data["nav_title"] = "Cyber Security";
        return $this->render('cyber_security/osint_investigation', $data);
    }

    public function internet_sweeping()
    {
        $data["page_title"] = "Internet Sweeping";
        $data["nav_title"] = "Cyber Security";
        return $this->render('cyber_security/internet_sweeping', $data);
    }

    public function cyber_crimes_investigations()
    {
        $data["page_title"] = "Cyber Crimes Investigations";
        $data["nav_title"] = "Cyber Security";
        return $this->render('cyber_security/cyber_crimes_investigations', $data);
    }

    // Fraud Investigation
    public function asset_tracing()
    {
        $data["page_title"] = "Asset Tracing";
        $data["nav_title"] = "Fraud Investigation";
        return $this->render('fraud_investigation/asset_tracing', $data);
    }

    public function electoral_fraud_investigation()
    {
        $data["page_title"] = "Electoral Fraud Investigation";
        $data["nav_title"] = "Fraud Investigation";
        return $this->render('fraud_investigation/electoral_fraud_investigation', $data);
    }

    public function cryptocurrency_crimes_investigation()
    {
        $data["page_title"] = "Cryptocurrency Crimes Investigation";
        $data["nav_title"] = "Fraud Investigation";
        return $this->render('fraud_investigation/cryptocurrency_crimes_investigation', $data);
    }

    public function insurance_fraud_investigation()
    {
        $data["page_title"] = "Insurance Fraud Investigation";
        $data["nav_title"] = "Fraud Investigation";
        return $this->render('fraud_investigation/insurance_fraud_investigation', $data);
    }

    public function questioned_document_investigation()
    {
        $data["page_title"] = "Questioned Document Investigation";
        $data["nav_title"] = "Fraud Investigation";
        return $this->render('fraud_investigation/questioned_document_investigation', $data);
    }

    public function financial_crimes_investigation()
    {
        $data["page_title"] = "Financial Crimes Investigation";
        $data["nav_title"] = "Fraud Investigation";
        return $this->render('fraud_investigation/financial_crimes_investigation', $data);
    }

    public function payroll_fraud_investigation()
    {
        $data["page_title"] = "Payroll Fraud Investigation";
        $data["nav_title"] = "Fraud Investigation";
        return $this->render('fraud_investigation/payroll_fraud_investigation', $data);
    }

    public function business_email_compromise_investigation()
    {
        $data["page_title"] = "Business Email Compromise Investigation";
        $data["nav_title"] = "Fraud Investigation";
        return $this->render('fraud_investigation/business_email_compromise_investigation', $data);
    }

    public function healthcare_fraud_investigation()
    {
        $data["page_title"] = "Healthcare Fraud Investigation";
        $data["nav_title"] = "Fraud Investigation";
        return $this->render('fraud_investigation/healthcare_fraud_investigation', $data);
    }

    public function tax_fraud_investigation()
    {
        $data["page_title"] = "Tax Fraud Investigation";
        $data["nav_title"] = "Fraud Investigation";
        return $this->render('fraud_investigation/tax_fraud_investigation', $data);
    }

    // Function to render the pages
    public function render($route, $data = [])
    {
        echo view('layout/header', $data);
        echo view('pages/services/'.$route, $data);
        echo view('layout/footer', $data);
    }
}
