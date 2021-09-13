<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Playtime extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->allprotect->AdminDashboard_Protection();
        $this->load->model('admin/eventsplaytime_model', 'eventsplaytime');
        $this->load->model('admin/eventslogin_model', 'eventslogin');
    }

    function index()
    {
        return base_url('adm/dashboard');
        // $data['title'] = 'Playtime Events';
        // $data['header'] = 'Playtime Events';

        // $data['playtime'] = $this->eventsplaytime->GetAllEvents();

        // $data['content'] = 'admin/content/events/playtime/content_playtime';
        // $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function add()
    {
        return base_url('adm/dashboard');
        // $data['title'] = 'Create Playtime Events';
        // $data['header'] = 'Create Playtime Events';

        // $data['items'] = $this->eventsplaytime->GetAllItems();
        
        // $data['content'] = 'admin/content/events/playtime/content_add';
        // $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function do_add()
    {
        // $response = array();

        // $this->form_validation->set_rules(
        //     'date_start',
        //     'Date Start',
        //     'required',
        //     array('required' => '%s Cannot Be Empty.')
        // );
        // $this->form_validation->set_rules(
        //     'date_end',
        //     'Date End',
        //     'required',
        //     array('required' => '%s Cannot Be Empty.')
        // );
        // $this->form_validation->set_rules(
        //     'title',
        //     'Title',
        //     'required',
        //     array('required' => '%s Cannot Be Empty.')
        // );
        // $this->form_validation->set_rules(
        //     'seconds_target',
        //     'Playtime',
        //     'required|in_list[1800,3600,7200]',
        //     array(
        //         'required' => '%s Cannot Be Empty.',
        //         'in_list' => 'Invalid %s.'
        //     )
        // );
        // $this->form_validation->set_rules(
        //     'reward_type',
        //     'Reward Type',
        //     'required|in_list[single_reward, double_reward]',
        //     array(
        //         'required' => '%s Cannot Be Empty.',
        //         'in_list' => 'Invalid %s.'
        //     )
        // );
        // if ($this->form_validation->run())
        // {
        //     $this->eventsplaytime->AddNewEvents();
        // }
        // else
        // {
        //     $this->form_validation->set_error_delimiters('', '');

        //     $response['response'] = 'false';
        //     $response['token'] = $this->security->get_csrf_hash();
        //     $response['message'] = validation_errors();
        // }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>