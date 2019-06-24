<?php if ( ! defined('BASEPATH')) exit('Direct access allowed');

class LanguageSwitcher extends MY_Controller
{

    public function __construct() {
        parent::__construct();
    }

    function switchLang($language = "") {

        $language = ($language != "") ? $language : "english";
        $param = ['language' => $language];
        $this->db->update('user',$param);
        $this->db->where('id',$this->id);
        $this->session->set_userdata('language', $language);
        $this->config->set_item('language', $language);
      	echo "true";
    }
}