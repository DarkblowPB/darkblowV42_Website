<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead>
                            <th colspan="2" class="text-bold text-uppercase"><?php echo $files->file_name ?></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>File URL</td>
                                <td><a href="https://<?php echo $files->file_url ?>" target="_blank" class="btn btn-outline-primary text-white text-bold">Check Visibility</a></td>
                            </tr>
                            <tr>
                                <td>File Type</td>
                                <td class="text-uppercase"><?php echo $files->type ?></td>
                            </tr>
                            <tr>
                                <td>File Size</td>
                                <td><?php echo $files->size ?></td>
                            </tr>
                            <tr>
                                <td>Version</td>
                                <td>
                                    <?php if ($files->version == "" || $files->version == null) : ?>
                                        0
                                    <?php endif; ?>
                                    <?php if ($files->version != "" || $files->version != null) : ?>
                                        <?php echo $files->version ?>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Date Upload</td>
                                <td><?php echo $files->date ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="form-group text-center mt-3">
                        <button type="button" class="btn btn-outline-danger text-white text-bold" onclick="self.history.back()"><i class="fas fa-arrow-left mr-2"></i>Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>