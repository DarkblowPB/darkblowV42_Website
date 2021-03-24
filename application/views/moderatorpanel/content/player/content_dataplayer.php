<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Data Players</h5>
            <div class="card-body">
                <?php
                if ($this->session->flashdata('Success'))
                {
                    echo '<div class="alert alert-success" role="alert">';
                    echo '<h4 class="alert-heading">Success</h4><p>';
                    echo $this->session->flashdata('Success');
                    echo '</p>';
                    echo '</div>';
                }
                if ($this->session->flashdata('Failed')) 
                {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo '<h4 class="alert-heading">Failed</h4><p>';
                    echo $this->session->flashdata('Failed');
                    echo '</p>';
                    echo '</div>';
                }
                ?>
                <?php
                if (isset($_POST['submit_unbanned'])) 
                {
                    $this->adminplayer->unbanned_player();
                }
                ?>
                <table id="table_id" class="table table-borderless table-hover table-responsive-lg text-center">
                    <thead>
                        <th width="5%">No.</th>
                        <th width="10%">Player ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th width="20%">Action</th>
                    </thead>
                    <tbody>
                        <?php
                        $num = 1;
                        foreach ($player as $row) 
                        {
                        ?>
                            <tr>
                                <td><?php echo $num ?></td>
                                <td><?php echo $row['player_id'] ?></td>
                                <td><?php echo $row['player_name'] ?></td>
                                <td>
                                    <?php
                                    if ($row['access_level'] >= 0 && $row['access_level'] < 7) 
                                    {
                                        echo '<span class="text-success">Active</span>';
                                    }
                                    else
                                    {
                                        echo '<span class="text-danger">Banned</span>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button id="action_btn" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action Menu
                                        </button>
                                        <div class="dropdown-menu text-white" aria-labelledby="action_btn">
                                            <a class="dropdown-item" href="<?php echo base_url('moderatorpanel/player/view') ?>?id=<?php echo $row['player_id'] ?>"><i class="fas fa-info-circle mr-2"></i>Details</a>
                                            <a class="dropdown-item" href="<?php echo base_url('moderatorpanel/player/inventory') ?>?id=<?php echo $row['player_id'] ?>"><i class="fas fa-briefcase mr-2"></i>Inventory</a>
                                            <?php 
                                            if ($row['access_level'] >= 0) 
                                            {
                                            ?>
                                                <a class="dropdown-item" href="<?php echo base_url('moderatorpanel/player/banned') ?>?id=<?php echo $row['player_id'] ?>"><i class="fas fa-toggle-off mr-2"></i>Ban</a>
                                            <?php
                                            }
                                            if ($row['access_level'] < 0) 
                                            {
                                            ?>
                                                <?php echo form_open(base_url('moderatorpanel/player'), 'class="form-horizontal"') ?>
                                                    <input type="hidden" name="player_id" value="<?php echo $row['player_id'] ?>">
                                                    <button type="submit" name="submit_unbanned" class="dropdown-item"><i class="fas fa-toggle-on mr-2"></i>Unban</button>
                                                <?php echo form_close() ?>
                                            <?php    
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        $num++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>