<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->set404Override(function () {
    return view('errors/error_404', ["page_title"=>"Page Not Found"]);
});


$routes->get('/', 'Home::index');

$routes->get('about-us', 'Home::about');
$routes->get('services', 'Home::services');
$routes->get('contact', 'Home::contact');
$routes->get('get-in-touch', 'Home::contact');

$routes->group('services', [], function ($routes) {
    $routes->get('/', 'Home::services');
    $routes->get('digital-forensics', 'Services::digital_forensics');
    $routes->get('cyber-security', 'Services::cyber_security');
    $routes->get('fraud-investigation', 'Services::fraud_investigation');
    $routes->get('intelligence', 'Services::intelligence');
    $routes->get('training-and-education', 'Services::training_and_education');



    // // Intelligence
    // $routes->get('geolocation-tracking', 'Services::geolocation_tracking');
    // $routes->get('cdr-extraction-analysis', 'Services::cdr_extraction_analysis');
    // $routes->get('communication-intelligence', 'Services::communication_intelligence');
    // $routes->get('intelligence-gathering', 'Services::intelligence_gathering');

    // // Digital Forensics
    // $routes->get('mobile-phone-extraction-and-analysis', 'Services::mobile_phone_extraction_and_analysis');
    // $routes->get('computer-extraction-and-analysis', 'Services::computer_extraction_and_analysis');
    // $routes->get('forensic-audio-video-image-analysis', 'Services::forensic_audio_video_image_analysis');
    // $routes->get('drone-extraction-and-analysis', 'Services::drone_extraction_and_analysis');
    // $routes->get('vehicle-forensics', 'Services::vehicle_forensics');
    // $routes->get('forensic-laboratory-setup', 'Services::forensic_laboratory_setup');

    // // Cyber Security
    // $routes->get('penetration-testing', 'Services::penetration_testing');
    // $routes->get('vulnerability-assessment', 'Services::vulnerability_assessment');
    // $routes->get('osint-investigation', 'Services::osint_investigation');
    // $routes->get('internet-sweeping', 'Services::internet_sweeping');
    // $routes->get('cyber-crimes-investigations', 'Services::cyber_crimes_investigations');

    // // Fraud Investigation
    // $routes->get('asset-tracing', 'Services::asset_tracing');
    // $routes->get('electoral-fraud-investigation', 'Services::electoral_fraud_investigation');
    // $routes->get('cryptocurrency-crimes-investigation', 'Services::cryptocurrency_crimes_investigation');
    // $routes->get('insurance-fraud-investigation', 'Services::insurance_fraud_investigation');
    // $routes->get('questioned-document-investigation', 'Services::questioned_document_investigation');
    // $routes->get('financial-crimes-investigation', 'Services::financial_crimes_investigation');
    // $routes->get('payroll-fraud-investigation', 'Services::payroll_fraud_investigation');
    // $routes->get('business-email-compromise-investigation', 'Services::business_email_compromise_investigation');
    // $routes->get('healthcare-fraud-investigation', 'Services::healthcare_fraud_investigation');
    // $routes->get('tax-fraud-investigation', 'Services::tax_fraud_investigation');


    $routes->get('(:any)', 'Services::vehicle_forensics');
});
