<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-center">
                    <a href="javascript:void(0)" class="btn btn-outline-primary text-white"><i class="fas fa-plus-circle mr-2"></i>Add New Events</a>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?php if ($this->session->flashdata('true')) : ?>
                        <div class="alert alert-success"><?php echo $this->session->flashdata('true') ?></div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('false')) : ?>
                        <div class="alert alert-danger"><?php echo $this->session->flashdata('false') ?></div>
                    <?php endif; ?>
                    <table id="news_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th>No.</th>
                            <th>Title</th>
                            <th>Date Created</th>
                            <th>Menu</th>
                        </thead>
                        <tbody>
                            <?php $num = 1; foreach ($news as $row) : ?>
                                <tr>
                                    <td><?php echo $num ?></td>
                                    <td>
                                        (Click details for check news title)
                                    </td>
                                    <td><?php echo $row['quickslide_date'] ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary text-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Menu
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a href="<?php echo base_url('adm/newsmanagement/details?post_id='.$row['id']) ?>" class="dropdown-item">Details</a>
                                                <a href="javascript:void(0)" class="dropdown-item">Edit</a>
                                                <input type="button" id="delete_<?php echo $num ?>" class="dropdown-item" value="Delete">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php $num++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>