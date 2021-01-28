<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->login_library->adminAuthCheck_Empty();
        $this->load->model('moderatorpanel/Adminaccountconfig_model', 'configakun');
    }
    function index()
    {
        if (isset($_POST['submit_changes'])) 
        {
            include 'assets/include.php';

            $player_id = $_POST['player_id'];
            $login = $_POST['username'];
            $player_name = $_POST['nickname'];
            $email = $_POST['email'];
            $hint_question = $_POST['hint_question'];
            $hint_answer = $_POST['hint_answer'];

            $sql = $connec->prepare("SELECT * FROM accounts WHERE player_id = '".$_SESSION['uid_admin']."'");
            $sql->execute();
            $result = $sql->fetch(PDO::FETCH_ASSOC);
            if ($result) 
            {
                $sql_0 = 'UPDATE accounts '
                . 'SET login = :aa '
                . 'WHERE player_id = :bb';
                $stmt = $connec->prepare($sql_0);
                $stmt->bindParam(':aa', $login, PDO::PARAM_STR);
                $stmt->bindParam(':bb', $_SESSION['uid_admin'], PDO::PARAM_STR);
                $stmt->execute();

                $sql_1 = 'UPDATE accounts '
                . 'SET player_name = :cc '
                . 'WHERE player_id = :dd';
                $stmt_1 = $connec->prepare($sql_1);
                $stmt_1->bindParam(':cc', $player_name, PDO::PARAM_STR);
                $stmt_1->bindParam(':dd', $_SESSION['uid_admin'], PDO::PARAM_STR);
                $stmt_1->execute();

                $sql_2 = 'UPDATE accounts '
                . 'SET email = :ee '
                . 'WHERE player_id = :ff';
                $stmt_2 = $connec->prepare($sql_2);
                $stmt_2->bindParam(':ee', $email, PDO::PARAM_STR);
                $stmt_2->bindParam(':ff', $_SESSION['uid_admin'], PDO::PARAM_STR);
                $stmt_2->execute();

                $sql_3 = 'UPDATE accounts '
                . 'SET hint_question = :gg '
                . 'WHERE player_id = :hh';
                $stmt_3 = $connec->prepare($sql_3);
                $stmt_3->bindParam(':gg', $hint_question, PDO::PARAM_STR);
                $stmt_3->bindParam(':hh', $_SESSION['uid_admin'], PDO::PARAM_STR);
                $stmt_3->execute();

                $sql_4 = 'UPDATE accounts '
                . 'SET hint_answer = :ii '
                . 'WHERE player_id = :jj';
                $stmt_4 = $connec->prepare($sql_4);
                $stmt_4->bindParam(':ii', $hint_answer, PDO::PARAM_STR);
                $stmt_4->bindParam(':jj', $_SESSION['uid_admin'], PDO::PARAM_STR);
                $stmt_4->execute();

                if ($sql_0 && $sql_1 && $sql_2 && $sql_3 && $sql_4) 
                {
                    $this->session->set_flashdata('Success', 'Config Updated Successfully');
                    redirect(base_url('moderatorpanel/account_config'), 'refresh');
                }
                else 
                {
                    $this->session->set_flashdata('Failed', 'Config Updated Failed');
                    redirect(base_url('moderatorpanel/account_config'), 'refresh');
                }
            }
        }
        $data['title'] = 'DarkblowPB || Account Configuration';
        $data['header'] = 'Configuration';

        $data['config'] = $this->configakun->getAccountConfig();

        $data['content'] = 'moderatorpanel/content/config/content_config';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>