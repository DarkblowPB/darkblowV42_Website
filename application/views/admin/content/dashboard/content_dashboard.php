<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-secondary">
                <span class="info-box-icon"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Players</span>
                    <span class="info-box-number">
                        <?= $registeredplayers; ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-secondary">
                <span class="info-box-icon"><i class="fas fa-user-check"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Online Players</span>
                    <span class="info-box-number" id="total_players">
                        <?= $onlineplayers ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-secondary">
                <span class="info-box-icon"><i class="fas fa-newspaper"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total News</span>
                    <span class="info-box-number">
                        <?= $news ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-secondary">
                <span class="info-box-icon"><i class="fas fa-users-slash"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Blocked Players</span>
                    <span class="info-box-number">
                        <?= $blockedplayers ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="card">
                <div class="card-header text-center">
                    <i class="fas fa-list mr-2"></i>Server Memory Usage
                </div>
                <div class="card-body text-center">
                    <canvas id="MemoryUsage_Chart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="card">
                <div class="card-header text-center">
                    <i class="fas fa-user-friends mr-2"></i>Total Connected Socket
                </div>
                <div class="card-body text-center">
                    <canvas id="SocketCount_Chart"></canvas>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                        const MemoryUsage_Canvas = $('#MemoryUsage_Chart').get(0).getContext('2d');
                        const MemoryUsage_Data = {
                            labels: [
                                'Memory Usage',
                                'Available Memory'
                            ],
                            datasets: [{
                                data: [0, 131072],
                                backgroundColor: ['#dc3545', '#198754'],
                            }]
                        };
                        const MemoryUsage_Options = {
                            maintainAspectRatio: false,
                            responsive: true,
                            legend: {
                                labels: {
                                    fontColor: "white"
                                }
                            }
                        };
                        const MemoryUsage = new Chart(MemoryUsage_Canvas, {
                            type: 'pie',
                            data: MemoryUsage_Data,
                            options: MemoryUsage_Options
                        });

                        const SocketCount_Canvas = $('#SocketCount_Chart').get(0).getContext('2d');
                        const SocketCount_Data = {
                            labels: [
                                'Online Players',
                                'Max Players'
                            ],
                            datasets: [{
                                data: [0, <?= (int)$this->darkblowlib->GetServerMaxPlayers() ?>],
                                backgroundColor: ['#dc3545', '#198754'],
                            }]
                        };
                        const SocketCount_Options = {
                            maintainAspectRatio: false,
                            responsive: true,
                            legend: {
                                labels: {
                                    fontColor: "white"
                                }
                            }
                        };
                        const SocketCount = new Chart(SocketCount_Canvas, {
                            type: 'pie',
                            data: SocketCount_Data,
                            options: SocketCount_Options
                        });

                        function ServerUsageUpdateChart(server_usage_value) {
                            MemoryUsage.config.data.datasets[0].data[0] = server_usage_value != 0 ? server_usage_value : 0;
                            MemoryUsage.update();
                        }

                        function ServerTotalConnectedSocketUpdateChart(server_total_connected_socket_value) {
                            SocketCount.config.data.datasets[0].data[0] = server_total_connected_socket_value != 0 ? server_total_connected_socket_value : 0;
                            SocketCount.update();
                        }

                        function GetServerUsageAndTotalConnectedSocket() {
                            $.ajax({
                                url: '<?= base_url('api/server/sendcommand') ?>',
                                type: 'POST',
                                dataType: 'JSON',
                                data: {
                                    '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                    'opcode': '<?= Darkblowopcodes::GAME_SERVER_GET_MEMORY_USAGE[0] ?>',
                                    'secret_token': '<?= $this->darkblowsocketcommand->GenerateSecretToken() ?>',
                                    'secret_keys': '<?= $this->darkblowsocketcommand->GenerateSecretKeys() ?>',
                                    'command_type': '<?= Darkblowopcodes::GAME_SERVER_GET_MEMORY_USAGE[1] ?>',
                                },
                                success: (response) => {
                                    var GetString = JSON.stringify(response);
                                    var Result = JSON.parse(GetString);

                                    CSRF_TOKEN = Result.token;
                                    ServerUsageUpdateChart(Result.message);
                                },
                                error: () => {}
                            });

                            setTimeout(() => {
                                $.ajax({
                                    url: '<?= base_url('api/server/sendcommand') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'opcode': '<?= Darkblowopcodes::GAME_SERVER_GET_TOTAL_SOCKET_COUNT[0] ?>',
                                        'secret_token': '<?= $this->darkblowsocketcommand->GenerateSecretToken() ?>',
                                        'secret_keys': '<?= $this->darkblowsocketcommand->GenerateSecretKeys() ?>',
                                        'command_type': '<?= Darkblowopcodes::GAME_SERVER_GET_TOTAL_SOCKET_COUNT[1] ?>',
                                    },
                                    success: (response) => {
                                        var GetString = JSON.stringify(response);
                                        var Result = JSON.parse(GetString);

                                        CSRF_TOKEN = Result.token;
                                        ServerTotalConnectedSocketUpdateChart(Result.message);
                                        document.getElementById('total_players').innerHTML = Result.message;
                                    }
                                });
                            }, 1000);
                            setTimeout(() => {
                                GetServerUsageAndTotalConnectedSocket();
                            }, 5000);
                        }

                        $(document).ready(() => {
                            setTimeout(() => {
                                GetServerUsageAndTotalConnectedSocket();
                            }, 2000);
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-header text-center">
                    <i class="fas fa-users mr-2"></i>10 Last Registered Players
                </div>
                <div class="card-body">
                    <table class="table table-borderless table-responsive table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th width="5%">No.</th>
                            <th>Username</th>
                            <th width="20%">Email</th>
                            <th width="20%">IP Address</th>
                            <th width="25%">Date Registered</th>
                        </thead>
                        <tbody>
                            <?php
                            if ($last_players != null) {
                                $num = 1;
                                foreach ($last_players as $row) :
                            ?>
                                    <tr>
                                        <td><?= $num ?></td>
                                        <td><?= $row['login'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['lastip'] ?></td>
                                        <td><?= $row['date_registered'] ?></td>
                                    </tr>
                                <?php
                                    $num++;
                                endforeach;
                            } else {
                                ?>
                                <tr>
                                    <td colspan="5">No Data Found.</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-header text-center">
                    <i class="fas fa-coins mr-2"></i>10 Last Redeemed Code By Players
                </div>
                <div class="card-body">
                    <table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th width="5%">No.</th>
                            <th width="25%">Username</th>
                            <th>Code</th>
                            <th width="20%">Date Redeemed</th>
                            <th width="15%">Status</th>
                        </thead>
                        <tbody>
                            <?php
                            if ($last_redeem != null) {
                                $num = 1;
                                foreach ($last_redeem as $row) :
                            ?>
                                    <tr>
                                        <td><?= $num ?></td>
                                        <td><?= $row['username'] ?></td>
                                        <td><?= $row['item_code'] ?></td>
                                        <td><?= $row['date_redeemed'] ?></td>
                                        <td>Success</td>
                                    </tr>
                                <?php
                                    $num++;
                                endforeach;
                            } else {
                                ?>
                                <tr>
                                    <td colspan="5">No Data Found.</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>