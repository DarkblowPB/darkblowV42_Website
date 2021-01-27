<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <h5 class="card-header">Data Report</h5>
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
                <table id="table_id" class="table table-responsive-lg table-borderless table-hover text-center">
                    <thead>
                        <th width="5%">ID</th>
                        <th>Report Title</th>
                        <th>Report Description</th>
                        <th width="15%">Report Proof (Bukti)</th>
                        <th>Player</th>
                        <th width="15%">Date</th>
                        <th width="10%">Status</th>
                        <th width="15%">Action</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($report as $row) :
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['report_title'] ?></td>
                            <td><?php echo $row['report_description'] ?></td>
                            <td><?php echo $row['report_proof'] ?></td>
                            <td><?php echo $row['player_name'] ?></td>
                            <td><?php echo $row['date'] ?></td>
                            <td>
                                <?php
                                if ($row['status'] == 0) 
                                {
                                    echo '<span class="text-danger">Belum Dikonfirmasi</span>';
                                }
                                if ($row['status'] != 0) 
                                {
                                    echo '<span class="text-success">Terkonfirmasi</span>';
                                }
                                ?>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button id="action_btn" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action Menu
                                    </button>
                                    <div class="dropdown-menu text-white" aria-labelledby="action_btn">
                                        <a class="dropdown-item" href="<?php echo base_url('moderatorpanel/report/view') ?>?id=<?php echo $row['id'] ?>"><i class="fas fa-info mr-2"></i>View Report</a>
                                        <?php
                                        if ($row['status'] == 0)
                                        {
                                        ?>
                                            <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-toggle-off mr-2"></i>Confirm Report</a>
                                        <?php
                                        }
                                        if ($row['status'] != 0)
                                        {}
                                        ?>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-trash mr-2"></i>Delete Report</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>