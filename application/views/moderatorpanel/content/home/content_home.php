                    <div class="row">        
                        <?php
                        if ($this->session->flashdata('success')) 
                        {
                            echo '<div class="col-lg-12">';
                            echo '<div class="card">';
                            echo '<div class="card-body">';
                            echo '<div class="alert alert-success text-center mt-2" role="alert">';
                            echo $this->session->flashdata('error');
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        if ($this->session->flashdata('error'))
                        {
                            echo '<div class="col-lg-12">';
                            echo '<div class="card">';
                            echo '<div class="card-body">';
                            echo '<div class="alert alert-danger text-center mt-2" role="alert">';
                            echo $this->session->flashdata('error');
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                        <div class="col-lg-3">
                            <div class="card border-3 border-top border-top-primary">
                                <div class="card-body">
                                    <h5 class="text-muted">Registered Players</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1"><i class="fas fa-users mr-2"></i><?php echo $playerall ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card border-3 border-top border-top-primary">
                                <div class="card-body">
                                    <h5 class="text-muted">Players Online</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1"><i class="fas fa-user mr-2"></i><?php echo $playeronline ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card border-3 border-top border-top-primary">
                                <div class="card-body">
                                    <h5 class="text-muted">Report</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1"><i class="fas fa-bug mr-2"></i><?php echo $report ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card border-3 border-top border-top-primary">
                                <div class="card-body mb-1">
                                    <h5 class="text-muted">Server Statistic</h5>
                                    <?php
                                    include 'assets/include.php';
                                    $sql = $connec->prepare("SELECT * FROM info_gameservers");
                                    $sql->execute();
                                    $result = $sql->fetch(PDO::FETCH_ASSOC);
                                    $abc = $playeronline * $result['max_players'] / 10000;
                                    ?>
                                    <div class="progress progress-xl mt-3 mb-0">
                                        <div class="progress-bar" role="progressbar" style="color:black; width: <?php echo $abc ?>%;" aria-valuenow="<?php echo $playeronline ?>" aria-valuemin="0" aria-valuemax="<?php echo $result['max_players'] ?>"> <?php echo $abc ?> %</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <h5 class="card-header">Game Master Accounts</h5>
                                <div class="card-body">
                                    <table class="table table-responsive-lg table-borderless table-hover">
                                        <thead class="text-center">
                                            <th>ID</th>
                                            <th>Rank</th>
                                            <th>Name</th>
                                            <th>Access Level</th>
                                            <th>Status</th>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                                            foreach ($gm as $row) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $row['player_id'] ?></td>
                                                    <td>
                                                        <img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_rank/<?php echo $row['rank'] ?>.gif" alt="<?php echo $row['rank'] ?>">
                                                    </td>
                                                    <td><?php echo $row['player_name'] ?></td>
                                                    <td>
                                                        <?php
                                                        if ($row['access_level'] == 3) 
                                                        {
                                                            echo '<button type="button" class="btn btn-outline-dark">Moderator</button>';
                                                        }
                                                        else if ($row['access_level'] == 4)
                                                        {
                                                            echo '<button type="button" class="btn btn-outline-danger">Game Master</button>';
                                                        }
                                                        else if ($row['access_level'] == 5)
                                                        {
                                                            echo '<button type="button" class="btn btn-outline-primary">Administrator</button>';
                                                        }
                                                        else if ($row['access_level'] == 6)
                                                        {
                                                            echo '<button type="button" class="btn btn-outline-warning">Developer</button>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($row['online'] == "t") 
                                                        {
                                                            echo '<span class="badge-dot badge-success"></span> Online';
                                                        }
                                                        else 
                                                        {
                                                            echo '<span class="badge-dot badge-danger"></span> Offline';
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <h5 class="card-header">Latest Registered Accounts</h5>
                                <div class="card-body">
                                    <table class="table table-borderless table-hover">
                                        <thead class="text-center">
                                            <th>ID</th>
                                            <th>Rank</th>
                                            <th>Player Name</th>
                                            <th>Status</th>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                                            foreach ($lastregistered as $row) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $row['player_id'] ?></td>
                                                    <td>
                                                        <img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_rank/<?php echo $row['rank'] ?>.gif" alt="<?php echo $row['rank'] ?>">
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($row['player_name'] == "") 
                                                        {
                                                            echo 'NULL';
                                                        }
                                                        else 
                                                        {
                                                            echo $row['player_name'];
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($row['online'] == "t") 
                                                        {
                                                            echo '<span class="badge-dot badge-success"></span> Online';
                                                        }
                                                        else 
                                                        {
                                                            echo '<span class="badge-dot badge-danger"></span> Offline';
                                                        }
                                                        ?>
                                                    </td>
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
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card">
                                    <h5 class="card-header">Latest Report</h5>
                                <div class="card-body">
                                    <table class="table table-responsive-lg table-borderless table-hover text-center">
                                        <thead>
                                            <th width="5%">No.</th>
                                            <th>Title</th>
                                            <th width="10%">Category</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Contoh Judul</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-primary"><i class="fas fa-tag mr-2"></i>Contoh</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <h5 class="card-header">History</h5>
                                <div class="card-body">
                                    <table class="table table-responsive-lg table-hover table-borderless text-center">
                                        <tbody>
                                            <?php
                                            foreach ($history as $row)
                                            {
                                            ?>
                                                <tr>
                                                    <td width="25%">IP : <?php echo $row['ip_address'] ?></td>
                                                    <td><?php echo $row['description'] ?></td>
                                                    <td width="35%"><?php echo $row['date'] ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                            <tr>
                                                <td colspan="4" class="text-center">
                                                    <a href="<?php echo base_url('moderatorpanel/log') ?>" class="btn btn-outline-primary btn-small"><i class="fas fa-list-alt mr-2"></i>Lihat Semua Log</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>