<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <h5 class="card-header">Manual Recharge</h5>
            <div class="card-body">
                <?php
                if ($this->session->flashdata('Success'))
                {
                    echo '<div class="alert alert-success" role="alert">';
                    echo '<h4 class="alert-heading">Success</h4><p>';
                    echo $this->session->flashdata('Success');
                    echo '</p>';
                    echo '</div>';
                }
                if ($this->session->flashdata('Failed')) 
                {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo '<h4 class="alert-heading">Failed</h4><p>';
                    echo $this->session->flashdata('Failed');
                    echo '</p>';
                    echo '</div>';
                }
                ?>
                <?php
                if (isset($_POST['submit_recharge'])) 
                {
                    // Package 1 Template
                    $package1_dcash = 5000;
                    $package1_webcoin = 500;

                    // Package 2 Template
                    $package2_dcash = 10000;
                    $package2_webcoin = 1500;

                    // Package 3 Template
                    $package3_dcash = 25000;
                    $package3_webcoin = 3500;

                    // Package 4 Template
                    $package4_dcash = 50000;
                    $package4_dcash = 7500;

                    $player_id = $_POST['player_id'];
                    $package = $_POST['recharge_package'];
                    
                    include 'assets/include.php';
                    
                    if ($package == "package_1") 
                    {
                        $sql = $connec->prepare("SELECT * FROM accounts WHERE player_id ='".$player_id."'");
                        $sql->execute();
                        $result = $sql->fetch(PDO::FETCH_ASSOC);
                        if ($result)
                        {
                            $total_dcash_package1 = $result['money'] + $package1_dcash;
                            $total_webcoin_package1 = $result['kuyraicoin'] + $package1_webcoin;
                            
                            $sql_0 = 'UPDATE accounts '
                            . 'SET money = :aa '
                            . 'WHERE player_id = :bb';
                            $stmt_0 = $connec->prepare($sql_0);
                            $stmt_0->bindParam(':aa', $total_dcash_package1, PDO::PARAM_STR);
                            $stmt_0->bindParam(':bb', $player_id, PDO::PARAM_STR);
                            $stmt_0->execute();
                            
                            $sql_1 = 'UPDATE accounts '
                            . 'SET kuyraicoin = :aa '
                            . 'WHERE player_id = :bb';
                            $stmt_1 = $connec->prepare($sql_1);
                            $stmt_1->bindParam(':aa', $total_webcoin_package1, PDO::PARAM_STR);
                            $stmt_1->bindParam(':bb', $player_id, PDO::PARAM_STR);
                            $stmt_1->execute();

                            if ($sql_0 && $sql_1) 
                            {
                                $this->logger->logger_RechargeManualSuccess($result['player_name'], "Package 1");
                                $this->session->set_flashdata('Success', 'Recharge Successfully For Player : '.$result['player_name'].'');
                                redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');
                            }
                            else 
                            {
                                $this->logger->logger_RechargeManualFailed($result['player_name'], "Package 1");
                                $this->session->set_flashdata('Failed', 'Recharge Failed For Player : '.$result['player_name'].'');
                                redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');   
                            }
                        }
                    }
                    if ($package == "package_2") 
                    {
                        $sql = $connec->prepare("SELECT * FROM accounts WHERE player_id ='".$player_id."'");
                        $sql->execute();
                        $result = $sql->fetch(PDO::FETCH_ASSOC);
                        if ($result)
                        {
                            $total_dcash_package2 = $result['money'] + $package2_dcash;
                            $total_webcoin_package2 = $result['kuyraicoin'] + $package2_webcoin;
                            
                            $sql_0 = 'UPDATE accounts '
                            . 'SET money = :aa '
                            . 'WHERE player_id = :bb';
                            $stmt_0 = $connec->prepare($sql_0);
                            $stmt_0->bindParam(':aa', $total_dcash_package2, PDO::PARAM_STR);
                            $stmt_0->bindParam(':bb', $player_id, PDO::PARAM_STR);
                            $stmt_0->execute();
                            
                            $sql_1 = 'UPDATE accounts '
                            . 'SET kuyraicoin = :aa '
                            . 'WHERE player_id = :bb';
                            $stmt_1 = $connec->prepare($sql_1);
                            $stmt_1->bindParam(':aa', $total_webcoin_package2, PDO::PARAM_STR);
                            $stmt_1->bindParam(':bb', $player_id, PDO::PARAM_STR);
                            $stmt_1->execute();

                            if ($sql_0 && $sql_1) 
                            {
                                $this->logger->logger_RechargeManualSuccess($result['player_name'], "Package 2");
                                $this->session->set_flashdata('Success', 'Recharge Successfully For Player : '.$result['player_name'].'');
                                redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');
                            }
                            else 
                            {
                                $this->logger->logger_RechargeManualFailed($result['player_name'], "Package 2");
                                $this->session->set_flashdata('Failed', 'Recharge Failed For Player : '.$result['player_name'].'');
                                redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');   
                            }
                        }
                    }
                    if ($package == "package_3") 
                    {
                        $sql = $connec->prepare("SELECT * FROM accounts WHERE player_id ='".$player_id."'");
                        $sql->execute();
                        $result = $sql->fetch(PDO::FETCH_ASSOC);
                        if ($result)
                        {
                            $total_dcash_package3 = $result['money'] + $package3_dcash;
                            $total_webcoin_package3 = $result['kuyraicoin'] + $package3_webcoin;
                            
                            $sql_0 = 'UPDATE accounts '
                            . 'SET money = :aa '
                            . 'WHERE player_id = :bb';
                            $stmt_0 = $connec->prepare($sql_0);
                            $stmt_0->bindParam(':aa', $total_dcash_package3, PDO::PARAM_STR);
                            $stmt_0->bindParam(':bb', $player_id, PDO::PARAM_STR);
                            $stmt_0->execute();
                            
                            $sql_1 = 'UPDATE accounts '
                            . 'SET kuyraicoin = :aa '
                            . 'WHERE player_id = :bb';
                            $stmt_1 = $connec->prepare($sql_1);
                            $stmt_1->bindParam(':aa', $total_webcoin_package3, PDO::PARAM_STR);
                            $stmt_1->bindParam(':bb', $player_id, PDO::PARAM_STR);
                            $stmt_1->execute();

                            if ($sql_0 && $sql_1) 
                            {
                                $this->logger->logger_RechargeManualSuccess($result['player_name'], "Package 3");
                                $this->session->set_flashdata('Success', 'Recharge Successfully For Player : '.$result['player_name'].'');
                                redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');
                            }
                            else 
                            {
                                $this->logger->logger_RechargeManualFailed($result['player_name'], "Package 3");
                                $this->session->set_flashdata('Failed', 'Recharge Failed For Player : '.$result['player_name'].'');
                                redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');   
                            }
                        }
                    }
                    if ($package == "package_4") 
                    {
                        $sql = $connec->prepare("SELECT * FROM accounts WHERE player_id ='".$player_id."'");
                        $sql->execute();
                        $result = $sql->fetch(PDO::FETCH_ASSOC);
                        if ($result)
                        {
                            $total_dcash_package4 = $result['money'] + $package4_dcash;
                            $total_webcoin_package4 = $result['kuyraicoin'] + $package4_webcoin;
                            
                            $sql_0 = 'UPDATE accounts '
                            . 'SET money = :aa '
                            . 'WHERE player_id = :bb';
                            $stmt_0 = $connec->prepare($sql_0);
                            $stmt_0->bindParam(':aa', $total_dcash_package4, PDO::PARAM_STR);
                            $stmt_0->bindParam(':bb', $player_id, PDO::PARAM_STR);
                            $stmt_0->execute();
                            
                            $sql_1 = 'UPDATE accounts '
                            . 'SET kuyraicoin = :aa '
                            . 'WHERE player_id = :bb';
                            $stmt_1 = $connec->prepare($sql_1);
                            $stmt_1->bindParam(':aa', $total_webcoin_package4, PDO::PARAM_STR);
                            $stmt_1->bindParam(':bb', $player_id, PDO::PARAM_STR);
                            $stmt_1->execute();

                            if ($sql_0 && $sql_1) 
                            {
                                $this->logger->logger_RechargeManualSuccess($result['player_name'], "Package 4");
                                $this->session->set_flashdata('Success', 'Recharge Successfully For Player : '.$result['player_name'].'');
                                redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');
                            }
                            else
                            {
                                $this->logger->logger_RechargeManualSuccess($result['player_name'], "Package 4");
                                $this->session->set_flashdata('Failed', 'Recharge Failed For Player : '.$result['player_name'].'');
                                redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');   
                            }
                        }
                    }
                }
                ?>
                <form action="" method="POST" class="form-horizontal">
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label">Nickname</label>
                        </div>
                        <div class="col-sm-9">
                            <select name="player_id" class="form-control" required>
                                <option value="" selected disabled>Select Nickname</option>
                                <?php
                                foreach ($recharge as $row) :
                                ?>
                                    <option value="<?php echo $row['player_id'] ?>"><?php echo $row['player_name'] ?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label">Recharge Package</label>
                        </div>
                        <div class="col-sm-9">
                            <select name="recharge_package" class="form-control" required>
                                <option value="" selected disabled>Select Recharge Package</option>
                                <option value="package_1">IDR 10.000</option>
                                <option value="package_2">IDR 25.000</option>
                                <option value="package_3">IDR 50.000</option>
                                <option value="package_4">IDR 100.000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12 text-center">
                            <button type="reset" class="btn btn-outline-danger"><i class="fas fa-eraser mr-2"></i>Reset</button>
                            <button type="submit" name="submit_recharge" class="btn btn-outline-primary"><i class="fas fa-paper-plane mr-2"></i>Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>