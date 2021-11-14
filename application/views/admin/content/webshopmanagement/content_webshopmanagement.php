<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="webshop_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th width="5%">No.</th>
                            <th width="15%">Thumbnails</th>
                            <th>Item Name</th>
                            <th width="15%">Category</th>
                            <th width="5%">Rating</th>
                            <th width="10%">Total Buy</th>
                            <th width="10%">Status</th>
                            <th width="15%">Menu</th>
                        </thead>
                        <tbody>
                            <?php $num = 1; foreach ($webshop as $row) : ?>
                                <tr>
                                    <td><?php echo $num ?></td>
                                    <td><img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_webshop/<?php echo $row['webshop_itemimg'] ?>" class="img img-fluid" alt="<?php echo $row['webshop_itemname'] ?>"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>