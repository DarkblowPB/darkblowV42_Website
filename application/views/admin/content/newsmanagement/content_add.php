<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open_multipart(base_url('adm/newsmanagement/add'), 'id="add_form" autocomplete="off"') ?>
                    <?php if ($this->session->flashdata('true')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= $this->session->flashdata('true') ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('false')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $this->session->flashdata('false') ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('error')) : ?>
                        <div class="alert alert-warning" role="alert">
                            <?= $this->session->flashdata('error') ?>
                        </div>
                    <?php endif; ?>
                    <div class="form-group row">
                        <label class="col-form-label col-3">News Title</label>
                        <input type="text" name="quickslide_title" class="form-control col-9" placeholder="Enter News Title" maxlength="255" autofocus required>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">News Description</label>
                        <textarea name="quickslide_description" class="form-control col-9 summernote_editor" rows="10" placeholder="Enter News Description" required></textarea>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Image</label>
                        <input type="file" name="test" class="form-control-file col-9">
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-outline-primary text-white"><i class="fas fa-paper-plane mr-2"></i>Submit News</button>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>