<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="allplayers_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary text-uppercase">
                            <th width="5%">No.</th>
                            <th width="10%">Username</th>
                            <th width="5%">Rank</th>
                            <th>Nickname</th>
                            <th width="15%">Last IP</th>
                            <th width="15%">Last MAC</th>
                            <th width="15%">Action</th>
                        </thead>
                        <tbody>
                            <?php $num = 1; foreach ($players as $row) : ?>
                                <tr>
                                    <td><?php echo $num ?></td>
                                    <td><?php echo $row['login'] ?></td>
                                    <td><img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_rank/<?php echo $row['rank'] ?>.gif" class="img img-fluid" alt="<?php echo $row['rank'] ?>"></td>
                                    <td><?php echo $row['player_name'] ?></td>
                                    <td><?php echo $row['lastip'] ?></td>
                                    <td><?php echo $row['last_mac'] ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle text-uppercase" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Menu
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#"><i class="fas fa-list mr-2"></i>Details</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-briefcase mr-2"></i>Inventory</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa- mr-2"></i>Banned</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php $num++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>