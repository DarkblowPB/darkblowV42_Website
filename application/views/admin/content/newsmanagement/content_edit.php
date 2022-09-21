<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open_multipart('', 'autocomplete="off" id="edit_form"') ?>
                    <div class="form-group row">
                        <label class="col-form-label col-3">News Title</label>
                        <input type="hidden" name="quickslide_id" id="quickslide_id" value="<?= $news->id ?>">
                        <input type="text" name="quickslide_title" id="quickslide_title" class="form-control col-9" value="<?= $news->quickslide_title ?>" autofocus>
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
                                <textarea name="quickslide_description" id="quickslide_description" class="form-control col-9 summernote_editor" rows="10" placeholder="Enter News Description"><?= $news->quickslide_description ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Old Image</label>
                        <img src="<?= base_url() ?>assets/goodgames/assets/images/img_news/<?= $news->quickslide_img ?>" style="max-width: 500px" alt="Old Image">
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">New Image</label>
                        <input type="file" name="quickslide_image" id="quickslide_image" class="form-control-file col-9">
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" id="submit" class="btn btn-primary" value="Submit">
                    </div>
                    <?= form_close() ?>
                    <script>
                        $(document).ready(() => {
                            $('#edit_form').submit((e) => {
                                e.preventDefault();

                                if ($('#quickslide_title').val() == '' || $('#quickslide_title').val() == null)
                                    ShowToast(2000, 'warning', 'News Title Cannot Be Empty.');
                                else if ($('#quickslide_description').val() == '' || $('#quickslide_description').val() == null)
                                    ShowToast(2000, 'warning', 'News Description Cannot Be Empty.');
                                else {
                                    SetAttribute('submit', 'button', 'Processing...');
                                    $.ajax({
                                        url: '<?= base_url('adm/newsmanagement/do_edit/') ?>',
                                        type: 'POST',
                                        dataType: 'JSON',
                                        data: new FormData(document.getElementById('edit_form')),
                                        processData: false,
                                        contentType: false,
                                        success: (response) => {
                                            var stringify = JSON.stringify(response);
                                            var result = JSON.parse(stringify);

                                            SetAttribute('submit', 'submit', 'Submit');
                                            ShowToast(2000, result.response, result.message);
                                            if (result.response == 'success') {
                                                setTimeout(() => {
                                                    window.location = '<?= base_url('adm/newsmanagement') ?>';
                                                }, 2000);
                                            }
                                        },
                                        error: () => {
                                            SetAttribute('submit', 'submit', 'Submit');
                                            ShowToast(2000, 'error', 'Can\'t Reach Server Right Now.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        }
                                    });
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>