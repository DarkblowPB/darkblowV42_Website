<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <h5 class="card-header"><?php echo $title ?></h5>
            <div class="card-body border-top">
                <table id="table_id" class="table table-borderless table-responsive-lg table-hover text-center">
                    <thead>
                        <th>No.</th>
                        <th>Log ID</th>
                        <th>IP Address</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Date</th>
                    </thead>
                    <tbody>
                        <?php
                        $num = 1;
                        foreach ($log_admin as $row)
                        {
                        ?>
                            <tr>
                                <td><?php echo $num ?></td>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['ip_address'] ?></td>
                                <td><?php echo $row['description'] ?></td>
                                <td><?php echo $row['category'] ?></td>
                                <td><?php echo $row['date'] ?></td>
                            </tr>
                        <?php
                        $num++;
                        }
                        ?>
                    </tbody>
                </table>    
            </div>
        </div>
    </div>
</div>