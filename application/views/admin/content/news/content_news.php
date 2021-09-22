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
                                    <td></td>
                                </tr>
                            <?php $num++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>