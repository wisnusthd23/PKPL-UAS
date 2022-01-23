<?php

function is_logged_in()
{
    $ci = get_instance();
    if(!$ci->session->userdata('username')){
        redirect('Login');
    } else {
        $nama_user = $ci->session->userdata('nama_usernama');
    }
}