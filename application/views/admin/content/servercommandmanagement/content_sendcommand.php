<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-center">
                    <?php if ($this->socketcommand->CheckConnection($this->socketcommand->LoadConfig('pbserver_auth_host'), $this->socketcommand->LoadConfig('pbserver_auth_port'))) : ?>
                        <input type="button" id="stopserver" class="btn btn-outline-primary text-white" value="Stop Server" onclick="StopServer()">
                    <?php endif; ?>
                    <?php if (!$this->socketcommand->CheckConnection($this->socketcommand->LoadConfig('pbserver_auth_host'), $this->socketcommand->LoadConfig('pbserver_auth_port'))) : ?>
                        <input type="button" id="startserver" class="btn btn-outline-primary text-white" value="Start Server" onclick="StartServer()">
                    <?php endif; ?>
                    <input type="button" id="reloadevents" class="btn btn-outline-primary text-white" value="Reload Events" onclick="ReloadEvents()">
                    <a href="<?= base_url('adm/servercommandmanagement/sendannouncement') ?>" class="btn btn-outline-primary text-white">Send Announcement</a>
                    <input type="button" id="kickallplayers" class="btn btn-outline-primary text-white" value="Kick All Players" onclick="KickAllPlayers()">
                    <a href="<?= base_url('adm/servercommandmanagement/bannedplayers') ?>" class="btn btn-outline-primary text-white">Banned Players</a>
                    <input type="button" id="refillshop" class="btn btn-outline-primary text-white" value="Refill Shop" onclick="RefillShop()">
                    <a href="<?= base_url('adm/servercommandmanagement/sendpointid') ?>" class="btn btn-outline-primary text-white">Send Point By ID</a>
                    <a href="<?= base_url('adm/servercommandmanagement/sendcashid') ?>" class="btn btn-outline-primary text-white">Send Cash By ID</a>
                </div>
                <script>
                    var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                    var RETRY = 0;

                    function StartServer() {
                        SetAttribute('startserver', 'button', 'Processing...');
                        $.ajax({
                            url: '<?= base_url('api/server/sendcommand') ?>',
                            type: 'POST',
                            dataType: 'JSON',
                            data: {
                                '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                'opcode': '<?= $this->socketcommand->Opcodes("Start Server") ?>',
                                'secret_token': '<?= $this->socketcommand->GenerateSecretToken() ?>',
                                'secret_keys': '<?= $this->socketcommand->GenerateSecretKeys() ?>',
                                'command_type': 'Start Server',
                            },
                            timeout: 0,
                            success: function(data) {
                                var GetString = JSON.stringify(data);
                                var Result = JSON.parse(GetString);

                                SetAttribute('startserver', 'button', 'Start Server');
                                ShowToast(2000, Result.response, Result.message);
                                CSRF_TOKEN = Result.token;
                                setTimeout(() => {
                                    window.location.reload();
                                }, 2000);
                                return;
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

                    function StopServer() {
                        SetAttribute('stopserver', 'button', 'Processing...');
                        $.ajax({
                            url: '<?= base_url('api/server/sendcommand') ?>',
                            type: 'POST',
                            dataType: 'JSON',
                            data: {
                                '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                'opcode': '<?= $this->socketcommand->Opcodes("Shutdown Server") ?>',
                                'secret_token': '<?= $this->socketcommand->GenerateSecretToken() ?>',
                                'secret_keys': '<?= $this->socketcommand->GenerateSecretKeys() ?>',
                                'command_type': 'Shutdown Server',
                            },
                            timeout: 0,
                            success: function(data) {
                                var GetString = JSON.stringify(data);
                                var Result = JSON.parse(GetString);

                                SetAttribute('stopserver', 'button', 'Stop Server');
                                ShowToast(2000, Result.response, Result.message);
                                CSRF_TOKEN = Result.token;
                                setTimeout(() => {
                                    window.location.reload();
                                }, 2000);
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

                    function RefillShop() {
                        SetAttribute('refillshop', 'button', 'Processing...');
                        $.ajax({
                            url: '<?= base_url('api/server/sendcommand') ?>',
                            type: 'POST',
                            dataType: 'JSON',
                            data: {
                                '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                'opcode': '<?= $this->socketcommand->Opcodes("Refill Shop") ?>',
                                'secret_token': '<?= $this->socketcommand->GenerateSecretToken() ?>',
                                'secret_keys': '<?= $this->socketcommand->GenerateSecretKeys() ?>',
                                'command_type': 'Refill Shop',
                            },
                            timeout: 0,
                            success: function(data) {
                                var GetString = JSON.stringify(data);
                                var Result = JSON.parse(GetString);

                                SetAttribute('refillshop', 'button', 'Refill Shop');
                                ShowToast(2000, Result.response, Result.message);
                                CSRF_TOKEN = Result.token;
                                setTimeout(() => {
                                    window.location.reload();
                                }, 2000);
                                return;
                            },
                            error: function() {
                                SetAttribute('refillshop', 'button', 'Refill Shop');
                                ShowToast(2000, 'error', 'Failed To Refill Shop.');
                                setTimeout(() => {
                                    window.location.reload();
                                }, 2000);
                            }
                        });
                    }

                    function ReloadEvents() {
                        SetAttribute('reloadevents', 'button', 'Processing...');
                        $.ajax({
                            url: '<?= base_url('api/server/sendcommand') ?>',
                            type: 'POST',
                            dataType: 'JSON',
                            data: {
                                '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                'opcode': '<?= $this->socketcommand->Opcodes("Reload Events") ?>',
                                'secret_token': '<?= $this->socketcommand->GenerateSecretToken() ?>',
                                'secret_keys': '<?= $this->socketcommand->GenerateSecretKeys() ?>',
                                'command_type': 'Reload Events',
                            },
                            timeout: 0,
                            success: function(data) {
                                var GetString = JSON.stringify(data);
                                var Result = JSON.parse(GetString);

                                SetAttribute('reloadevents', 'button', 'Reload Events');
                                ShowToast(2000, Result.response, Result.message);
                                CSRF_TOKEN = Result.token;
                                return;
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

                    function KickAllPlayers() {
                        SetAttribute('kickallplayers', 'button', 'Processing...');
                        $.ajax({
                            url: '<?= base_url('api/server/sendcommand') ?>',
                            type: 'POST',
                            dataType: 'JSON',
                            data: {
                                '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                'opcode': '<?= $this->socketcommand->Opcodes("Kick All Players") ?>',
                                'secret_token': '<?= $this->socketcommand->GenerateSecretToken() ?>',
                                'secret_keys': '<?= $this->socketcommand->GenerateSecretKeys() ?>',
                                'command_type': 'Kick All Players',
                            },
                            timeout: 0,
                            success: function(data) {
                                var GetString = JSON.stringify(data);
                                var Result = JSON.parse(GetString);

                                SetAttribute('kickallplayers', 'button', 'Kick All Players');
                                ShowToast(2000, Result.response, Result.message);
                                CSRF_TOKEN = Result.token;
                                return;
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
                </script>
            </div>
        </div>
    </div>
</div>