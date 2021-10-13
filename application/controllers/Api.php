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
        $this->lib->GetVisitorData('Api');
    }

	function getnewtoken()
	{
		$response = array();

		if (empty($this->input->get('tokenkey', true)))
		{
			$response['response'] = 'true';
			$response['token'] = '';

			echo json_encode($response);
		}
		else
		{
			$data = array(
				'tokenkey' => $this->input->get('tokenkey', true)
			);
	
			$query = $this->db->get_where('web_tokenkey', array('token' => $data['tokenkey']))->row();
			if ($query)
			{
				if ($query->is_valid == 0)
				{
					$response['response'] = 'true';
					$response['token'] = '';
	
					echo json_encode($response);
				}
				else if ($query->is_valid == 1)
				{
					$update = $this->db->where('token', $query->token)->update('web_tokenkey', array('is_valid' => '0'));
					$insert = $this->db->insert('web_tokenkey', array('token' => $this->lib->GenerateRandomToken(), 'is_valid' => '1'));
					if ($update && $insert)
					{
						$response['response'] = 'true';
						$response['token'] = $this->security->get_csrf_hash();
						
						echo json_encode($response);
					}
					else
					{
						$response['token'] = 'true';
						$response['token'] = '';
	
						echo json_encode($response);
					}
				}
				else
				{
					$response['response'] = 'true';
					$response['token'] = '';
					
					echo json_encode($response);
				}
			}
			else
			{
				$response['response'] = 'false';
				$response['token'] = '';

				echo json_encode($response);
			}
		}
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