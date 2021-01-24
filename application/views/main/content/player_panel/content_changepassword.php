<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-12">
                <h3 class="nk-decorated-h-2"><span class="text-main-1">Change <span class="text-white">Password</span></span></h3>
                <div class="nk-gap-3"></div>
                <div class="nk-gap-3"></div>
                <div class="container">
                    <div class="col-lg-6 offset-lg-3">
                        <?php
                        if ($this->session->flashdata('success'))
                        {
                            echo "<div class='nk-info-box text-success'><div class='nk-info-box-icon'><i class='ion-checkmark-round'></i></div><h3>Success!</h3><em>";
                            echo $this->session->flashdata('success');
                            echo "</em></div>";
                        }
                        else if ($this->session->flashdata('error')) 
                        {
                            echo "<div class='nk-info-box text-success'><div class='nk-info-box-icon'><i class='ion-checkmark-round'></i></div><h3>Success!</h3><em>";
                            echo $this->session->flashdata('error');
                            echo "</em></div>";
                        }
                        ?>
                        <?php
                        include 'assets/include.php';
                        foreach ($change as $row) :
                            if (isset($_POST['submit-changepassword'])) 
                            {
                                error_reporting(0);
                                function encripitar($pass)
                                {
                                    $salt = '/x!a@r-$r%an¨.&e&+f*f(f(a)';
                                    $output = hash_hmac('md5', $pass, $salt);
                                    return $output;
                                }
                                $old_password_encrypted = $_SESSION['password']; // Password Lama Terenkripsi Dari Session
                                $old_password_decrypted = $_POST['old_password']; // Password Lama Tidak Terenkripsi
                                $old_password = encripitar($old_password_decrypted); // Password Lama Terenkripsi Dari Form
                                $new_password = $_POST['new_password']; // Password Baru Dari Form
                                $confirm_password = $_POST['confirm_password']; // Konfirmasi Password Baru Dari Form
                                $hint_question = $_POST['hint_question']; // Pertanyaan Hint Dari Form
                                $hint_answer = $_POST['hint_answer']; // Jawaban Hint Dari Form
                                // Jika Password Lama Kosong
                                if ($old_password == "") 
                                {
                                    $this->session->set_flashdata('error', 'Old Password Cannot Be Empty');
                                    redirect(base_url('player_panel/changepassword'),'refresh');
                                }
                                // Jika Password Lama Dari Form Tidak Sesuai Dengan Password Lama Dari Session
                                else if ($old_password != $old_password_encrypted) 
                                {
                                    $this->session->set_flashdata('error', 'Wrong Old Password');
                                    redirect(base_url('player_panel/changepassword'),'refresh');
                                }
                                // Jika Password Baru Kosong
                                else if ($new_password == "") 
                                {
                                        $this->session->set_flashdata('error', 'New Password Cannot Be Empty');
                                        redirect(base_url('player_panel/changepassword'),'refresh');
                                }
                                // Jika Password Baru Sama Dengan Password Lama
                                else if ($new_password == $old_password) 
                                {
                                        $this->session->set_flashdata('error', 'New Password Cannot Be Same As Old Password');
                                        redirect(base_url('player_panel/changepassword'),'refresh');
                                }
                                // Jika Konfirmasi Password Baru Kosong
                                else if ($confirm_password == "") 
                                {
                                        $this->session->set_flashdata('error', 'Confirmation Password Cannot Be Empty');
                                        redirect(base_url('player_panel/changepassword'),'refresh');
                                }
                                // Jika Konfirmasi Password Tidak Sama Dengan Password Baru
                                else if ($confirm_password != $new_password) 
                                {
                                        $this->session->set_flashdata('error', 'Confirmation Password Not Match');
                                        redirect(base_url('player_panel/changepassword'),'refresh');
                                }
                                // Jika Pertanyaan Hint Tidak Sama Dengan Pertanyaan Hint
                                else if ($hint_question != $row['hint_question']) 
                                {
                                        $this->session->set_flashdata('error', 'Hint Question Not Match');
                                        redirect(base_url('player_panel/changepassword'),'refresh');
                                }
                                else if ($hint_answer != $row['hint_answer']) 
                                {
                                        $this->session->set_flashdata('error', 'Hint Answer Not Match');
                                        redirect(base_url('player_panel/changepassword'),'refresh');
                                }
                                else
                                {
                                    $sth = $connec->prepare("SELECT * FROM accounts WHERE player_id = '".$_SESSION["uid"]."' AND password = '".$old_password."'");
                                    $sth->execute();
                                    $result = $sth->fetch(PDO::FETCH_ASSOC);
                                    if($result)
                                    {
                                            $sql = 'UPDATE accounts '
                                            . 'SET password = :psw '
                                            . 'WHERE player_id = :p_id';
                                            $stmt = $connec->prepare($sql);                                  
                                            $stmt->bindParam(':psw', encripitar($new_password), PDO::PARAM_STR); 
                                            $stmt->bindParam(':p_id', $_SESSION["uid"], PDO::PARAM_STR);         
                                            $stmt->execute();
                                            
                                            redirect(base_url('player_panel/changepassword/logout'),'refresh');
                                    }
                                    else
                                    {
                                            $this->session->set_flashdata('error', 'Change Password Failed<br>Please To Contact DEV & GM To Check Details');
                                            redirect(base_url('player_panel/changepassword'),'refresh');
                                    }
                                }
                            }
                            ?>
                                <form action="" method="POST" class="form-horizontal">
                                <div class="form-group">
                                    <label>Old Password</label>
                                    <input type="password" class="form-control" name="old_password" placeholder="Enter Your Password" minlength="4" maxlength="16" required autocomplete="off" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" class="form-control" name="new_password" placeholder="Enter Your New Password" minlength="4" maxlength="16" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Confirmation Password</label>
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Enter Your Confirmation Password" minlength="4" maxlength="16" required>
                                </div>
                                <div class="form-group">
                                    <label>Hint Question</label>
                                    <select class="form-control" name="hint_question">
                                        <option value="" disabled selected>Select Your Hint Question</option>
                                        <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                                        <option value="What is the name of your favorite childhood friend?">What is the name of your favorite childhood friend?</option>
                                        <option value="In what city or town did your mother and father meet?">In what city or town did your mother and father meet?</option>
                                        <option value="What is your favorite team?">What is your favorite team?</option>
                                        <option value="What is your favorite movie?">What is your favorite movie?</option>
                                        <option value="What was your favorite sport in high school?">What was your favorite sport in high school?</option>
                                        <option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
                                        <option value="What is the first name of the boy or girl that you first kissed?">What is the first name of the boy or girl that you first kissed?</option>
                                        <option value="What was the make and model of your first car?">What was the make and model of your first car?</option>
                                        <option value="What was the name of the hospital where you were born?">What was the name of the hospital where you were born?</option>
                                        <option value="Who is your childhood sports hero?">Who is your childhood sports hero?</option>
                                        <option value="What school did you attend for sixth grade?">What school did you attend for sixth grade?</option>
                                        <option value="What was the last name of your third grade teacher?">What was the last name of your third grade teacher?</option>
                                        <option value="In what town was your first job?">In what town was your first job?</option>
                                        <option value="What was the name of the company where you had your first job?">What was the name of the company where you had your first job?</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Hint Answer</label>
                                    <input type="text" class="form-control" name="hint_answer" placeholder="Enter Your Hint Answer" required>
                                </div>
                                <div class="nk-gap"></div>
                                <div class="form-group text-center">
                                    <button type="submit" name="submit-changepassword" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary"><span class="fa fa-paper-plane"></span> &nbsp;Submit New Password</button>
                                    <button type="reset" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-danger"><span class="fa fa-refresh"></span> &nbsp;Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="nk-gap-3"></div>
        <div class="nk-gap-2"></div>
    </div>
</div>