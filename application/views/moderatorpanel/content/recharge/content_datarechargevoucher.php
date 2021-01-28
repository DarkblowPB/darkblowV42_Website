<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Recharge Voucher Data</h5>
            <div class="card-body">
                <table id="table_id" class="table table-responsive-lg table-borderless table-hover text-center">
                    <thead>
                        <th width="5%">ID</th>
                        <th>Cash Alert</th>
                        <th width="15%">Cash Value</th>
                        <th width="25%">Voucher Code</th>
                        <th width="5%">Voucher Status</th>
                        <th width="15%">Date</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($voucher as $row) :
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['cash_alert'] ?></td>
                            <td><?php echo number_format($row['cash_value'], '0',',','.'); ?> D-Cash</td>
                            <td><?php echo $row['voucher_code'] ?></td>
                            <td>
                                <?php
                                if ($row['voucher_status'] == 1) 
                                {
                                    echo 'Active';
                                }
                                if ($row['voucher_status'] != 1) 
                                {
                                    echo 'Expired';
                                }
                                ?>
                            </td>
                            <td><?php echo $row['date'] ?></td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>