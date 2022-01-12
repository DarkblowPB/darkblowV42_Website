<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Rankawardsmanagement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->allprotect->AdminDashboard_Protection();
        $this->load->model('admin/rankawardsmanagement_model', 'rankawards');
    }

    function index()
    {
        $data['title'] = 'Rank Awards';
        $data['header'] = 'Rank Awards';

        $data['awards'] = $this->rankawards->GetAllRankRewards();

        $data['content'] = 'admin/content/rankawardsmanagement/content_rankawardsmanagement';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $data['title'] = 'Create New Rank Awards';
        $data['header'] = 'Create New Rank Awards';

        $data['items'] = $this->rankawards->GetAllItems();
        $data['rank'] = $this->rankawards->GetAllRank();

        $data['content'] = 'admin/content/rankawardsmanagement/content_add';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function do_add()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'rank_id',
            'Rank',
            'required|in_list[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51]', // Last Rank = Hero
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s'
            )
        );
        $this->form_validation->set_rules(
            'item_id',
            'Reward',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'item_count',
            'Duration',
            'required|in_list[64800,259200,604800,2592000]', // 1 Day, 3 Days, 7 Days, 30 Days.
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        if ($this->form_validation->run()) $this->rankawards->AddNewAwards();
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            echo json_encode($response);
        }
    }

    function do_delete()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'rank_id',
            'Rank ID',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'item_id',
            'Item ID',
            'required|numeric|min_length[9]|max_length[10]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.',
                'min_length' => '%s Must Contains 9 Numeric Characters Or More.',
                'max_length' => '%s Only Can Contains Max 11 Numeric Characters.'
            )
        );
        if ($this->form_validation->run()) $this->rankawards->DeleteAwards();
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>