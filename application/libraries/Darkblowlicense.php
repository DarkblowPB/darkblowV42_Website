<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Darkblowlicense
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function LicenseInit(string $license_type = "")
    {
        $license = "";
        $lifetime = "";
        if ($license_type == "license") return $license;
        else if ($license_type == "lifetime") return $lifetime;
        else redirect('https://xnxx.com', 'refresh');
    }

    public function DarkblowPBLicense(string $license)
    {
        if ($license != $this->LicenseInit('license')) return show_error('Invalid Web License', 401, 'An Error Was Encountered: class (License)');
        else if (time() > $this->LicenseInit('lifetime')) return show_error('License Expired', 401, 'An Error Was Encountered: class (license)');
    }
}

/* End of file Darkblowlicense.php */
