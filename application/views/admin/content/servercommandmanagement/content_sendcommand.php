<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-center">
                    <?php if ($this->servercommandmanagement->GetServerState()) { ?>
                        <input type="button" id="stopserver" class="btn btn-outline-primary text-white" value="Stop Server" onclick="StopServer()">
                    <?php } else { ?>
                        <input type="button" id="startserver" class="btn btn-outline-primary text-white" value="Start Server" onclick="StartServer()">
                    <?php } ?>
                    <input type="button" id="reloadevents" class="btn btn-outline-primary text-white" value="Reload Events" onclick="ReloadEvents()">
                    <a href="<?= base_url('adm/servercommandmanagement/sendannouncement') ?>" class="btn btn-outline-primary text-white">Send Announcement</a>
                    <input type="button" id="kickallplayers" class="btn btn-outline-primary text-white" value="Kick All Players" onclick="KickAllPlayers()">
                    <a href="<?= base_url('adm/servercommandmanagement/bannedplayers') ?>" class="btn btn-outline-primary text-white">Banned Players</a>
                </div>
                <script>
                    var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                    var RETRY = 0;

                    function ReloadEvents() {
                        SetAttribute('reloadevents', 'button', 'Processing...');
                        $.ajax({
                            url: '<?= base_url('api/servercommand/reloadevents') ?>',
                            type: 'POST',
                            dataType: 'JSON',
                            data: {
                                '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                'opcode': '<?= $this->servercommand_library->GenerateOpcode("Reload Events") ?>',
                                'secret_token': '<?= $this->servercommand_library->GenerateSecretToken() ?>',
                                'secret_keys': '<?= $this->servercommand_library->GenerateSecretKeys() ?>',
                                'command_type': 'Reload Events',
                            },
                            timeout: 0,
                            success: function(data) {
                                var GetString = JSON.stringify(data);
                                var Result = JSON.parse(GetString);

                                SetAttribute('reloadevents', 'button', 'Reload Events');
                                ShowToast(2000, Result.status, Result.message);
                                CSRF_TOKEN = Result.token;
                                return;
                            },
                            error: function() {
                                if (RETRY >= 3) {
                                    SetAttribute('reloadevents', 'button', 'Reload Events');
                                    ShowToast(2000, 'error', 'Failed To Reload Events.');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                } else {
                                    RETRY += 1;
                                    ShowToast(1000, 'info', 'Generate New Request Token...');
                                    $.ajax({
                                        url: '<?= base_url('api/security/csrf') ?>',
                                        type: 'GET',
                                        dataType: 'JSON',
                                        data: {
                                            '<?= $this->lib->GetTokenName() ?>': '<?= $this->lib->GetTokenKey() ?>'
                                        },
                                        success: function(data) {
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true') {
                                                CSRF_TOKEN = Result.token;
                                            }

                                            return ReloadEvents();
                                        },
                                        error: function() {
                                            SetAttribute('reloadevents', 'button', 'Reload Events');
                                            ShowToast(2000, 'error', 'Failed To Reload Events.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        }
                                    });
                                }
                            }
                        });
                    }

                    function KickAllPlayers() {
                        SetAttribute('kickallplayers', 'button', 'Processing...');
                        $.ajax({
                            url: '<?= base_url('api/servercommand/kickallplayers') ?>',
                            type: 'POST',
                            dataType: 'JSON',
                            data: {
                                '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                'opcode': '<?= $this->servercommand_library->GenerateOpcode("Kick All Players") ?>',
                                'secret_token': '<?= $this->servercommand_library->GenerateSecretToken() ?>',
                                'secret_keys': '<?= $this->servercommand_library->GenerateSecretKeys() ?>',
                                'command_type': 'Kick All Players',
                            },
                            timeout: 0,
                            success: function(data) {
                                var GetString = JSON.stringify(data);
                                var Result = JSON.parse(GetString);

                                SetAttribute('kickallplayers', 'button', 'Kick All Players');
                                ShowToast(2000, Result.status, Result.message);
                                CSRF_TOKEN = Result.token;
                                return;
                            },
                            error: function() {
                                if (RETRY >= 3) {
                                    SetAttribute('kickallplayers', 'button', 'Kick All Players');
                                    ShowToast(2000, 'error', 'Failed To Kick All Players.');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                } else {
                                    RETRY += 1;
                                    ShowToast(1000, 'info', 'Generate New Request Token...');
                                    $.ajax({
                                        url: '<?= base_url('api/security/csrf') ?>',
                                        type: 'GET',
                                        dataType: 'JSON',
                                        data: {
                                            '<?= $this->lib->GetTokenName() ?>': '<?= $this->lib->GetTokenKey() ?>'
                                        },
                                        success: function(data) {
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true') {
                                                CSRF_TOKEN = Result.token;
                                            }

                                            return KickAllPlayers();
                                        },
                                        error: function() {
                                            SetAttribute('kickallplayers', 'button', 'Kick All Players');
                                            ShowToast(2000, 'error', 'Failed To Kick All Players.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        }
                                    });

                                }
                            }
                        });
                    }

                    function StartServer() {
                        SetAttribute('startserver', 'button', 'Processing...');
                        $.ajax({
                            url: '<?= base_url('api/servercommand/startserver') ?>',
                            type: 'POST',
                            dataType: 'JSON',
                            data: {
                                '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                'opcode': '<?= $this->servercommand_library->GenerateOpcode("Start Server") ?>',
                                'secret_token': '<?= $this->servercommand_library->GenerateSecretToken() ?>',
                                'secret_keys': '<?= $this->servercommand_library->GenerateSecretKeys() ?>',
                                'command_type': 'Start Server',
                            },
                            timeout: 0,
                            success: function(data) {
                                var GetString = JSON.stringify(data);
                                var Result = JSON.parse(GetString);

                                SetAttribute('startserver', 'button', 'Start Server');
                                ShowToast(2000, Result.status, Result.message);
                                CSRF_TOKEN = Result.token;
                                setTimeout(() => {
                                    window.location.reload();
                                }, 2000);
                                return;
                            },
                            error: function() {
                                if (RETRY >= 3) {
                                    SetAttribute('startserver', 'button', 'Start Server');
                                    ShowToast(2000, 'error', 'Failed To Start Server.');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                } else {
                                    RETRY += 1;
                                    $.ajax({
                                        url: '<?= base_url('api/security/csrf') ?>',
                                        type: 'GET',
                                        dataType: 'JSON',
                                        data: {
                                            '<?= $this->lib->GetTokenName() ?>': '<?= $this->lib->GetTokenKey() ?>'
                                        },
                                        success: function(data) {
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true') {
                                                CSRF_TOKEN = Result.token;
                                            }

                                            return StartServer();
                                        },
                                        error: function() {
                                            SetAttribute('startserver', 'button', 'Start Server');
                                            ShowToast(2000, 'error', 'Failed To Start Server.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        }
                                    });
                                }
                            }
                        });
                    }

                    function StopServer() {
                        SetAttribute('stopserver', 'button', 'Processing...');
                        $.ajax({
                            url: '<?= base_url('api/servercommand/shutdownserver') ?>',
                            type: 'POST',
                            dataType: 'JSON',
                            data: {
                                '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                'opcode': '<?= $this->servercommand_library->GenerateOpcode("Shutdown Server") ?>',
                                'secret_token': '<?= $this->servercommand_library->GenerateSecretToken() ?>',
                                'secret_keys': '<?= $this->servercommand_library->GenerateSecretKeys() ?>',
                                'command_type': 'Shutdown Server',
                            },
                            timeout: 0,
                            success: function(data) {
                                var GetString = JSON.stringify(data);
                                var Result = JSON.parse(GetString);

                                SetAttribute('stopserver', 'button', 'Stop Server');
                                ShowToast(2000, Result.status, Result.message);
                                CSRF_TOKEN = Result.token;
                                setTimeout(() => {
                                    window.location.reload();
                                }, 2000);
                            },
                            error: function() {
                                if (RETRY >= 3) {
                                    SetAttribute('stopserver', 'button', 'Stop Server');
                                    ShowToast(2000, 'error', 'Failed To Stop Server.');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                } else {
                                    RETRY += 1;
                                    $.ajax({
                                        url: '<?= base_url('api/security/csrf') ?>',
                                        type: 'GET',
                                        dataType: 'JSON',
                                        data: {
                                            '<?= $this->lib->GetTokenName() ?>': '<?= $this->lib->GetTokenKey() ?>'
                                        },
                                        success: function(data) {
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true') {
                                                CSRF_TOKEN = Result.token;
                                            }

                                            return StartServer();
                                        },
                                        error: function() {
                                            SetAttribute('stopserver', 'button', 'Stop Server');
                                            ShowToast(2000, 'error', 'Failed To Stop Server.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        }
                                    });
                                }
                            }
                        });
                    }
                </script>
            </div>
        </div>
    </div>
</div>