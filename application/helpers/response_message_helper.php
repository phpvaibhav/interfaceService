<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ResponseMessages{


    public static function getStatusCodeMessage($status)
    {
        $CI =& get_instance();
        $codes = Array(
        100 => $CI->lang->line('invalid_api_key'),
        101 => $CI->lang->line('invalid_token'),
        102 => $CI->lang->line('invalid_email_or_password'),
        103 => $CI->lang->line('user_authentication_successfully_done'),
        104 => $CI->lang->line('user_not_found'),
        105 => $CI->lang->line('user_registration_successfully_done'),
        106 => $CI->lang->line('user_authentication_successfully_done'),
        107 => $CI->lang->line('something_went_wrong_please_try_again'),  //something went wrong
        108 => $CI->lang->line('you_are_currently_not_authorised_to_login'),
        109 => $CI->lang->line('invalid_request'),
        110 => $CI->lang->line('user_registration_successfully_done'),
        111 => $CI->lang->line('user_registration_successfully_done'),
        112 => $CI->lang->line('Please_select_image'),
        113 => $CI->lang->line('Please_select_video'),
        114 => $CI->lang->line('no_results_found_right_now'),
        115 => $CI->lang->line('Youre_temporarily_blocked_from_posting') ,
        116 => $CI->lang->line('user_already_registered'),
        117 => $CI->lang->line('email_already_exist'),
        118 => $CI->lang->line('something_went_wrong_please_try_again'),
        119 => $CI->lang->line('contact_verified_successfully'),
          
        120 => $CI->lang->line('A_new_password_has_been_sent_on_your_registered_email'),
        121 => $CI->lang->line('logged_in_successfully'),
        122 => $CI->lang->line('added_successfully'),
        123 => $CI->lang->line('updated_successfully'),
        124 => $CI->lang->line('deleted_successfully'),
        125 => $CI->lang->line('logged_out_successfully'),
        126 => $CI->lang->line('you_are_not_authorised_for_this_action'),
        126 => $CI->lang->line('invalid_email_or_password'),
        
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        306 => '(Unused)',
        307 => 'Temporary Redirect',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Request Entity Too Large',
        414 => 'Request-URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Requested Range Not Satisfiable',
        417 => 'Expectation Failed',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported'

        );
        return (isset($codes[$status])) ? $codes[$status] : '';
    }
}

?>