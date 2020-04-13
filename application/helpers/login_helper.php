<?php

function is_logged_in()
{
    # code...
    
    $CI =get_instance();
    
    if (!$CI->session->userdata('email')) {
        # code...
        redirect('auth');
    } else {
        # code...
        $status = $CI->session->userdata('status');
        $menu = $CI->uri->segment(2);

        $queryMenu = $CI->db->get_where('user_menu', ['menu' => $menu])->row_array();

        $menu_id = $queryMenu['id'];

        $userAccess = $CI->db->get_where('user_access_menu', [
            'role_id' => $status, 
            'menu_id' => $menu_id
            ]);

        if ($userAccess->num_rows() < 1) {
            # code...
            redirect('blocked');
        }
    }
}