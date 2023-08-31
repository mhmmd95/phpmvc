<?php

namespace Services;

use App\Core\App;
use PHPMailer\PHPMailer\PHPMailer;

class CustomPhpMailer {

    public function __construct(){}     

    public function buildMailer(): PHPMailer{
        
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = App::get('phpMailer')['PHP_MAILER_HOST'];
        $phpmailer->SMTPAuth = App::get('phpMailer')['PHP_MAILER_SMTPAUTH'];
        $phpmailer->Port = App::get('phpMailer')['PHP_MAILER_PORT'];
        $phpmailer->Username = App::get('phpMailer')['PHP_MAILER_USERNAME'];
        $phpmailer->Password = App::get('phpMailer')['PHP_MAILER_PASSWORD'];

        return $phpmailer;
    }
}