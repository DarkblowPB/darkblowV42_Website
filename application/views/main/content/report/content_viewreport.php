<div class="nk-main">
    <div class="container">
        <div class="row vertical-gap">
            <div class="col-lg-12">
                <div class="nk-gap-2"></div>
                <h3 class="nk-decorated-h-2"><span class="text-main-1">Report <span class="text-white">List</span></span></h3>
                <div class="nk-gap-2"></div>
                <table id="table_id" class="table table-striped table-hover text-center">
                    <thead>
                        <th width="5%">Report ID</th>
                        <th>Report Title</th>
                        <th>Report Proof</th>
                        <th width="15%">Date</th>
                        <th width="15%">Status</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($report as $row) :
                        ?>
                        <tr>
                            <td><?php echo $row['id']  ?></td>
                            <td><?php echo $row['report_title'] ?></td>
                            <td><img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_report/<?php echo $row['report_proof'] ?>" alt="<?php echo $row['report_title'] ?>" class="img img-responsive img-thumbnail" style="max-width:100px;"></td>
                            <td><?php echo $row['date'] ?></td>
                            <td>
                                <?php
                                if ($row['status'] == 0) 
                                {
                                    echo '<span class="text-main-1">Not Confirmed</span>';
                                }
                                if ($row['status'] != 0) 
                                {
                                    echo '<span class="text-main-5">Confirmed</span>';
                                }
                                ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>