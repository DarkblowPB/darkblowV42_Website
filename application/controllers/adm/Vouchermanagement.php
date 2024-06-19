<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

use Mpdf\HTMLParserMode;
use Mpdf\Mpdf;

defined('BASEPATH') or exit('No direct script access allowed');

class Vouchermanagement extends DARKBLOW_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/vouchermanagement_model', 'vouchermanagement');

        $this->darkblowprotection->RunningLegality();
        // $this->darkblowlicense->DarkblowPBLicense();
        $this->darkblowprotection->RequireLoginAdmin_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->RequireAccessAdmin_Protection();
    }

    function index()
    {
        $data['title'] = 'Voucher Management';
        $data['header'] = 'Voucher Management';

        $data['voucher'] = $this->vouchermanagement->GetAllVoucher();

        $data['content'] = 'admin/content/vouchermanagement/content_vouchermanagement';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function details($voucher_id = null)
    {
        if ($voucher_id == null) redirect(base_url('adm/vouchermanagement'), 'refresh');
        else {
            $data['title'] = 'Voucher Details';
            $data['header'] = 'Voucher Details';

            $data['voucher'] = $this->vouchermanagement->GetVoucherDetails($voucher_id);

            $data['content'] = 'admin/content/vouchermanagement/content_details';
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        }
    }

    function add($type = null)
    {
        if ($type == null) redirect(base_url('adm/vouchermanagement'), 'refresh');
        else {
            $data['title'] = 'Add New Voucher';
            $data['header'] = 'Add New Voucher';
            $data['type'] = $type;
            $data['items'] = $this->vouchermanagement->GetAllItems();
            $data['content'] = 'admin/content/vouchermanagement/content_add';
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        }
    }

    function do_add()
    {
        $response = array();

        $data = array(
            'type' => $this->input->post('type')
        );

        $this->form_validation->set_error_delimiters('', '');

        switch ($data['type']) {
            case 'small': {
                    $this->form_validation->set_rules(
                        'reward_1',
                        'Reward 1',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_2',
                        'Reward 2',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_3',
                        'Reward 3',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'cash_amount',
                        'Cash Amount',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'webcoin_amount',
                        'Webcoin Amount',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'voucher_code',
                        'Voucher Code',
                        'required|min_length[24]|max_length[24]|is_unique[item_voucher.voucher_code]',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'min_length' => '%s Must Contains 24 Characters Or More.',
                            'max_length' => '%s Only Can Contains 24 Characters.',
                            'is_unique' => '%s Already Exists.'
                        )
                    );
                    if ($this->form_validation->run()) $this->vouchermanagement->AddNewVoucher('small');
                    else {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = validation_errors();

                        $this->darkblowmessage->AjaxFlashData($response);
                    }
                    break;
                }
            case 'medium': {
                    $this->form_validation->set_rules(
                        'reward_1',
                        'Reward 1',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_2',
                        'Reward 2',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_3',
                        'Reward 3',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_4',
                        'Reward 4',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_5',
                        'Reward 5',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'cash_amount',
                        'Cash Amount',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'webcoin_amount',
                        'Webcoin Amount',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'voucher_code',
                        'Voucher Code',
                        'required|min_length[24]|max_length[24]|is_unique[item_voucher.voucher_code]',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'min_length' => '%s Must Contains 24 Characters Or More.',
                            'max_length' => '%s Only Can Contains 24 Characters.',
                            'is_unique' => '%s Already Exists.'
                        )
                    );
                    if ($this->form_validation->run()) $this->vouchermanagement->AddNewVoucher('medium');
                    else {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = validation_errors();

                        $this->darkblowmessage->AjaxFlashData($response);
                    }
                    break;
                }
            case 'large': {
                    $this->form_validation->set_rules(
                        'reward_1',
                        'Reward 1',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_2',
                        'Reward 2',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_3',
                        'Reward 3',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_4',
                        'Reward 4',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_5',
                        'Reward 5',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_6',
                        'Reward 6',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_7',
                        'Reward 7',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'cash_amount',
                        'Cash Amount',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'webcoin_amount',
                        'Webcoin Amount',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'voucher_code',
                        'Voucher Code',
                        'required|min_length[24]|max_length[24]|is_unique[item_voucher.voucher_code]',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'min_length' => '%s Must Contains 24 Characters Or More.',
                            'max_length' => '%s Only Can Contains 24 Characters.',
                            'is_unique' => '%s Already Exists.'
                        )
                    );
                    if ($this->form_validation->run()) $this->vouchermanagement->AddNewVoucher('large');
                    else {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = validation_errors();

                        $this->darkblowmessage->AjaxFlashData($response);
                    }
                    break;
                }
            case 'extra_large': {
                    $this->form_validation->set_rules(
                        'reward_1',
                        'Reward 1',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_2',
                        'Reward 2',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_3',
                        'Reward 3',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_4',
                        'Reward 4',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_5',
                        'Reward 5',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_6',
                        'Reward 6',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_7',
                        'Reward 7',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_8',
                        'Reward 8',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'reward_9',
                        'Reward 9',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'cash_amount',
                        'Cash Amount',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'webcoin_amount',
                        'Webcoin Amount',
                        'required|numeric',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'numeric' => '%s Only Can Using Numeric Characters.'
                        )
                    );
                    $this->form_validation->set_rules(
                        'voucher_code',
                        'Voucher Code',
                        'required|min_length[24]|max_length[24]|is_unique[item_voucher.voucher_code]',
                        array(
                            'required' => '%s Cannot Be Empty.',
                            'min_length' => '%s Must Contains 24 Characters Or More.',
                            'max_length' => '%s Only Can Contains 24 Characters.',
                            'is_unique' => '%s Already Exists.'
                        )
                    );
                    if ($this->form_validation->run()) $this->vouchermanagement->AddNewVoucher('extra_large');
                    else {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = validation_errors();

                        $this->darkblowmessage->AjaxFlashData($response);
                    }
                    break;
                }

            default: {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Hehe Error :)';

                    $this->darkblowmessage->AjaxFlashData($response);
                    break;
                }
        }
    }

    function print($id = null)
    {
        $mpdf = new Mpdf(['orientation' => 'P']);

        // Meta Data
        $mpdf->SetAuthor($this->darkblowsettings->load()->project_name);
        $mpdf->SetCreator($this->darkblowsettings->load()->project_name);
        $mpdf->SetKeywords($this->darkblowsettings->load()->project_name . " Voucher");
        $mpdf->SetSubject($this->darkblowsettings->load()->project_name . ' Voucher');
        $mpdf->SetTitle($this->darkblowsettings->load()->project_name . ' Voucher');

        // Page
        $css1 = file_get_contents(base_url('assets/goodgames/assets/vendors/bs5/css/bootstrap.min.css'));
        $css2 = file_get_contents(base_url('assets/goodgames/assets/vendor/jquery/dist/jquery.min.js'));

        $mpdf->WriteHTML($css1, HTMLParserMode::HEADER_CSS);
        $mpdf->WriteHTML($css2, HTMLParserMode::HEADER_CSS);
        $mpdf->WriteHTML($this->load->view('admin/content/vouchermanagement/content_print', ['voucher' => $this->vouchermanagement->GetVoucherDetails($id)], TRUE), HTMLParserMode::HTML_BODY);

        $mpdf->Output();
    }

    function do_generatecode()
    {
        $this->vouchermanagement->GenerateVoucherCode();
    }

    function do_delete()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'voucher_code',
            'Voucher Code',
            'required',
            array('required' => '%s Cannot Be Empty.')
        );
        if ($this->form_validation->run()) $this->vouchermanagement->DeleteVoucher();
        else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
