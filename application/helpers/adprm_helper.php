<?php

function is_looged_in() {
    // cek sudah login atau belu
    if (!$this->session->userdata('email')) {
        redirect('auth');
    }
}