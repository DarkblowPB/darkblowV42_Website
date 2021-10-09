<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Api extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

	function getnewtoken()
	{
		$response = array();

		$response['response'] = 'true';
		$response['token'] = $this->security->get_csrf_hash();

		echo json_encode($response);
	}

	function getlaunchertoken()
	{
		if (empty($this->input->get('token')))
		{
			echo "Invalid Token";
		}
		else if (!empty($this->input->get('token')))
		{
			if ($this->input->get('token') == 'darkblowpbreborn_2021')
			{
				$query = $this->db->get('info_launcherkey')->row();
				if ($query)
				{
					echo $query->key;
				}
				else
				{
					echo "Invalid Token";
				}
			}
			else
			{
				echo "Invalid Token";
			}
		}
		else
		{
			echo "adm adm";
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>