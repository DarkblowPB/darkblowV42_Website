<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
            <h5 class="card-header"><?php echo $header ?></h5>
            <div class="card-body border-top">
                <?php
                foreach ($player as $row)
                {
                ?>
                <?php
                if (isset($_POST['submit_banned'])) 
                {
                    include 'assets/include.php';

                    $player_id = $_POST['player_id'];
                    $player_name = $_POST['player_name'];
                    $banned_type = $_POST['banned_type'];

                    if ($player_id == 1) 
                    {
                        $this->session->set_flashdata('Success', 'Dih Ngapain NgeBan Aku? Aku Itu Kebal Banned Tau');
                        echo '<script>self.history.back();</script>';
                    }
                    if ($row['access_level'] >= 3) 
                    {
                        $this->session->set_flashdata('Failed', 'Banned GM? Buat Apa?');
                        echo '<script>self.history.back();</script>';
                    }
                    if ($player_id != $row['player_id']) 
                    {
                        $this->session->set_flashdata('Failed', 'Player ID Doesnt Match!');
                        echo '<script>self.history.back();</script>';
                    }
                    if ($player_name != $row['player_name']) 
                    {
                        $this->session->set_flashdata('Failed', 'Player Name Doesnt Match!');
                        echo '<script>self.history.back();</script>';
                    }
                    if ($banned_type != "banned_perm") 
                    {
                        $this->session->set_flashdata('Failed', 'Banned Type Doesnt Match!');
                        echo '<script>self.history.back();</script>';
                    }
                    else
                    {
                        $banned_value = -1;
                        $sql = $connec->prepare("SELECT * FROM accounts WHERE player_id = '".$player_id."'");
                        $sql->execute();
                        $result = $sql->fetch(PDO::FETCH_ASSOC);
                        if ($result) 
                        {
                            if ($result['access_level'] == 0) 
                            {
                                $sql_0 = 'UPDATE accounts '
                                . 'SET access_level = :aa '
                                . 'WHERE player_id = :bb';
                                $stmt = $connec->prepare($sql_0);
                                $stmt->bindParam(':aa', $banned_value, PDO::PARAM_STR);
                                $stmt->bindParam(':bb', $player_id, PDO::PARAM_STR);
                                $stmt->execute();
                                if ($sql_0) 
                                {
                                    $this->session->set_flashdata('Success', 'Banned Player With ID '.$player_id.' Successfully');
                                    redirect(base_url('moderatorpanel/player'), 'refresh');
                                }
                                else 
                                {
                                    $this->session->set_flashdata('Failed', 'Banned Player With ID '.$player_id.' Failed');
                                    echo '<script>self.history.back();</script>';
                                }
                            }
                            if ($result['access_level'] < 0) 
                            {
                                $this->session->set_flashdata('Failed', 'Player With ID '.$player_id.' Already Banned');
                                echo '<script>self.history.back();</script>';
                            }
                        }
                        else 
                        {
                            $this->session->set_flashdata('Failed', 'Player Doesnt Exist');
                            echo '<script>self.history.back();</script>';
                        }
                    }
                }
                ?>
                    <form action="" method="POST" class="form-horizontal">
                        <div class="container-fluid">
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
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label-lg">Player ID</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="player_id" class="form-control" value="<?php echo $row['player_id'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label-lg">Player Name</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="player_name" class="form-control" value="<?php echo $row['player_name'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label-lg">Banned Type</label>
                                </div>
                                <div class="col-lg-9">
                                    <select name="banned_type" class="form-control" required>
                                        <option value="" selected disabled>Select Banned Type</option>
                                        <option value="banned_perm">Banned Permanent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 text-center">
                                    <button type="reset" class="btn btn-outline-danger"><i class="fas fa-eraser"></i> Reset</button>
                                    <button type="submit" name="submit_banned" class="btn btn-outline-primary"><i class="fas fa-paper-plane"></i> Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <h5 class="card-header text-warning"><i class="fas fa-exclamation-triangle"></i> Warning</h5>
            <div class="card-body border-top">
                <p class="lead">
                    ** Changelog Beta V1.0<br>
                </p>
                <p class="mb-2">
                    Specially Note For [GM] Griezelig
                </p>
                <p class="ml-4">
                    Please Be Calm When You Want To Banned A Player, You Must Do Confirm To DEV. You Will Disallowed To Banned Other Staff And Game Master<br>
                    You Only Can Banned Player With Access Level 0, And Your Action Will Record As Log And Showed To Another Game Master If You Banned Player Without DEV Confirmation
                </p>
            </div>
        </div>
    </div>
</div>