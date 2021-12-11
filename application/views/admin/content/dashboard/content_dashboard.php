<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-secondary">
                <span class="info-box-icon"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Players</span>
                    <span class="info-box-number"><?php echo $registeredplayers; ?></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-secondary">
                <span class="info-box-icon"><i class="fas fa-user-check"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Online Players</span>
                    <span class="info-box-number"><?php echo $onlineplayers ?></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-secondary">
                <span class="info-box-icon"><i class="fas fa-newspaper"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total News</span>
                    <span class="info-box-number"><?php echo $news ?></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-secondary">
                <span class="info-box-icon"><i class="fas fa-users-slash"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Blocked Players</span>
                    <span class="info-box-number"><?php echo $blockedplayers ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="card">
                <div class="card-header text-center">
                    <i class="fas fa-list mr-2"></i>Server Condition
                </div>
                <div class="card-body text-center">
                    <input type="text" class="knob" value="100" data-skin="tron" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" data-width="120" data-height="120" data-fgColor="#00c0ef" readonly>
                    <div class="knob-label text-bold"><?php echo $onlineplayers ?> / <?php echo $fullservers->max_players ?></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="card">
                <div class="card-header text-center">
                    <i class="fas fa-user-friends mr-2"></i>Total Site Visitors
                </div>
                <div class="card-body text-center">
                    <input type="text" class="knob" value="100" data-skin="tron" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" data-width="120" data-height="120" data-fgColor="#00c0ef" readonly>
                    <div class="knob-label text-bold">0</div>
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
                    <table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th width="5%">No.</th>
                            <th>Username</th>
                            <th width="20%">Email</th>
                            <th width="20%">IP Address</th>
                            <th width="25%">Date Registered</th>
                        </thead>
                        <tbody>
                            <?php
                            if ($last_players != null)
                            {
                                $num = 1;
                                foreach ($last_players as $row) :
                                    ?>
                                    <tr>
                                        <td><?php echo $num ?></td>
                                        <td><?php echo $row['login'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['lastip'] ?></td>
                                        <td><?php echo $row['date_registered'] ?></td>
                                    </tr>
                                    <?php
                                    $num++;
                                endforeach;
                            }
                            else
                            {
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
                            if ($last_redeem != null)
                            {
                                $num = 1;
                                foreach ($last_redeem as $row) :
                                    ?>
                                    <tr>
                                        <td><?php echo $num ?></td>
                                        <td><?php echo $row['username'] ?></td>
                                        <td><?php echo $row['item_code'] ?></td>
                                        <td><?php echo $row['date_redeemed'] ?></td>
                                        <td>Success</td>
                                    </tr>
                                    <?php
                                    $num++;
                                endforeach;
                            }
                            else
                            {
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