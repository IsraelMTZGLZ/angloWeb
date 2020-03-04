<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $siteLang = $ci->session->userdata('site_lang');
        if ($siteLang) {
            $ci->lang->load('general_messages',$siteLang);
            $ci->lang->load('nav_informativo',$siteLang);
        } else {
            $ci->lang->load('general_messages','spanish');
            $ci->lang->load('nav_informativo','spanish');

        }
    }
}
