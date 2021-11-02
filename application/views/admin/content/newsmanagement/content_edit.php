<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?php echo form_open_multipart(base_url('adm/newsmanagement/edit?news_id='.$this->input->get('news_id', true)), 'autocomplete="off"') ?>
                        <div class="form-group row">
                            <label class="col-form-label col-3">News Title</label>
                            <input type="text" name="quickslide_title" class="form-control col-9" value="<?php echo $news->quickslide_title ?>" autofocus required>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">News Description</label>
                            <textarea name="quickslide_description" rows="10" class="form-control col-9" required><?php echo $news->quickslide_description ?></textarea>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Old Image</label>
                            <img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_news/<?php echo $news->quickslide_img ?>" style="max-width: 100px" alt="Old Image">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">New Image</label>
                            <input type="file" name="image" class="form-control-file col-9">
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-outline-primary text-white"><i class="fas fa-paper-plane mr-2"></i>Edit</button>
                        </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>