<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <h5 class="card-header">View Report</h5>
            <div class="card-body">
                <?php
                foreach ($report as $row) :
                ?>
                <?php
                if (isset($_POST['submit_confirm'])) 
                {
                    include 'assets/include.php';
                    $id = $_POST['id'];
                    $status = 1;
                    $sql = $connec->prepare("SELECT * FROM web_report WHERE id = '".$id."'");
                    $sql->execute();
                    $result = $sql->fetch(PDO::FETCH_ASSOC);
                    if ($result) 
                    {
                        $sql_0 = 'UPDATE web_report '
                        . 'SET status = :aa '
                        . 'WHERE id = :bb';
                        $stmt = $connec->prepare($sql_0);
                        $stmt->bindParam(':aa', $status, PDO::PARAM_STR);
                        $stmt->bindParam(':bb', $id, PDO::PARAM_STR);
                        $stmt->execute();
                        if ($sql_0) 
                        {
                            $this->session->set_flashdata('Success', 'Report Berhasil Dikonfirmasi');
                            redirect(base_url('moderatorpanel/report'), 'refresh');
                        }
                        else 
                        {
                            $this->session->set_flashdata('Failed', 'Report Gagal Dikonfirmasi');
                            redirect(base_url('moderatorpanel/report'), 'refresh');
                        }
                    }
                    else 
                    {
                        $this->session->set_flashdata('Failed', 'Report Not Found');
                        redirect(base_url('moderatorpanel/report'), 'refresh');
                    }
                }
                if (isset($_POST['submit_delete'])) 
                {
                    include 'assets/include.php';
                    $id = $_POST['id'];
                    $sql = $connec->prepare("SELECT * FROM web_report WHERE id='".$id."'");
                    $sql->execute();
                    $result = $sql->fetch(PDO::FETCH_ASSOC);
                    if ($result) 
                    {
                        $deletequery = 'DELETE FROM web_report '
                        . 'WHERE id = :aa';
                        $stmt = $connec->prepare($deletequery);
                        $stmt->bindParam(':aa', $result['id'], PDO::PARAM_STR);
                        $stmt->execute();
                        if ($deletequery) 
                        {
                            $this->session->set_flashdata('Success', 'Report Deleted Successfully');
                            redirect(base_url('moderatorpanel/report'), 'refresh');
                        }
                        else 
                        {
                            $this->session->set_flashdata('Failed', 'Report Deleted Failed');
                            redirect(base_url('moderatorpanel/report'), 'refresh');
                        }
                    }
                    else 
                    {
                        $this->session->set_flashdata('Failed', 'Report Not Found');
                        redirect(base_url('moderatorpanel/report'), 'refresh');
                    }
                }
                ?>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label class="col-form-label">Report Title</label>
                    </div>
                    <div class="col-sm-9">
                        <p><?php echo $row['report_title'] ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label class="col-form-label">Report Description</label>
                    </div>
                    <div class="col-sm-9">
                        <p><?php echo $row['report_description'] ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label class="col-form-label">Report Proof (Bukti)</label>
                    </div>
                    <div class="col-sm-9">
                        <p><?php echo $row['report_proof'] ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label class="col-form-label">Player</label>
                    </div>
                    <div class="col-sm-9">
                        <p><?php echo $row['player_name'] ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label class="col-form-label">Date</label>
                    </div>
                    <div class="col-sm-9">
                        <p><?php echo $row['date'] ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label class="col-form-label">Status</label>
                    </div>
                    <div class="col-sm-9">
                        <?php
                        if ($row['status'] == 0) 
                        {
                        ?>
                        <p class="text-danger">
                        Belum Dikonfirmasi
                        </p>
                        <?php
                        }
                        if ($row['status'] != 0) 
                        {
                        ?>
                        <p class="text-success">
                        Terkonfirmasi
                        </p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12 text-center">
                        <form action="" method="POST" class="form-horizontal">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <button type="button" class="btn btn-outline-danger" onclick="self.history.back();"><i class="fas fa-arrow-left mr-2"></i>Back</button>
                        <?php
                        if ($row['status'] == 1) 
                        {
                        ?>
                        <button type="submit" name="submit_delete" class="btn btn-outline-danger"><i class="fas fa-trash mr-2"></i>Delete Report</button>
                        <?php
                        }
                        if ($row['status'] != 1) 
                        {
                        ?>
                        <button type="submit" name="submit_confirm" class="btn btn-outline-primary"><i class="fas fa-paper-plane mr-2"></i>Accept Report</button>
                        <?php
                        }
                        ?>
                        </form>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>