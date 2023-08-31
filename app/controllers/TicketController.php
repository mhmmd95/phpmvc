<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\Exception as PHPMailerException;
use Module\Ticket\DataTransferObject\TicketDTO;
use App\Enums\Importance;
use App\Core\App;
use Exception;

class TicketController
{

    public function index()
    {
        $tickets = App::get('database')->table('tickets')->all();
        $importanceCases = Importance::cases();
        return view('tickets_index', compact(['tickets', 'importanceCases']));
    }
    
    public function store()
    {
        App::get('database')->table('tickets')->insert((new TicketDTO(...$_POST))->toArray());

        /*        
        Send email functionality//TODO: add notification interface and concrete class that
        implements the send functionality, to easily change it to sms in the future

        NOTE: the PHPMailer respond with error: conncection time out for now.
        */

        /*try {
                $mail = App::get('mail');

                // Set the email sender and recipient
                $mail->setFrom('sender@example.com', 'Sender Name');
                $mail->addAddress('recipient@example.com', 'Recipient Name');

                // Set the email subject and body
                $mail->Subject = 'This is a test email';
                $mail->Body = 'This is the body of the email.';

                // Send the email
                if ($mail->send()) {
                    echo 'Email sent successfully!';
                } else {
                    echo 'There was an error sending the email: ' . $mail->ErrorInfo;
                }

            } catch (PHPMailerException $e) {
                throw new Exception('error sending your email, ' . $e);
            }*/

        return redirect('');
    }
}
