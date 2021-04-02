<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->admin_protect->adminProtectA();
        $this->load->model('moderatorpanel/Adminaccountconfig_model', 'configakun');
		$this->allprotect->Web_Protection();
    }
    function index()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'min_length[4]|max_length[16]|alpha_numeric|required',
            array(
                'min_length' => '%s Must Using 4 Characters Or More',
                'max_length' => '%s Only 16 Characters Allowed',
                'alpha_numeric' => '%s Can Only Using Alpha Numeric Characters',
                'required' => '%s Cannot Be Empty'
            )
        );
        $this->form_validation->set_rules(
            'nickname',
            'Nickname',
            'min_length[4]|max_length[16]|alpha_numeric|required',
            array(
                'min_length' => '%s Must Using 4 Characters Or More',
                'max_length' => '%s Only 16 Characters Allowed',
                'alpha_numeric' => '%s Can Only Using Alpha Numeric Characters',
                'required' => '%s Cannot Be Empty'
            )
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'valid_email|required',
            array(
                'valid_email' => '%s Invalid',
                'required' => '%s Cannot Be Empty'
            )
        );
        $this->form_validation->set_rules(
            'hint_question',
            'Hint Question',
            'required',
            array('required' => '%s Cannot Be Empty')
        );
        $this->form_validation->set_rules(
            'hint_answer',
            'Hint Answer',
            'required',
            array('required' => '%s Cannot Be Empty')
        );
        if ($this->form_validation->run() === FALSE) 
        {
            $data['title'] = 'DarkblowPB || Account Configuration';
            $data['header'] = 'Configuration';
    
            $data['config'] = $this->configakun->getAccountConfig();
    
            $data['content'] = 'moderatorpanel/content/config/content_config';
            $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);   
        }
        else 
        {
            $this->configakun->updateAccountConfig();
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>