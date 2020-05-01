<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model {

    public function book_table($booking_data)
    {
        return($this->db->insert('reservation', $booking_data));
    }

}

/* End of file Booking_model.php */
