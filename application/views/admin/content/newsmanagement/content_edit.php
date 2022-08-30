<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open_multipart(base_url('adm/newsmanagement/edit/' . $news->id), 'autocomplete="off"') ?>
                    <div class="form-group row">
                        <label class="col-form-label col-3">News Title</label>
                        <input type="text" name="quickslide_title" class="form-control col-9" value="<?= $news->quickslide_title ?>" autofocus required>
                    </div>
                    <style>
                        .note-editor {
                            width: auto !important;
                        }
                    </style>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label class="col-form-label">News Description</label>
                            </div>
                            <div class="col-9">
                                <textarea name="quickslide_description" class="form-control col-9 summernote_editor" rows="10" placeholder="Enter News Description" required><?= $news->quickslide_description ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Old Image</label>
                        <img src="<?= base_url() ?>assets/goodgames/assets/images/img_slider/<?= $news->quickslide_img ?>" style="max-width: 500px" alt="Old Image">
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">New Image</label>
                        <input type="file" name="image" class="form-control-file col-9">
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-outline-primary text-white"><i class="fas fa-paper-plane mr-2"></i>Edit</button>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>