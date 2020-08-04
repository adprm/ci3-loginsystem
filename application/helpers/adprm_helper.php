<?php

function is_logged_in() {
    // memamnggil library ci 
    $ci = get_instance();
    // cek sudah login atau belu
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    }
}