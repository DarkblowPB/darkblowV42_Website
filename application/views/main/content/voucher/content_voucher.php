<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-12">
                <h3 class="nk-decorated-h-2"><span class="text-main-1">Voucher <span class="text-white">Area</span></span></h3>
                <div class="nk-gap-3"></div>
                <div class="nk-gap-3"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <?php
                            if ($this->session->flashdata('success'))
                            {
                                echo "<div class='nk-info-box text-success'><div class='nk-info-box-icon'><i class='ion-checkmark-round'></i></div><h3>Success!</h3><em>";
                                echo $this->session->flashdata('success');
                                echo "</em></div>";
                                echo '<div class="nk-gap-2"></div>';
                            }
                            else if ($this->session->flashdata('error')) 
                            {
                                echo "<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>";
                                echo $this->session->flashdata('error');
                                echo "</em></div>";
                                echo '<div class="nk-gap-2"></div>';
                            }
                            ?>
                            <?php
                            if (isset($_POST['submit_voucher'])) 
                            {
                                include 'assets/include.php';
                                
                                $voucher_code = $_POST['voucher_code'];
                                
                                $sql = $connec->prepare("SELECT * FROM item_voucher WHERE voucher_code = '".$voucher_code."'");
                                $sql->execute();
                                $result = $sql->fetch(PDO::FETCH_ASSOC);
                                if ($result) 
                                {
                                    if ($result['voucher_status'] == 1) 
                                    {
                                        $sql_0 = $connec->prepare("SELECT * FROM item_voucher WHERE voucher_code = '".$voucher_code."'");
                                        $sql_0->execute();
                                        $result_0 = $sql_0->fetch(PDO::FETCH_ASSOC);
                                        if ($result_0)
                                        {
                                            $id = $_SESSION['uid'];
                                            $sql_1 = $connec->prepare("SELECT * FROM accounts WHERE player_id = '".$id."'");
                                            $sql_1->execute();
                                            $result_1 = $sql_1->fetch(PDO::FETCH_ASSOC);
                                            if ($result_1) 
                                            {
                                                $total_money = $result_1['money'] + $result_0['cash_value'];
                                                $sql_2 = 'UPDATE accounts '
                                                .'SET money = :aa '.
                                                'WHERE player_id = :bb';
                                                $stmt_0 = $connec->prepare($sql_2);
                                                $stmt_0->bindParam(':aa', $total_money, PDO::PARAM_STR);
                                                $stmt_0->bindParam(':bb', $_SESSION['uid'], PDO::PARAM_STR);
                                                $stmt_0->execute();

                                                $voucher_status = 0;
                                                $sql_3 = 'UPDATE item_voucher '
                                                .'SET voucher_status = :cc '.
                                                'WHERE voucher_code = :dd';
                                                $stmt_1 = $connec->prepare($sql_3);
                                                $stmt_1->bindParam(':cc', $voucher_status, PDO::PARAM_STR);
                                                $stmt_1->bindParam(':dd', $voucher_code, PDO::PARAM_STR);
                                                $stmt_1->execute();

                                                if ($sql_2 && $sql_3)
                                                {
                                                    $this->session->set_flashdata('success', 'Congratulations, You Received '.$result_0['cash_value'].' D-Cash');
                                                    redirect(base_url('player_panel/voucher'), 'refresh');
                                                }
                                                else 
                                                {
                                                    $this->session->set_flashdata('error', 'Voucher Redeem Failed, Please Try Again Later');
                                                    redirect(base_url('player_panel'), 'refresh');
                                                }
                                            }
                                        }
                                    }
                                    if ($result['voucher_status'] != 1) 
                                    {
                                        $this->session->set_flashdata('error', 'Voucher Already Used');
                                        redirect(base_url('player_panel/voucher'), 'refresh');
                                    }
                                }
                                else 
                                {
                                    $this->session->set_flashdata('error', 'This Voucher Doesnt Exist');
                                    redirect(base_url('player_panel/voucher'), 'refresh');
                                }
                            }
                            ?>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label>Voucher Code</label>
                                    <input type="text" name="voucher_code" class="form-control" minlength="24" maxlength="24" autocomplete="off" autofocus required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="reset" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1"><span class="fa fa-eraser"></span> &nbsp;Reset</button>
                                    <button type="submit" name="submit_voucher" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5"><span class="fa fa-paper-plane"></span> &nbsp;Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="nk-gap-3"></div>
                <div class="nk-gap-3"></div>
            </div>
        </div>
    </div>
</div>