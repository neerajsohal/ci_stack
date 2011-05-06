<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_form_validation extends CI_form_validation {

    function valid_url($str){
            if(filter_var($str, FILTER_VALIDATE_URL)){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }
} 