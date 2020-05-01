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

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Slide_model');
    }


    public function index()
    {
        $slide_data = json_decode($this->Slide_model->getSlidesData(), true);
        $header_data = json_decode($this->Slide_model->getHeaderData(), true);
        $data['header_data'] = $header_data;
        $data['slide_data'] = $slide_data;
        $data['subview'] = 'client/home';
        $this->load->view('client/index', $data);
    }

    public function booking()
    {
        //lấy về dữ liệu đặt bàn mà người dùng gửi lên cho sever
        $customer_name   = $this->input->post('customer_name');
        $customer_email  = $this->input->post('customer_email');
        $customer_phone  = $this->input->post('customer_phone');
        $reservation_time = $this->input->post('reservation_date') . " " . $this->input->post('reservation_time');
        $number_customer = $this->input->post('number_customer');

        $booking_data = array(
            'customer_name' => $customer_name,
            'customer_email' => $customer_email,
            'customer_phone' => $customer_phone,
            'reservation_time' => $reservation_time,
            'number_customer' => $number_customer
        );

        //gửi mail cho khách hàng
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'trungtran.211298@gmail.com';                     // SMTP username
            $mail->Password   = 'otvnhnsfpiqreixy';                               // SMTP password
            $mail->SMTPSecure = 'TLS';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            $mail->CharSet = 'UTF-8';                                   // Tranh bi loi tieng viet khi gui mail
            //Recipients
            $mail->setFrom('Admin@trung-oishii.com', 'Nhà hàng Trung Oishii');
            $mail->addAddress($customer_email);     // Add a recipient            // Name is optional;

            // Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Thân gửi khách hàng ' . $customer_name;
            $mail->Body    = 'Điện thoại: '.$customer_phone.'<br>'.'Thời gian: '.$reservation_time.'<br>'.'Số người: '.$number_customer.'<br>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            $this->load->view('client/success_booking');
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        //hết phần gửi mail



        $this->load->model('admin/Booking_model');
        if ($this->Booking_model->book_table($booking_data)) {
            $this->load->view('admin/success');
        }
    }
}

/* End of file Home.php */
