<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?php echo form_open(base_url('adm/newsmanagement/do_add'), 'id="add_form" autocomplete="off"') ?>
                        <div class="form-group row">
                            <label class="col-form-label col-3">News Title</label>
                            <input type="text" name="quickslide_title" class="form-control col-9" placeholder="Enter News Title" maxlength="255" autofocus required>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">News Description</label>
                            <textarea name="quickslide_description" class="form-control col-9" rows="10" placeholder="Enter News Description" required></textarea>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Image</label>
                            <input type="file" name="image" class="form-control-file col-9">
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-outline-primary text-white"><i class="fas fa-paper-plane mr-2"></i>Submit News</button>
                        </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>