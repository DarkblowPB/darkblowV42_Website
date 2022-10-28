<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12 col-12">
            <div class="card">
                <div class="card-header text-uppercase font-weight-bold text-center">Server Status Panel</div>
                <div id="server_panel" class="card-body text-center"></div>
            </div>
        </div>
        <div class="col-lg-4 col-md-8 col-sm-12 col-12">
            <div class="card">
                <div class="card-header text-uppercase font-weight-bold text-center">Primary System Commands</div>
                <div class="card-body text-center">
                    <input type="button" id="reloadevents" class="btn btn-outline-primary text-white" value="Reload Events" onclick="ReloadEvents()">
                    <input type="button" id="kickallplayers" class="btn btn-outline-primary text-white" value="Kick All Players" onclick="KickAllPlayers()">
                    <input type="button" id="refillshop" class="btn btn-outline-primary text-white" value="Refill Shop" onclick="RefillShop()">
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header text-uppercase font-weight-bold text-center">Secondary System Commands</div>
                <div class="card-body text-center">
                    <a href="<?= base_url('adm/servercommandmanagement/sendannouncement') ?>" class="btn btn-outline-primary text-white">Send Announcement</a>
                    <a href="<?= base_url('adm/servercommandmanagement/bannedplayers') ?>" class="btn btn-outline-primary text-white">Banned Players</a>
                    <a href="<?= base_url('adm/servercommandmanagement/sendpointid') ?>" class="btn btn-outline-primary text-white">Send Point By ID</a>
                    <a href="<?= base_url('adm/servercommandmanagement/sendcashid') ?>" class="btn btn-outline-primary text-white">Send Cash By ID</a>
                </div>
            </div>
        </div>
        <script>
            var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
            var RETRY = 0;

            $(document).ready(() => {
                return GetServerCondition();
            });

            function GetServerCondition() {
                $.ajax({
                    url: '<?= base_url('api/server/serverstatus') ?>',
                    type: 'GET',
                    dataType: 'JSON',
                    timeout: 0,
                    success: (response) => {
                        var GetString = JSON.stringify(response);
                        var Result = JSON.parse(GetString);

                        if (Result.response == 'success') CreateServerStatusButton("button", "stopserver", "btn btn-outline-primary text-white", "Stop Server", "StopServer()");
                        else if (Result.response == 'error') CreateServerStatusButton("button", "startserver", "btn btn-outline-primary text-white", "Start Server", "StartServer()");
                        else CreateServerStatusButton("button", "", "btn btn-outline-primary text-white", "COMMAND SYSTEM DISABLED", "");
                    }
                });
            }

            function CreateServerStatusButton(type, id, _class, value, onclick) {
                var input_element = document.createElement("input");
                input_element.setAttribute("type", type);
                input_element.setAttribute("id", id);
                input_element.setAttribute("class", _class);
                input_element.setAttribute("value", value);
                input_element.setAttribute("onclick", onclick);

                document.getElementById("server_panel").appendChild(input_element);
            }

            function StartServer() {
                SetAttribute('startserver', 'button', 'Processing...');
                $.ajax({
                    url: '<?= base_url('api/server/sendcommand') ?>',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                        'opcode': '<?= Darkblowopcodes::START_SERVER[0] ?>',
                        'secret_token': '<?= $this->darkblowsocketcommand->GenerateSecretToken() ?>',
                        'secret_keys': '<?= $this->darkblowsocketcommand->GenerateSecretKeys() ?>',
                        'command_type': '<?= Darkblowopcodes::START_SERVER[1] ?>',
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
                        'opcode': '<?= Darkblowopcodes::SHUTDOWN_SERVER[0] ?>',
                        'secret_token': '<?= $this->darkblowsocketcommand->GenerateSecretToken() ?>',
                        'secret_keys': '<?= $this->darkblowsocketcommand->GenerateSecretKeys() ?>',
                        'command_type': '<?= Darkblowopcodes::SHUTDOWN_SERVER[1] ?>',
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
                        'opcode': '<?= Darkblowopcodes::REFILL_SHOP[0] ?>',
                        'secret_token': '<?= $this->darkblowsocketcommand->GenerateSecretToken() ?>',
                        'secret_keys': '<?= $this->darkblowsocketcommand->GenerateSecretKeys() ?>',
                        'command_type': '<?= Darkblowopcodes::REFILL_SHOP[1] ?>',
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
                        'opcode': '<?= Darkblowopcodes::RELOAD_EVENTS[0] ?>',
                        'secret_token': '<?= $this->darkblowsocketcommand->GenerateSecretToken() ?>',
                        'secret_keys': '<?= $this->darkblowsocketcommand->GenerateSecretKeys() ?>',
                        'command_type': '<?= Darkblowopcodes::RELOAD_EVENTS[1] ?>',
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
                        'opcode': '<?= Darkblowopcodes::KICK_ALL_PLAYERS[0] ?>',
                        'secret_token': '<?= $this->darkblowsocketcommand->GenerateSecretToken() ?>',
                        'secret_keys': '<?= $this->darkblowsocketcommand->GenerateSecretKeys() ?>',
                        'command_type': '<?= Darkblowopcodes::KICK_ALL_PLAYERS[1] ?>',
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