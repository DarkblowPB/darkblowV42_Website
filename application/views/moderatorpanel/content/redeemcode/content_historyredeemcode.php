<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <h5 class="card-header">History Redeem Code</h5>
            <div class="card-body">
                <table id="table_id" class="table table-responsive-lg table-borderless table-hover text-center">
                    <thead>
                        <th width="5%">ID</th>
                        <th width="15%">IP Address</th>
                        <th>Description</th>
                        <th width="15%">Category</th>
                        <th width="15%">Date</th>
                    </thead>
                    <tbody>
                        <?php foreach ($history as $row) : ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['ip_address'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['category'] ?></td>
                            <td><?php echo $row['date'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>