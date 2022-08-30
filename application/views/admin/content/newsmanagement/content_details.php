<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th colspan="2">News Details</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="25%">Title</td>
                                <td>
                                    <?= $news->quickslide_title ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>
                                    <?= $news->quickslide_description ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><img src="<?= base_url() ?>assets/goodgames/assets/images/img_slider/<?= $news->quickslide_img ?>" class="img img-fluid" style="max-width: 500px" alt=""></td>
                            </tr>
                            <tr>
                                <td>Date Created</td>
                                <td>
                                    <?= $this->lib->ParseUnixTimeStamp($news->quickslide_date) ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mt-5 text-center">
                        <button type="button" class="btn btn-outline-primary text-white" onclick="self.history.back();"><i class="fas fa-arrow-left mr-2"></i>Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>