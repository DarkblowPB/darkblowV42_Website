<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Redeemcodemanagement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->allprotect->AdminDashboard_Protection();
        $this->load->model('admin/redeemcodemanagement_model', 'redeemcodemanagement');
    }

    function index()
    {
        $data['title'] = 'Redeem Code Management';
        $data['header'] = 'Redeem Code';

        $data['redeemcode'] = $this->redeemcodemanagement->GetAllRedeemCode();

        $data['content'] = 'admin/content/redeemcodemanagement/content_redeemcodemanagement';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $data['title'] = 'Add New Redeem Code';
        $data['header'] = 'Add New Redeem Code';

        $data['rewards'] = $this->redeemcodemanagement->GetAllItems();

        $data['content'] = 'admin/content/redeemcodemanagement/content_add';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function do_delete()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules(
            'item_code',
            'Item Code',
            'required',
            array('required' => '%s Cannot Be Empty.')
        );
        if ($this->form_validation->run())
        {
            $this->redeemcodemanagement->DeleteCode();
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            echo json_encode($response);
        }
    }

    /**
     * Generate Code
     * 
     * Available Function: "GenerateCode()" & "GenerateCode2()"
     * 
     * You Can Choose One Of Those Function To Set Your Default Generate Code Function.
     * 
     * Example:
     * 
     * $this->redeemcodemanagement->GenerateCode();
     * 
     * $this->redeemcodemanagement->GenerateCode2();
     * 
     * @return mixed
     * @copyright Darkblow Studio
     */
    function do_generatecode()
    {
        $this->redeemcodemanagement->GenerateCode2();
    }

    function do_add()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules(
            'item_code',
            'Code',
            'required|min_length[19]|max_length[19]',
            array(
                'required' => '%s Cannot Be Empty.',
                'min_length' => '%s Must Contains 19 Characters Or More.',
                'max_length' => '%s Only Can Accepted 19 Characters.'
            )
        );
        $this->form_validation->set_rules(
            'type',
            'Type',
            'required|in_list[Item,Cash,Double]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        if ($this->form_validation->run())
        {
            $this->redeemcodemanagement->CreateNewRedeemCode();
        }
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