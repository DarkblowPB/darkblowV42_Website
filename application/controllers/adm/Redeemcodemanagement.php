<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Redeemcodemanagement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/redeemcodemanagement_model', 'redeemcodemanagement');
        $this->darkblowprotection->RunningLegality();
        // $this->darkblowlicense->DarkblowPBLicense();
        $this->darkblowprotection->RequireLoginAdmin_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->RequireAccessAdmin_Protection();
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
        if ($this->form_validation->run()) $this->redeemcodemanagement->DeleteCode();
        else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->darkblowmessage->AjaxFlashData($response);
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
            'item_id',
            'Item ID',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Only Can Use Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'item_count',
            'Duration',
            'required|in_list[64800,259200,604800,2592000]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s'
            )
        );
        $this->form_validation->set_rules(
            'item_code',
            'Code',
            'required|min_length[19]|max_length[19]|is_unique[item_code.item_code]',
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
        $this->form_validation->set_rules(
            'valid_date',
            'Valid Date',
            'required|in_list[1,3,7,15,30]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        if ($this->form_validation->run()) $this->redeemcodemanagement->CreateNewRedeemCodeV2();
        else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
