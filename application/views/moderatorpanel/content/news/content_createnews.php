<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <h5 class="card-header">Create News</h5>
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
                <?php echo form_open_multipart(base_url('moderatorpanel/news/news_create'),' class="form-horizontal"'); ?>
                    <div class="form-group row">
                        <div class="col-sm-3 text-right">
                            <label>News Title</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="news_title" class="form-control" value="<?php echo set_value('news_title') ?>" minlength="10" max="255" autocomplete="off" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3 text-right">
                            <label>News Description</label>
                        </div>
                        <div class="col-sm-9">
                            <textarea id="news_description" name="news_description" class="form-control" required><?php echo set_value('news_description') ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3 text-right">
                            <label>News Image (MAX. 5MB)</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="file" name="news_img" class="form-control-file" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12 text-center">
                            <button type="reset" class="btn btn-outline-danger"><i class="fas fa-eraser mr-2"></i>Reset</button>
                            <button type="submit" class="btn btn-outline-primary"><i class="fas fa-paper-plane mr-2"></i>Submit</button>
                        </div>
                    </div>
                <?php echo form_close(); ?>
                <script src="<?php echo base_url() ?>assets/texteditor/ckeditor/ckeditor.js"></script>
				<script src="<?php echo base_url() ?>assets/texteditor/ckeditor/styles.js"></script>	
				<script type="text/javascript">
					CKEDITOR.replace('news_description');
				</script>
            </div>
        </div>
    </div>
</div>