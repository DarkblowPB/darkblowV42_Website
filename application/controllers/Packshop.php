<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Packshop extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->lang->load(array('header', 'string', 'message'));
        $this->load->model('main/packshop_model', 'packshop');
        $this->lib->GetVisitorData('Packshop');

        $this->allprotect->Web_Protection();
        $this->allprotect->Maintenance_Protection();
        $this->allprotect->BlockedAccount_Protection();
        $this->allprotect->DarkblowCopierGuard();
        $this->main_protect->mainProtectA();
        $this->main_protect->SessionProtector();
        $this->lib->FeatureControl('packshop', '');
    }

    public function index()
    {
        $data['title'] = 'Packshop';
        $data['isi'] = 'main/content/packshop/content_packshop';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    public function details()
    {
        $data['title'] = 'Pack Details';
        $data['isi'] = 'main/content/packshop/content_details';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    public function do_details()
    {
        $response = array();
    }

    public function do_buy()
    {
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

            echo json_encode($response);
        }
    }
}

/* End of file Packshop.php */
