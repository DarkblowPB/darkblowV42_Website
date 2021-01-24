<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">News Management</h5>
            <div class="card-body">
                <table id="table_id" class="table table-borderless table-hover table-responsive-lg text-center">
                    <thead>
                        <th>No.</th>
                        <th>News Title</th>
                        <th>News Description</th>
                        <th width="10%">News Image</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                        $num = 1;
                        foreach ($news as $row) :
                        ?>
                        <tr>
                            <td><?php echo $num ?></td>
                            <td><?php echo $row['quickslide_title'] ?></td>
                            <td><?php echo character_limiter($row['quickslide_description'], 255); ?></td>
                            <td>
                                <img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_slider/<?php echo $row['quickslide_img'] ?>.jpg" class="img img-responsive img-thumbnail" alt="<?php echo $row['quickslide_title']?>">
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button id="action_btn" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action Menu
                                    </button>
                                    <div class="dropdown-menu text-white" aria-labelledby="action_btn">
                                        <a class="dropdown-item" href="<?php echo base_url('moderatorpanel/news/news_edit') ?>?id=<?php echo $row['id'] ?>"><i class="fas fa-edit mr-2"></i>Edit News</a>
                                        <a class="dropdown-item" href="<?php echo base_url('moderatorpanel/news/news_delete') ?>?id=<?php echo $row['id'] ?>"><i class="fas fa-trash mr-2"></i>Delete News</a>
                                    </div>
                                </div>
                            </td>
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