<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function sendTestEmail(): void
    {
        $email = \Config\Services::email();
        $email->setTo('ashshiddiqihasbi@gmail.com');
        $email->setSubject('Test email');
        $email->setMessage('This is a test email from CodeIgniter 4.');
        if ($email->send()) {
            echo 'Email sent successfully.';
        } else {
            echo 'Failed to send email: ' . $email->printDebugger(['headers']);
        }
    }
}
