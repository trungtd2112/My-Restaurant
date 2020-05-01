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

class Cart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Dish_model');
    }


    public function index()
    {
        $this->load->model('admin/Slide_model');
        $header_data = json_decode($this->Slide_model->getHeaderData(), true);
        $data['header_data'] = $header_data;
        $dish_info = $this->Dish_model->getDishData();
        $data['dish_info'] = $dish_info;
        $data['subview'] = 'client/cart';
        $this->load->view('client/index', $data);
    }

    public function addCart($dish_id)
    {
        $this->load->model('admin/Slide_model');
        $header_data = json_decode($this->Slide_model->getHeaderData(), true);
        $data['header_data'] = $header_data;
        if (isset($_SESSION['cart'][$dish_id])) {
            $_SESSION['cart'][$dish_id]++;
        } else {
            $_SESSION['cart'][$dish_id] = 1;
        }
        unset($_SESSION['cart']["images"]);
        $data['number_of_dishes'] = count($this->Dish_model->getDishData());
        $data['menu'] = $this->Dish_model->getDishData();
        $data['featured_dish'] = $this->Dish_model->getFeaturedDish();
        $data['subview'] = 'client/menu';
        $this->load->view('client/index', $data);
    }

    public function update()
    {
        $this->load->model('admin/Slide_model');
        $header_data = json_decode($this->Slide_model->getHeaderData(), true);
        $data['header_data'] = $header_data;
        $_SESSION['cart'] = $_POST['quantity'];
        $dish_info = $this->Dish_model->getDishData();
        $data['dish_info'] = $dish_info;
        $data['subview'] = 'client/cart';
        $this->load->view('client/index', $data);
    }

    public function delete($dish_id)
    {
        $this->load->model('admin/Slide_model');
        $header_data = json_decode($this->Slide_model->getHeaderData(), true);
        $data['header_data'] = $header_data;
        unset($_SESSION['cart'][$dish_id]);
        $data['dish_info'] = $this->Dish_model->getDishData();;
        $data['subview'] = 'client/cart';
        $this->load->view('client/index', $data);
    }

    public function handle_order()
    {
        $customer_name = $this->input->post('customer_name');
        $customer_email = $this->input->post('customer_email');
        $customer_phone = $this->input->post('customer_phone');
        $customer_address = $this->input->post('customer_address');
        $bill_status = 0;
        $dish_info = $this->Dish_model->getDishData();
        $total_cost = 0;
        $price_of_each_dish = array();
        if (isset($_SESSION['cart']) && array_sum($_SESSION['cart']) > 0) {
            foreach ($_SESSION['cart'] as $key_cart => $value_cart) {
                foreach ($dish_info as $key_dish => $value_dish) {
                    if ($key_cart == $value_dish['dish_id']) {
                        $price_of_each_dish[$key_cart] = $value_cart * $value_dish['dish_price'];
                        $total_cost += $value_cart * $value_dish['dish_price'];
                    }
                }
            }
        }
        $bill_data = array(
            'customer_name' => $customer_name,
            'customer_email' => $customer_email,
            'customer_phone' => $customer_phone,
            'customer_address' => $customer_address,
            'total_price' => $total_cost
        );
        //insert data into table "bill"
        $this->load->model('admin/Bill_model');
        $bill_id = $this->Bill_model->insertBillData($bill_data);
        //insert data into table "bill_details"
        foreach ($price_of_each_dish as $key1 => $value1) {
            foreach ($dish_info as $key2 => $value2) {
                if ($key1 == $value2['dish_id']) {
                    $bill_details_data = array(
                        'bill_id' => $bill_id,
                        'dish_id' => $key1,
                        'dish_name' => $value2['dish_name'],
                        'dish_price' => $value2['dish_price'],
                        'quantity' => (int) ($value1 / $value2['dish_price']),
                        'total' => $value1,
                    );
                    $this->Bill_model->insertBillDetailsData($bill_details_data);
                }
            }
        }
        $content = '<div style="border: 1px dotted forestgreen;">
            <h3 align="center">Thông tin khách hàng</h3>
            Họ tên:' . $customer_name . ' <br>
            Sđt:' . $customer_phone . ' <br>
            email: ' . $customer_email . ' <br>
            địa chỉ : ' . $customer_address . '
            </div>
            <table style="width: 100%; text-align: center" >
                <thead style="background-color: cornflowerblue;">
                    <tr>
                        <th>Mã Sản phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <tbody>';
                
        $bill_details_data = $this->Bill_model->getBillDetailsData($bill_id);
        foreach($bill_details_data as $key => $value) {
            $content .= '<tr>
            <td>#' . $value['dish_id'] . '</td>
            <td>' . $value['dish_name'] . '</td>
            <td>' . $value['quantity'] . '</td>
            <td>' . $value['dish_price'] .'$'. '</td>
            <td>' . $value['total'].'$' .'</td>
            </tr>';
        }
        $content .= '<tr style="font-size: 30px; font-weight: bold; color: red;">
                <td >Tổng tiền</td>
                <td  colspan="4" align="right">' .  number_format($total_cost, 0, '', '.') . '</td>
                        </tr>
                    
                    </tbody>
                </table>
                <p align="center" style="font-weight: bold;">Cảm ơn bạn đã ủng hộ nhà hàng</p>';
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
            $mail->Body    = $content;
            unset($_SESSION['cart']);
            $mail->send();
            $this->load->view('client/success_order');
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

/* End of file Cart.php */
