<?php
class MY_Loader extends CI_Loader {
    
    function template($view, $vars = array(), $return = FALSE)
    {
        $this->view('common/header', $vars, $return);
        $this->view('common/nav', $vars, $return);
        $this->view($view, $vars, $return);
        $this->view('common/footer', $vars, $return);
    }
    
}