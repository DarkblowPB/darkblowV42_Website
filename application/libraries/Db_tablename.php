<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Db_tablename
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }

    public function GetTable($table)
    {
        $tableList = array(
            0 => 'accounts',
            1 => 'ban_history',
            2 => 'check_user_attendance',
            3 => 'check_user_itemcode',
            4 => 'check_user_voucher',
            5 => 'clan_data',
            6 => 'clan_invites',
            7 => 'events_attendance',
            8 => 'events_login',
            9 => 'events_mapbonus',
            10 => 'events_playtime',
            11 => 'events_quest',
            12 => 'events_rankup',
            13 => 'events_register',
            14 => 'events_visit',
            15 => 'events_xmas',
            16 => 'friends',
            17 => 'info_basic_items',
            18 => 'info_channels',
            19 => 'info_cupons_flags',
            20 => 'info_gameservers',
            21 => 'info_launcherkey',
            22 => 'info_login_configs',
            23 => 'info_missions',
            24 => 'info_rank_awards',
            25 => 'item_code',
            26 => 'item_voucher',
            27 => 'nick_history',
            28 => 'player_bonus',
            29 => 'player_configs',
            30 => 'player_events',
            31 => 'player_items',
            32 => 'player_messages',
            33 => 'player_missions',
            34 => 'player_titles',
            35 => 'shop',
            36 => 'shop_set',
            37 => 'tournament_rules',
            38 => 'trade_market',
            39 => 'web_api_keys',
            40 => 'web_api_limits',
            41 => 'web_api_logs',
            42 => 'web_download_clientlauncher',
            43 => 'web_email_confirmation',
            44 => 'web_exchangeticket',
            45 => 'web_ipbanned',
            46 => 'web_log',
            47 => 'web_quickslide',
            48 => 'web_rankinfo',
            49 => 'web_settings',
            50 => 'web_tokenkey',
            51 => 'webshop'
        );
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>