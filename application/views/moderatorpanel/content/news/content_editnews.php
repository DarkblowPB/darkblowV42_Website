<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Edit News</h5>
            <div class="card-body">
            <?php
                echo validation_errors("<div class='alert alert-danger' role='alert'><h4 class='alert-heading'>Error</h4><p>","</p></div>");
                ?>
                <?php
                if (isset($error)) 
                {
                    echo "<div class='alert alert-danger' role='alert'><h4 class='alert-heading'>Error</h4><p>";
                    echo $error;
                    echo '</p></div>';
                }
                if ($this->session->flashdata('Success'))
                {
                    echo '<div class="alert alert-success" role="alert">';
                    echo '<h4 class="alert-heading">Success</h4><p>';
                    echo $this->session->flashdata('Success');
                    echo '</p>';
                    echo '</div>';
                }
                if ($this->session->flashdata('Failed')) 
                {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo '<h4 class="alert-heading">Failed</h4><p>';
                    echo $this->session->flashdata('Failed');
                    echo '</p>';
                    echo '</div>';
                }
                ?>
                <?php echo form_open_multipart(base_url('moderatorpanel/news/news_edit/'.$news->id),' class="form-horizontal"'); ?>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label>News Title</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="news_title" class="form-control" value="<?php echo $news->quickslide_title ?>" minlength="10" maxlength="255" autocomplete="off" autofocus required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label>News Description</label>
                    </div>
                    <div class="col-sm-9">
                        <textarea name="news_description" class="form-control"><?php echo $news->quickslide_description ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label>News Image</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file"><br>
                        <img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_slider/<?php echo $news->quickslide_img ?>" class="img img-responsive img-thumbnail" style="max-width: 250px;" alt="<?php echo $news->quickslide_title ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12 text-center">
                        <button type="reset" class="btn btn-outline-danger"><i class="fas fa-eraser mr-2"></i>Reset</button>
                        <button type="submit" class="btn btn-outline-primary"><i class="fas fa-paper-plane mr-2"></i>Submit</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>