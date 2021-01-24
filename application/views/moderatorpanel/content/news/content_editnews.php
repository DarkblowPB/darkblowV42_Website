<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Edit News</h5>
            <div class="card-body">
                <?php
                foreach ($news as $row) {
                ?>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label>News Title</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="news_title" class="form-control" value="<?php echo $row['quickslide_title'] ?>" minlength="10" maxlength="255" autocomplete="off" autofocus required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label>News Description</label>
                    </div>
                    <div class="col-sm-9">
                        <textarea name="news_description" class="form-control"><?php echo $row['quickslide_description'] ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label>News Image</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" accept="image/jpg, image/png, image/jpeg" required><br>
                        <img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_slider/<?php echo $row['quickslide_img'] ?>.jpg" class="img img-responsive img-thumbnail" style="max-width: 250px;" alt="<?php echo $row['quickslide_title'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12 text-center">
                        <button type="reset" class="btn btn-outline-danger"><i class="fas fa-eraser mr-2"></i>Reset</button>
                        <button type="submit" class="btn btn-outline-primary"><i class="fas fa-paper-plane mr-2"></i>Submit</button>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>