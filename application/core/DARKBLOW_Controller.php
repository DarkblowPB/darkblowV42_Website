<?php

defined('BASEPATH') or exit('No direct script access allowed');

class DARKBLOW_Controller extends CI_Controller
{
    public $meta_author;
    public $meta_description;
    public $meta_keywords;
    public $project_name;
    public $project_logo;
    public $project_icon;
    public $running_text;
    public $server_condition;
    public $website_condition;
    public $discord_embed_link;
    public $facebook_embed_link;
    public $instagram_embed_link;
    public $youtube_embed_link;
    public $webshop;
    public $trade_market;
    public $exchange_ticket;
    public $voucher;
    public $forgot_password;
    public $register;
    public $attendance;
    public $redeemcode;
    public $change_email;
    public $event_ticket;
    public $email_verification;
    public $google_register;
    public $web_log;
    public $packshop;
    public $api_authorization_key;
    public $license_key;
    public $license_date_start;
    public $license_date_end;

    public function __construct()
    {
        parent::__construct();

        $settings = $this->darkblowsettings->LoadMainSettings();

        $this->meta_author = $settings['meta_author'];
        $this->meta_description = $settings['meta_description'];
        $this->meta_keywords = $settings['meta_keywords'];
        $this->project_name = $settings['project_name'];
        $this->project_logo = $settings['project_logo'];
        $this->project_icon = $settings['project_icon'];
        $this->running_text = $settings['running_text'];
        $this->server_condition = $settings['server_condition'];
        $this->website_condition = $settings['website_condition'];
        $this->discord_embed_link = $settings['discord_embed_link'];
        $this->facebook_embed_link = $settings['facebook_embed_link'];
        $this->instagram_embed_link = $settings['instagram_embed_link'];
        $this->youtube_embed_link = $settings['youtube_embed_link'];
        $this->webshop = $settings['webshop'];
        $this->exchange_ticket = $settings['exchange_ticket'];
        $this->voucher = $settings['voucher'];
        $this->forgot_password = $settings['forgot_password'];
        $this->register = $settings['register'];
        $this->attendance = $settings['attendance'];
        $this->redeemcode = $settings['redeemcode'];
        $this->change_email = $settings['change_email'];
        $this->event_ticket = $settings['event_ticket'];
        $this->email_verification = $settings['email_verification'];
        $this->packshop = $settings['packshop'];
        $this->api_authorization_key = $settings['api_authorization_key'];
        $this->license_key = $settings['license_key'];
        $this->license_date_start = $settings['license_date_start'];
        $this->license_date_end = $settings['license_date_end'];

        $this->lang->load('menu');
        $this->lang->load('ui');
        $this->lang->load('message');

        $this->darkblowprotection->RunningLegality();
        $this->darkblowprotection->PageDump_Protection();
        if ($this->uri->segment(1) != 'adm') {
            $this->darkblowprotection->BlockedIP_Protection();
            $this->darkblowprotection->Maintenance_Protection();
            $this->darkblowprotection->Main_Protection();
        }

        return $this;
    }
}

/* End of file DARKBLOW_Controller.php */
