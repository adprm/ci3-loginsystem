<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('menu_model');
    }

    public function index() {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('templates/footer');

    }

    public function add() {
        $menu = $this->menu_model;

        $validation = $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($validation->run() == false) {
            $this->session->set_flashdata('message_error', '<div class="alert alert-danger" role="alert">
            New menu dont added!</div>');
        } else {
            $menu->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New menu added!</div>');
        }

        redirect('menu');
    }

    function edit($id = null) {
        $data['title'] = "Edit Menu";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        if (!isset($id)) redirect('menu');

        $menu = $this->menu_model;
        $validation = $this->form_validation->set_rules('menu', 'Menu', 'required');

        $data['menu'] = $menu->getById($id);
        if (!$data['menu']) show_404();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/edit_menu', $data);
        $this->load->view('templates/footer');

        if ($validation->run() == false) {
            $this->session->set_flashdata('message_error', '<div class="alert alert-danger" role="alert">
            Data failed to edit!</div>');
        } else {
            $menu->update();
            $this->session->set_flashdata('message_edited_success', '<div class="alert alert-success" role="alert">
            Data edited successfully!</div>');
            redirect('menu');
        }
    }

    public function delete($id = null) {
        if ($this->menu_model->delete($id)) {
            $this->session->set_flashdata('message_delete', '<div class="alert alert-success" role="alert">
            Data successfully deleted!</div>');
            redirect('menu');
        }
    }

    public function submenu() {
        $data['title'] = "Submenu Management";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/submenu', $data);
        $this->load->view('templates/footer');
    }
}