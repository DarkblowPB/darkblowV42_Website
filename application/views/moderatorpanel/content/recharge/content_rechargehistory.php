<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Recharge History</h5>
            <div class="card-body">
                <table id="table_id" class="table table-responsive-lg table-borderless table-hover text-center">
                    <thead>
                        <th>ID</th>
                        <th>IP Address</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Date</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($history as $row) :
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['ip_address'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['category'] ?></td>
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