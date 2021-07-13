<div class="row">
    <div class="col-lg-12">
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
        <div class="card">
            <h4 class="card-header"><?php echo $player->player_name ?> Inventory's</h4>
            <div class="card-body">
                <table id="table_id" class="table table-responsive-lg table-borderless table-hover text-center">
                    <thead>
                        <th width="15%">Object ID</th>
                        <th width="5%">Item ID</th>
                        <th>Item Name</th>
                        <th width="5%">Count</th>
                        <th width="20%">Category</th>
                        <th width="15%">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($inventory as $row) : ?>
                            <tr>
                                <td><?php echo $row['object_id'] ?></td>
                                <td><?php echo $row['item_id'] ?></td>
                                <td><?php echo $row['item_name'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-outline-primary">??</button>
                                </td>
                                <td>
                                    <?php
                                    switch ($row['category'])
                                    {
                                        case "1":
                                        {
                                            echo "Weapon";
                                            break;
                                        }
                                        case "2":
                                        {
                                            echo "Character / Headgear";
                                            break;
                                        }
                                        case "3":
                                        {
                                            echo "Item";
                                            break;
                                        }
                                        default:
                                        {
                                            echo "Invalid";
                                            break;
                                        }
                                    }
                                    ?>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropdown button
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="<?php echo base_url('moderatorpanel/player/extenditem?object_id='.$row['object_id'].'&owner_id='.$row['owner_id']) ?>"><i class="fa fa-plus-circle mr-2"></i>Extend Duration</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash mr-2"></i>Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>