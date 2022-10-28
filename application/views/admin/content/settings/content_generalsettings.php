<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <?= form_open('', 'id="generalsettings01_form" autocomplete="off"') ?>
            <div class="card">
                <div class="card-header text-uppercase text-bold text-center">
                    General Settings 01
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="col-form-label">Server Condition</label>
                                <select id="server_condition" class="form-control reward_selection" style="width: 100%;">
                                    <option value="0" <?php if ($settings->server_condition == 0) echo 'selected'; ?>>OFFLINE</option>
                                    <option value="1" <?php if ($settings->server_condition == 1) echo 'selected'; ?>>ONLINE</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="col-form-label">Website Condition</label>
                                <select id="website_condition" class="form-control reward_selection" style="width: 100%;">
                                    <option value="0" <?php if ($settings->website_condition == 0) echo 'selected'; ?>>OFFLINE</option>
                                    <option value="1" <?php if ($settings->website_condition == 1) echo 'selected'; ?>>ONLINE</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <input type="submit" id="submit_generalsettings01" class="btn btn-outline-primary text-white" value="Submit Settings">
                </div>
            </div>
            <?= form_close() ?>
            <?= form_open('', 'id="generalsettings03_form"') ?>
            <div class="card">
                <div class="card-header text-uppercase text-bold text-center">
                    General Settings 03
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <input type="hidden" name="submit_form" value="submit03">
                                <label class="col-form-label">Project Logo</label>
                                <input type="file" id="project_logo" name="project_logo" class="form-control-file">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="col-form-label">Project Icon</label>
                                <input type="file" id="project_icon" name="project_icon" class="form-control-file">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <input type="submit" id="submit_generalsettings03" class="btn btn-outline-primary text-white" value="Submit Settings">
                </div>
            </div>
            <?= form_close() ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <?= form_open('', 'id="generalsettings02_form" autocomplete="off"') ?>
            <div class="card">
                <div class="card-header text-uppercase text-bold text-center">
                    General Settings 02
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="col-form-label">Project Name</label>
                                <input type="text" id="project_name" class="form-control" value="<?= $settings->project_name ?>" placeholder="Enter Your Project Name">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Meta Author</label>
                                <input type="text" id="meta_author" class="form-control" value="<?= $settings->meta_author ?>" placeholder="Enter Your Meta Author">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Meta Description</label>
                                <input type="text" id="meta_description" class="form-control" value="<?= $settings->meta_description ?>" placeholder="Enter Your Meta Description">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="col-form-label">Meta Keywords</label>
                                <input type="text" id="meta_keywords" class="form-control" value="<?= $settings->meta_keywords ?>" placeholder="Enter Your Meta Keywords (Separate With Comma)">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Running Text</label>
                                <input type="text" id="running_text" class="form-control" value="<?= $settings->running_text ?>" placeholder="Enter Your Running Text">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Discord Embed Link</label>
                                <input type="url" name="discord_embed_link" id="discord_embed_link" class="form-control" value="<?= $settings->discord_embed_link ?>" placeholder="Enter Your Discord Embed Link">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <input type="submit" id="submit_generalsettings02" class="btn btn-outline-primary text-white" value="Submit Settings">
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<script>
    var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
    $(document).ready(function() {
        $('#generalsettings01_form').on('submit', function(e) {
            e.preventDefault();
            return Do_SubmitSettings_01();
        });
        $('#generalsettings02_form').on('submit', function(e) {
            e.preventDefault();
            return Do_SubmitSettings_02();
        });
        $('#generalsettings03_form').on('submit', function(e) {
            e.preventDefault();
            return Do_SubmitSettings_03();
        });
    });

    function Do_SubmitSettings_01() {
        if ($('#server_condition').val() == "") {
            ShowToast(2000, 'warning', 'Server Condition Cannot Be Empty.');
            return;
        } else if ($('#website_condition').val() == "") {
            ShowToast(2000, 'warning', 'Website Condition Cannot Be Empty.');
            return;
        } else {
            SetAttribute('submit_generalsettings01', 'button', 'Processing...');

            $.ajax({
                url: '<?= base_url('adm/settings/do_submit_generalsettings') ?>',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                    'submit_form': 'submit01',
                    'server_condition': $('#server_condition').val(),
                    'website_condition': $('#website_condition').val()
                },
                success: function(data) {
                    var GetString = JSON.stringify(data);
                    var Result = JSON.parse(GetString);

                    if (Result.response == 'true') {
                        SetAttribute('submit_generalsettings01', 'submit', 'Submit Settings');
                        ShowToast(2000, 'success', Result.message);
                        CSRF_TOKEN = Result.token;
                        return;
                    } else if (Result.response == 'false') {
                        SetAttribute('submit_generalsettings01', 'submit', 'Submit Settings');
                        ShowToast(2000, 'error', Result.message);
                        CSRF_TOKEN = Result.token;
                        return;
                    } else {
                        SetAttribute('submit_generalsettings01', 'submit', 'Submit Settings');
                        ShowToast(2000, 'error', Result.message);
                        CSRF_TOKEN = Result.token;
                        return;
                    }
                },
                error: function() {
                    ShowToast(2000, 'error', 'Failed To Update Settings.');
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }
            });
        }
    }

    function Do_SubmitSettings_02() {
        if ($('#project_name').val() == "") {
            ShowToast(2000, 'warning', 'Project Name Cannot Be Empty.');
            return;
        } else if ($('#meta_author').val() == "") {
            ShowToast(2000, 'warning', 'Meta Author Cannot Be Empty.');
            return;
        } else if ($('#meta_description').val() == "") {
            ShowToast(2000, 'warning', 'Meta Description Cannot Be Empty.');
            return;
        } else if ($('#meta_keywords').val() == "") {
            ShowToast(2000, 'warning', 'Meta Keywords Cannot Be Empty.');
            return;
        } else if ($('#running_text').val() == "") {
            ShowToast(2000, 'warning', 'Running Text Cannot Be Empty.');
            return;
        } else {
            SetAttribute('submit_generalsettings02', 'button', 'Processing...');

            $.ajax({
                url: '<?= base_url('adm/settings/do_submit_generalsettings') ?>',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                    'submit_form': 'submit02',
                    'project_name': $('#project_name').val(),
                    'meta_author': $('#meta_author').val(),
                    'meta_description': $('#meta_description').val(),
                    'meta_keywords': $('#meta_keywords').val(),
                    'running_text': $('#running_text').val(),
                    'discord_embed_link': $('#discord_embed_link').val()
                },
                success: function(data) {
                    var GetString = JSON.stringify(data);
                    var Result = JSON.parse(GetString);

                    if (Result.response == 'true') {
                        SetAttribute('submit_generalsettings02', 'submit', 'Submit Settings');
                        ShowToast(2000, 'success', Result.message);
                        CSRF_TOKEN = Result.token;
                        return;
                    } else if (Result.response == 'false') {
                        SetAttribute('submit_generalsettings02', 'submit', 'Submit Settings');
                        ShowToast(2000, 'error', Result.message);
                        CSRF_TOKEN = Result.token;
                        return;
                    } else {
                        SetAttribute('submit_generalsettings02', 'submit', 'Submit Settings');
                        ShowToast(2000, 'error', Result.message);
                        CSRF_TOKEN = Result.token;
                        return;
                    }
                },
                error: function() {
                    SetAttribute('submit_generalsettings02', 'submit', 'Submit Settings');
                    ShowToast(2000, 'Failed To Update Settings.');
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }
            });
        }
    }

    function Do_SubmitSettings_03() {
        if (document.getElementById('project_logo').files.length == 0) {
            ShowToast(2000, 'error', 'Project Logo Cannot Be Empty.');
            return;
        } else if (document.getElementById('project_icon').files.length == 0) {
            ShowToast(2000, 'error', 'Project Icon Cannot Be Empty.');
            return;
        } else {
            SetAttribute('submit_generalsettings03', 'button', 'Processing...');
            $.ajax({
                url: '<?= base_url('adm/settings/do_submit_generalsettings_images') ?>',
                type: 'POST',
                dataType: 'JSON',
                data: new FormData(document.getElementById('generalsettings03_form')),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function(data) {
                    var GetString = JSON.stringify(data);
                    var Result = JSON.parse(GetString);

                    if (Result.response == 'true') {
                        SetAttribute('submit_generalsettings03', 'submit', 'Submit Settings');
                        ShowToast(2000, 'success', Result.message);
                        CSRF_TOKEN = Result.token;
                        return;
                    } else if (Result.response == 'false') {
                        SetAttribute('submit_generalsettings03', 'submit', 'Submit Settings');
                        ShowToast(2000, 'error', Result.message);
                        CSRF_TOKEN = Result.token;
                        return;
                    } else {
                        SetAttribute('submit_generalsettings03', 'submit', 'Submit Settings');
                        ShowToast(2000, 'error', Result.message);
                        CSRF_TOKEN = Result.token;
                        return;
                    }
                },
                error: function() {
                    SetAttribute('submit_generalsettings03', 'submit', 'Submit Settings');
                    ShowToast(2000, 'error', 'Failed To Update Settings.');
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }
            });
        }
    }
</script>