<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header text-uppercase text-bold text-center">
                    General Settings 01
                </div>
                <div class="card-body">
                    <?php echo form_open('', 'id="generalsettings01_form" autocomplete="off"') ?>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Server Condition</label>
                            <select id="server_condition" class="form-control col-9">
                                <option value="0" <?php if ($settings->server_condition == 0){echo 'selected';} ?>>OFFLINE</option>
                                <option value="1" <?php if ($settings->server_condition == 1){echo 'selected';} ?>>ONLINE</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Website Condition</label>
                            <select id="website_condition" class="form-control col-9">
                                <option value="0" <?php if ($settings->website_condition == 0){echo 'selected';} ?>>OFFLINE</option>
                                <option value="1" <?php if ($settings->website_condition == 1){echo 'selected';} ?>>ONLINE</option>
                            </select>
                        </div>
                        <div class="form-group text-right">
                            <input type="submit" id="submit_generalsettings01" class="btn btn-outline-primary text-white" value="Submit Settings">
                        </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header text-uppercase text-bold text-center">
                    General Settings 02
                </div>
                <div class="card-body">
                    <?php echo form_open('', 'id="generalsettings02_form" autocomplete="off"') ?>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Project Name</label>
                            <input type="text" id="project_name" class="form-control col-9" value="<?php echo $settings->project_name ?>" placeholder="Enter Your Project Name">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Meta Author</label>
                            <input type="text" id="meta_author" class="form-control col-9" value="<?php echo $settings->meta_author ?>" placeholder="Enter Your Meta Author">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Meta Description</label>
                            <input type="text" id="meta_description" class="form-control col-9" value="<?php echo $settings->meta_description ?>" placeholder="Enter Your Meta Description">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Meta Keywords</label>
                            <input type="text" id="meta_keywords" class="form-control col-9" value="<?php echo $settings->meta_keywords ?>" placeholder="Enter Your Meta Keywords (Separate With Comma)">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Running Text</label>
                            <input type="text" id="running_text" class="form-control col-9" value="<?php echo $settings->running_text ?>" placeholder="Enter Your Running Text">
                        </div>
                        <div class="form-group text-right">
                            <input type="submit" id="submit_generalsettings02" class="btn btn-outline-primary text-white" value="Submit Settings">
                        </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header text-uppercase text-bold text-center">
                    General Settings 03
                </div>
                <div class="card-body">
                    <form id="generalsettings03_form" autocomplete="off">
                        <div class="form-group row">
                            <input type="hidden" name="submit_form" value="submit03">
                            <label class="col-form-label col-3">Project Logo</label>
                            <input type="file" name="project_logo" class="form-control-file col-9">
                        </div>
                        <?php if ($settings->project_logo != null) : ?>
                            <div class="form-group row">
                                <label class="col-form-label col-3">Old Logo</label>
                                <img src="<?php echo base_url() ?>assets/goodgames/assets/images/settings/<?php echo $settings->project_logo ?>" class="img img-fluid" width="250" alt="<?php echo $settings->project_logo ?>">
                            </div>
                        <?php endif; ?>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Project Icon</label>
                            <input type="file" name="project_icon" class="form-control-file col-9">
                        </div>
                        <?php if ($settings->project_icon != null) : ?>
                            <div class="form-group row">
                                <label class="col-form-label col-3">Old Icon</label>
                                <img src="<?php echo base_url() ?>assets/goodgames/assets/images/settings/<?php echo $settings->project_icon ?>" class="img img-fluid" width="250" alt="<?php echo $settings->project_icon ?>">
                            </div>
                        <?php endif; ?>
                        <div class="form-group text-right">
                            <input type="submit" id="submit_generalsettings03" class="btn btn-outline-primary text-white" value="Submit Settings">
                        </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
    $(document).ready(function(){
        $('#generalsettings01_form').on('submit', function(e){
            e.preventDefault();
            if ($('#server_condition').val() == ""){
                ShowToast(2000, 'warning', 'Server Condition Cannot Be Empty.');
                return;
            }
            else if ($('#website_condition').val() == ""){
                ShowToast(2000, 'warning', 'Website Condition Cannot Be Empty.');
                return;
            }
            else{
                SetAttribute('submit_generalsettings01', 'button', 'Processing...');

                $.ajax({
                    url: '<?php echo base_url('adm/settings/do_submit_generalsettings') ?>',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                        'submit_form' : 'submit01',
                        'server_condition' : $('#server_condition').val(),
                        'website_condition' : $('#website_condition').val()
                    },
                    success: function(data){
                        var GetString = JSON.stringify(data);
                        var Result = JSON.parse(GetString);

                        if (Result.response == 'true'){
                            SetAttribute('submit_generalsettings01', 'submit', 'Submit Settings');
                            ShowToast(2000, 'success', Result.message);
                            CSRF_TOKEN = Result.token;
                            return;
                        }
                        else if (Result.response == 'false'){
                            SetAttribute('submit_generalsettings01', 'submit', 'Submit Settings');
                            ShowToast(2000, 'error', Result.message);
                            CSRF_TOKEN = Result.token;
                            return;
                        }
                        else{
                            SetAttribute('submit_generalsettings01', 'submit', 'Submit Settings');
                            ShowToast(2000, 'error', Result.message);
                            CSRF_TOKEN = Result.token;
                            return;
                        }
                    },
                    error: function(){
                        ShowToast(1000, 'info', 'Generating New Request Token...');
                        
                        $.ajax({
                            url: '<?php echo base_url('api/getnewtoken') ?>',
                            type: 'GET',
                            dataType: 'JSON',
                            data: {},
                            success: function(){
                                var GetString = JSON.stringify(data);
                                var Result = JSON.parse(GetString);

                                if (Result.response == 'true'){
                                    CSRF_TOKEN = Result.token;
                                }

                                return Do_SubmitSettings_01();
                            },
                            error: function(){
                                SetAttribute('submit_generalsettings01', 'submit', 'Submit Settings');
                                ShowToast(2000, 'Failed To Update Settings.');
                                setTimeout(() => {
                                    window.location.reload();
                                }, 2000);
                            }
                        });
                    }
                });
            }
        });
    });

    function Do_SubmitSettings_01()
    {
        if ($('#server_condition').val() == ""){
            ShowToast(2000, 'warning', 'Server Condition Cannot Be Empty.');
            return;
        }
        else if ($('#website_condition').val() == ""){
            ShowToast(2000, 'warning', 'Website Condition Cannot Be Empty.');
            return;
        }
        else{
            SetAttribute('submit_generalsettings01', 'button', 'Processing...');

            $.ajax({
                url: '<?php echo base_url('adm/settings/do_submit_generalsettings') ?>',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                    'submit_form' : 'submit01',
                    'server_condition' : $('#server_condition').val(),
                    'website_condition' : $('#website_condition').val()
                },
                success: function(data){
                    var GetString = JSON.stringify(data);
                    var Result = JSON.parse(GetString);

                    if (Result.response == 'true'){
                        SetAttribute('submit_generalsettings01', 'submit', 'Submit Settings');
                        ShowToast(2000, 'success', Result.message);
                        CSRF_TOKEN = Result.token;
                        return;
                    }
                    else if (Result.response == 'false'){
                        SetAttribute('submit_generalsettings01', 'submit', 'Submit Settings');
                        ShowToast(2000, 'error', Result.message);
                        CSRF_TOKEN = Result.token;
                        return;
                    }
                    else{
                        SetAttribute('submit_generalsettings01', 'submit', 'Submit Settings');
                        ShowToast(2000, 'error', Result.message);
                        CSRF_TOKEN = Result.token;
                        return;
                    }
                },
                error: function(){
                    ShowToast(2000, 'error', 'Failed To Update Settings.');
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }
            });
        }
    }

    $(document).ready(function(){
        $('#generalsettings02_form').on('submit', function(e){
            e.preventDefault();
            if ($('#project_name').val() == ""){
                ShowToast(2000, 'warning', 'Project Name Cannot Be Empty.');
                return;
            }
            else if ($('#meta_author').val() == ""){
                ShowToast(2000, 'warning', 'Meta Author Cannot Be Empty.');
                return;
            }
            else if ($('#meta_description').val() == ""){
                ShowToast(2000, 'warning', 'Meta Description Cannot Be Empty.');
                return;
            }
            else if ($('#meta_keywords').val() == ""){
                ShowToast(2000, 'warning', 'Meta Keywords Cannot Be Empty.');
                return;
            }
            else if ($('#running_text').val() == ""){
                ShowToast(2000, 'warning', 'Running Text Cannot Be Empty.');
                return;
            }
            else{
                SetAttribute('submit_generalsettings02', 'button', 'Processing...');

                $.ajax({
                    url: '<?php echo base_url('adm/settings/do_submit_generalsettings') ?>',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                        'submit_form' : 'submit02',
                        'project_name' : $('#project_name').val(),
                        'meta_author' : $('#meta_author').val(),
                        'meta_description' : $('#meta_description').val(),
                        'meta_keywords' : $('#meta_keywords').val(),
                        'running_text' : $('#running_text').val()
                    },
                    success: function(data){
                        var GetString = JSON.stringify(data);
                        var Result = JSON.parse(GetString);

                        if (Result.response == 'true'){
                            SetAttribute('submit_generalsettings02', 'submit', 'Submit Settings');
                            ShowToast(2000, 'success', Result.message);
                            CSRF_TOKEN = Result.token;
                            return;
                        }
                        else if (Result.response == 'false'){
                            SetAttribute('submit_generalsettings02', 'submit', 'Submit Settings');
                            ShowToast(2000, 'error', Result.message);
                            CSRF_TOKEN = Result.token;
                            return;
                        }
                        else{
                            SetAttribute('submit_generalsettings02', 'submit', 'Submit Settings');
                            ShowToast(2000, 'error', Result.message);
                            CSRF_TOKEN = Result.token;
                            return;
                        }
                    },
                    error: function(){
                        ShowToast(1000, 'info', 'Generating New Request Token...');
                        
                        $.ajax({
                            url: '<?php echo base_url('api/getnewtoken') ?>',
                            type: 'GET',
                            dataType: 'JSON',
                            data: {},
                            success: function(){
                                var GetString = JSON.stringify(data);
                                var Result = JSON.parse(GetString);

                                if (Result.response == 'true'){
                                    CSRF_TOKEN = Result.token;
                                }

                                return Do_SubmitSettings_02();
                            },
                            error: function(){
                                SetAttribute('submit_generalsettings02', 'submit', 'Submit Settings');
                                ShowToast(2000, 'Failed To Update Settings.');
                                setTimeout(() => {
                                    window.location.reload();
                                }, 2000);
                            }
                        });
                    }
                });
            }
        });
    })

    function Do_SubmitSettings_02()
    {
        if ($('#project_name').val() == ""){
            ShowToast(2000, 'warning', 'Project Name Cannot Be Empty.');
            return;
        }
        else if ($('#meta_author').val() == ""){
            ShowToast(2000, 'warning', 'Meta Author Cannot Be Empty.');
            return;
        }
        else if ($('#meta_description').val() == ""){
            ShowToast(2000, 'warning', 'Meta Description Cannot Be Empty.');
            return;
        }
        else if ($('#meta_keywords').val() == ""){
            ShowToast(2000, 'warning', 'Meta Keywords Cannot Be Empty.');
            return;
        }
        else if ($('#running_text').val() == ""){
            ShowToast(2000, 'warning', 'Running Text Cannot Be Empty.');
            return;
        }
        else{
            SetAttribute('submit_generalsettings02', 'button', 'Processing...');

            $.ajax({
                url: '<?php echo base_url('adm/settings/do_submit_generalsettings') ?>',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                    'submit_form' : 'submit02',
                    'project_name' : $('#project_name').val(),
                    'meta_author' : $('#meta_author').val(),
                    'meta_description' : $('#meta_description').val(),
                    'meta_keywords' : $('#meta_keywords').val(),
                    'running_text' : $('#running_text').val()
                },
                success: function(data){
                    var GetString = JSON.stringify(data);
                    var Result = JSON.parse(GetString);

                    if (Result.response == 'true'){
                        SetAttribute('submit_generalsettings02', 'submit', 'Submit Settings');
                        ShowToast(2000, 'success', Result.message);
                        CSRF_TOKEN = Result.token;
                        return;
                    }
                    else if (Result.response == 'false'){
                        SetAttribute('submit_generalsettings02', 'submit', 'Submit Settings');
                        ShowToast(2000, 'error', Result.message);
                        CSRF_TOKEN = Result.token;
                        return;
                    }
                    else{
                        SetAttribute('submit_generalsettings02', 'submit', 'Submit Settings');
                        ShowToast(2000, 'error', Result.message);
                        CSRF_TOKEN = Result.token;
                        return;
                    }
                },
                error: function(){
                    SetAttribute('submit_generalsettings02', 'submit', 'Submit Settings');
                    ShowToast(2000, 'Failed To Update Settings.');
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }
            });
        }
    }

    $(document).ready(function(){
        $('#generalsettings03_form').on('submit', function(e){
            e.preventDefault();
            if ($('#project_logo').val() == null){
                ShowToast(2000, 'error', 'Project Logo Cannot Be Empty.');
                return;
            }
            else if ($('#project_icon').val() == null){
                ShowToast(2000, 'error', 'Project Icon Cannot Be Empty.');
                return;
            }
            else{
                SetAttribute('submit_generalsettings03', 'button', 'Processing...');
                $.ajax({
                    url: '<?php echo base_url('adm/settings/do_submit_generalsettings_images') ?>',
                    type: 'POST',
                    dataType: 'JSON',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    cache: false,
                    async: false,
                    success: function(data){
                        var GetString = JSON.stringify(data);
                        var Result = JSON.parse(GetString);

                        if (Result.response == 'true'){
                            SetAttribute('submit_generalsettings03', 'submit', 'Submit Settings');
                            ShowToast(2000, 'success', Result.message);
                            CSRF_TOKEN = Result.token;
                            return;
                        }
                        else if (Result.response == 'false'){
                            SetAttribute('submit_generalsettings03', 'submit', 'Submit Settings');
                            ShowToast(2000, 'error', Result.message);
                            CSRF_TOKEN = Result.token;
                            return;
                        }
                        else{
                            SetAttribute('submit_generalsettings03', 'submit', 'Submit Settings');
                            ShowToast(2000, 'error', Result.message);
                            CSRF_TOKEN = Result.token;
                            return;
                        }
                    },
                    error: function(){
                        ShowToast(1000, 'info', 'Generating New Request Token...');

                        $.ajax({
                            url: '<?php echo base_url('api/getnewtoken') ?>',
                            type: 'GET',
                            dataType: 'JSON',
                            data: {},
                            success: function(data){
                                var GetString = JSON.stringify(data);
                                var Result = JSON.parse(GetString);

                                if (Result.response == 'true'){
                                    CSRF_TOKEN = Result.token;
                                }
                                return Do_SubmitSettings_03();
                            },
                            error: function(){
                                ShowToast(2000, 'error', 'Failed To Update Settings.');
                                setTimeout(() => {
                                    window.location.reload();
                                }, 2000);
                            }
                        });
                    }
                });
            }
        });
    });

    function Do_SubmitSettings_03()
    {
        if ($('#project_logo').val() == null){
                ShowToast(2000, 'error', 'Project Logo Cannot Be Empty.');
                return;
            }
            else if ($('#project_icon').val() == null){
                ShowToast(2000, 'error', 'Project Icon Cannot Be Empty.');
                return;
            }
            else{
                SetAttribute('submit_generalsettings03', 'button', 'Processing...');
                $.ajax({
                    url: '<?php echo base_url('adm/settings/do_submit_generalsettings_images') ?>',
                    type: 'POST',
                    dataType: 'JSON',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    cache: false,
                    async: false,
                    success: function(data){
                        var GetString = JSON.stringify(data);
                        var Result = JSON.parse(GetString);

                        if (Result.response == 'true'){
                            SetAttribute('submit_generalsettings03', 'submit', 'Submit Settings');
                            ShowToast(2000, 'success', Result.message);
                            CSRF_TOKEN = Result.token;
                            return;
                        }
                        else if (Result.response == 'false'){
                            SetAttribute('submit_generalsettings03', 'submit', 'Submit Settings');
                            ShowToast(2000, 'error', Result.message);
                            CSRF_TOKEN = Result.token;
                            return;
                        }
                        else{
                            SetAttribute('submit_generalsettings03', 'submit', 'Submit Settings');
                            ShowToast(2000, 'error', Result.message);
                            CSRF_TOKEN = Result.token;
                            return;
                        }
                    },
                    error: function(){
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