<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <h5 class="card-header">Data Redeem Code Item</h5>
            <div class="card-body">
                <table id="table_id" class="table table-responsive-lg table-borderless table-hover text-center">
                    <thead>
                        <th>Item ID</th>
                        <th>Item Name</th>
                        <th>Item Duration</th>
                        <th>Item Alert</th>
                        <th>Code</th>
                        <th>Category</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($redeemcodeitem as $row) :
                        ?>
                        <tr>
                            <td><?php echo $row['item_id'] ?></td>
                            <td><?php echo $row['item_name'] ?></td>
                            <td><?php echo $row['item_count'] ?></td>
                            <td><?php echo $row['item_alert'] ?></td>
                            <td><?php echo $row['item_code'] ?></td>
                            <td>
                                <?php
                                if ($row['category'] == 1) 
                                {
                                    echo 'Main';
                                }
                                if ($row['category'] == 2) 
                                {
                                    echo 'Chara & Head';
                                }
                                if ($row['category'] == 3) 
                                {
                                    echo 'Box & Item';
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header">Data Redeem Code Cash</h5>
            <div class="card-body">
                <table id="table_id_1" class="table table-responsive-lg table-borderless table-hover text-center">
                    <thead>
                        <th>Item Alert</th>
                        <th>Code</th>
                        <th>Cash Amount</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($redeemcodecash as $row) :
                        ?>
                        <tr>
                            <td><?php echo $row['item_alert'] ?></td>
                            <td><?php echo $row['item_code'] ?></td>
                            <td><?php echo $row['cash'] ?></td>
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