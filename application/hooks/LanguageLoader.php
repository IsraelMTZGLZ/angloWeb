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
            $ci->lang->load('footer_informativa',$siteLang);
            $ci->lang->load('home_informativo',$siteLang);
        } else {
            $ci->lang->load('general_messages','spanish');
            $ci->lang->load('nav_informativo','spanish');
            $ci->lang->load('footer_informativa','spanish');
            $ci->lang->load('home_informativo','spanish');
        }
    }
}
