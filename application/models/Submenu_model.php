<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

// dbsubmenu
    private $_tableSubmenu = "user_sub_menu";

    public $id;
    public $menu_id;
    public $title;
    public $url;
    public $icon;
    public $is_active;

    public function getByIdSubmenu($id) {
        return $this->db->get_where($this->_tableSubmenu, ['id' => $id])->row();
    }

    public function saveSubmenu() {
        $post = $this->input->post();
        $this->menu_id = $post['menu_id'];
        $this->title = $post['title'];
        $this->url = $post-['url'];
        $this->icon = $post['icon'];
        $this->is_active = $post['is_active'];

        return $this->db->insert($this->_tableSubmenu, $this);
    }

    public function updateSubmenu() {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->menu_id = $post['menu_id'];
        $this->title = $post['title'];
        $this->url = $post['url'];
        $this->icon = $post['icon'];
        $this->is_active = $post['is_active'];

        return $this->db->update($this->_tableSubmenu, $this, array('id' => $post['id']));
    }

    public function deleteSubmenu($id) {
        return $this->db->delete($this->_tableSubmenu, array('id' => $id));
    }
}