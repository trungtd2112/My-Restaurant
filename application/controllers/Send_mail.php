<?php
include('PHPMailer-master/src/Exception.php');
include('PHPMailer-master/src/OAuth.php');
include('PHPMailer-master/src/PHPMailer.php');
include('PHPMailer-master/src/POP3.php');
include('PHPMailer-master/src/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

defined('BASEPATH') or exit('No direct script access allowed');

class Send_mail extends CI_Controller
{

    public function index()
    {
        $this->load->view('client/send_mail_view');
    }

    public function send()
    {
        $ten_nguoi_nhan = $this->input->post('ten_nguoi_nhan');
        $email_can_gui = $this->input->post('email_can_gui');
        $noi_dung = $this->input->post('noi_dung');
        echo '<pre>';var_dump($ten_nguoi_nhan);echo '</pre>';
        echo '<pre>';var_dump($email_can_gui);echo '</pre>';
        echo '<pre>';var_dump($noi_dung);echo '</pre>';
        



        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'trungtran.211298@gmail.com';                     // SMTP username
            $mail->Password   = 'otvnhnsfpiqreixy';                               // SMTP password
            $mail->SMTPSecure = 'TLS';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            $mail->CharSet = 'UTF-8';                                   // Tranh bi loi tieng viet khi gui mail
            //Recipients
            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress('ductrung.2112xx@gmail.com', 'Trung');     // Add a recipient            // Name is optional;

            // Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

/* End of file Send_mail.php */
