<style>
    .note-editor {
        width: auto !important;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <?= form_open_multipart(base_url('adm/newsmanagement/do_add'), 'id="add_form" autocomplete="off"') ?>
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label class="col-form-label">News Title</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="quickslide_title" id="quickslide_title" class="form-control" placeholder="Enter News Title" maxlength="255" autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label class="col-form-label">News Description</label>
                            </div>
                            <div class="col-9">
                                <textarea name="quickslide_description" id="quickslide_description" class="form-control col-9 summernote_editor" rows="10" placeholder="Enter News Description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Image</label>
                        <input type="file" name="quickslide_image" id="quickslide_image" class="form-control-file col-9">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="quickslide_state" class="col-form-label">News Status</label>
                            </div>
                            <div class="col-9">
                                <select name="quickslide_state" id="quickslide_state" class="form-control reward_selection" style="width: 100%;" required>
                                    <option value="" disabled selected>Select News Status</option>
                                    <option value="0">Inactive (Hidden From Homepage)</option>
                                    <option value="1">Active</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit">
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(() => {
        $('#add_form').on('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            return SubmitForm(formData);
        });
    });

    function SubmitForm(param) {
        if ($('#quickslide_title').val() == '' || $('#quickslide_title').val() == null) {
            ShowToast(2000, 'warning', 'News Title Cannot Be Empty.');
            return;
        } else if ($('#quickslide_description').val() == '' || $('#quickslide_description').val() == null) {
            ShowToast(2000, 'warning', 'News Description Cannot Be Empty.');
            return;
        } else {
            SetAttribute('submit', 'button', 'Processing...');
            $.ajax({
                url: '<?= base_url('adm/newsmanagement/do_add') ?>',
                type: 'POST',
                data: param,
                processData: false,
                contentType: false,
                success: (response) => {
                    var GetString = JSON.stringify(response);
                    var Result = JSON.parse(GetString);

                    SetAttribute('submit', 'submit', 'Submit');
                    ShowToast(2000, Result.response, Result.message);
                    if (Result.response == 'success') {
                        setTimeout(() => {
                            window.location = '<?= base_url('adm/newsmanagement') ?>';
                        }, 2000);
                    } else {
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    }
                },
                error: () => {
                    window.location.reload();
                }
            });
        }
    }
</script>