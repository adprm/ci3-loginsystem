<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

    public function getSubMenu() {
        $query =    "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id` ";
                    
        return $this->db->query($query)->result_array();
    }

    // db usermenu
    private $_tableMenu = "user_menu";

    public $id;
    public $menu;

    public function getByIdMenu($id) {
        return $this->db->get_where($this->_tableMenu, ['id' => $id])->row();
    }

    public function saveMenu() {
        $post = $this->input->post();
        $this->menu = $post['menu'];

        return $this->db->insert($this->_tableMenu, $this);
    }

    public function updateMenu() {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->menu = $post['menu'];

        return $this->db->update($this->_tableMenu, $this, array('id' => $post['id']));
    }

    public function deleteMenu($id) {
        return $this->db->delete($this->_tableMenu, array("id" => $id));
    }

    // dbsubmenu
    private $_tableSubmenu;

    public $id;
    public $menu_id;
    public $title;
    public $url;
    public $icon;
    public $is_active;

    public function getByIdSubmenu($id) {
        return $this->db->get_where($this->_tableSubmenu, ['id' => $id])->row();
    }

}