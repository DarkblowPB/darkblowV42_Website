<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Packshop extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->lang->load(array('header', 'string', 'message'));
        $this->load->model('main/packshop_model', 'packshop');
        $this->darkblowlib->FeatureControl('packshop', '');

        $this->darkblowprotection->RunningLegality();
        // $this->darkblowlicense->DarkblowPBLicense();
        $this->darkblowprotection->BlockedIP_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->Maintenance_Protection();
        $this->darkblowprotection->PackshopPage_Protection();
    }

    public function index()
    {
        if ($this->input->is_ajax_request()) return;

        $data['title'] = 'Packshop';
        $data['isi'] = 'main/content/packshop/content_packshop';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    public function details()
    {
        if ($this->input->is_ajax_request()) return;

        $data['title'] = 'Pack Details';
        $data['isi'] = 'main/content/packshop/content_details';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    public function do_buy()
    {
        if ($this->input->is_ajax_request()) {
            $response = array();
            $this->form_validation->set_error_delimiters('', '');

            $this->form_validation->set_rules(
                'id_pack',
                'Package',
                'required|numeric',
                array(
                    'required' => '%s cannot be empty.',
                    'numeric' => 'Invalid %s'
                )
            );
            if ($this->form_validation->run()) $this->packshop->BuyPack();
            else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = validation_errors();

                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else return;
    }
}

/* End of file Packshop.php */
