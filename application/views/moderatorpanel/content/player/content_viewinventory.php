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
            <?php
            foreach ($player as $row) 
            {                    
            ?>
                <h4 class="card-header"><?php echo $row['player_name'] ?> Inventory's</h4>
            <?php
            }
            ?>
            <div class="card-body">
                <table id="table_id" class="table table-responsive-lg table-borderless table-hover text-center">
                    <thead>
                        <th width="10%">Object ID</th>
                        <th width="5%">Item ID</th>
                        <th>Item Name</th>
                        <th width="5%">Count</th>
                        <th width="15%">Category</th>
                        <th width="15%">Equip</th>
                        <th width="15%">Action</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($inventory as $row)
                        {
                            include 'assets/include.php';
                            if (isset($_POST['submit_delete'])) 
                            {
                                $object_id = $_POST['object_id'];

                                $selectquery = $connec->prepare("SELECT * FROM player_items WHERE object_id = '".$object_id."'");
                                $selectquery->execute();
                                $hasil = $selectquery->fetch(PDO::FETCH_ASSOC);
                                if ($hasil) 
                                {
                                    $deletequery = 'DELETE FROM player_items '
                                    . 'WHERE object_id = :aa';
                                    $stmt = $connec->prepare($deletequery);
                                    $stmt->bindParam(':aa', $hasil['object_id'], PDO::PARAM_STR);
                                    $stmt->execute();

                                    $this->logger->logger_DeleteItemSuccess($row['owner_id'], $hasil['item_name']);
                                    $this->session->set_flashdata('Success', 'Item Successfully Deleted!');
                                    redirect($_SERVER['HTTP_REFERER'], 'refresh');
                                }
                                else
                                {
                                    $qq = $connec->prepare("SELECT * FROM player_items WHERE object_id = '".$object_id."'");
                                    $qq->execute();
                                    $res_qq = $qq->fetch(PDO::FETCH_ASSOC);
                                    if ($res_qq) 
                                    {
                                        $this->logger->logger_DeleteItemFailed($row['owner_id'], $res_qq['item_name']);
                                    }
                                    $this->session->set_flashdata('Failed', ''.$object_id.' Not Found');
                                    redirect($_SERVER['HTTP_REFERER'], 'refresh');
                                }
                            }
                            if (isset($_POST['submit_extend'])) 
                            {
                                $object_id = $_POST['object_id'];
                                $owner_id = $_POST['owner_id'];
                                $item_id = $_POST['item_id'];
                                $count = $_POST['count'];
                                $extend = $_POST['extend_duration'];
                                
                                $sql = $connec->prepare("SELECT * FROM player_items WHERE object_id = '".$object_id."'");
                                $sql->execute();
                                $result = $sql->fetch(PDO::FETCH_ASSOC);
                                if ($result) 
                                {
                                    $hasil_extend = $count + $extend;
                                    $sql_0 = 'UPDATE player_items '
                                    . 'SET count = :aa '
                                    . 'WHERE object_id = :bb';
                                    $stmt = $connec->prepare($sql_0);
                                    $stmt->bindParam(':aa', $hasil_extend, PDO::PARAM_STR);
                                    $stmt->bindParam(':bb', $object_id, PDO::PARAM_STR);
                                    $stmt->execute();
                                    if ($sql_0) 
                                    {
                                        $this->logger->logger_ExtendItemSuccess($result['owner_id'], $result['item_name']);
                                        $this->session->set_flashdata('Success', 'Extend Duration Obj : '.$result['object_id'].' Successfully!');
                                        redirect($_SERVER['HTTP_REFERER'], 'refresh');
                                    }
                                    else 
                                    {
                                        $this->logger->logger_ExtendItemFailed($result['owner_id'], $result['item_name']);
                                        $this->session->set_flashdata('Failed', 'Extend Weapon Failed!');
                                        redirect($_SERVER['HTTP_REFERER'], 'refresh');
                                    }
                                }
                            }
                        ?>
                            <tr>
                                <td><?php echo $row['object_id'] ?></td>
                                <td><?php echo $row['item_id'] ?></td>
                                <td>
                                    <?php
                                    include 'assets/include.php';
                                    $sql = $connec->prepare("SELECT item_name FROM shop WHERE item_id = '".$row['item_id']."'");
                                    $sql->execute();
                                    $result = $sql->fetch(PDO::FETCH_ASSOC);
                                    if ($result) 
                                    {
                                        echo $result['item_name'];
                                    }
                                    else 
                                    {
                                        echo "Null";                                        
                                    }
                                    ?>
                                </td>
                                <td><?php echo $row['count'] ?></td>
                                <td>
                                    <?php
                                    if ($row['category'] == 1) 
                                    {
                                        echo 'Main';
                                    }
                                    if ($row['category'] == 2) 
                                    {
                                        echo 'Chara & Head';
                                    }
                                    if ($row['category'] == 3) 
                                    {
                                        echo 'Item';
                                    }
                                    if ($row['category'] <= 0)
                                    {
                                        echo 'Invalid';
                                    }
                                    if($row['category'] > 3)
                                    {
                                        echo 'Invalid';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($row['equip'] == 1) 
                                    {
                                        echo 'Not Use / Unit Type';
                                    }
                                    if ($row['equip'] == 2) 
                                    {
                                        echo 'Used';
                                    }
                                    if ($row['equip'] == 3) 
                                    {
                                        echo 'Permanent';
                                    }
                                    if ($row['equip'] <= 0) 
                                    {
                                        echo 'Invalid';
                                    }
                                    if ($row['equip'] > 3) 
                                    {
                                        echo 'Invalid';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button id="action_btn" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action Menu
                                        </button>
                                        <div class="dropdown-menu text-white" aria-labelledby="action_btn">
                                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#<?php echo $row['object_id'] ?>"><i class="fas fa-plus mr-2"></i>Extends</button>
                                            <form action="" method="POST">
                                                <input type="hidden" name="object_id" value="<?php echo $row['object_id'] ?>">
                                                <input type="hidden" name="player_id" value="<?php echo $row['owner_id'] ?>">
                                                <button type="submit" name="submit_delete" class="dropdown-item"><i class="fas fa-trash mr-2"></i>Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="<?php echo $row['object_id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Extend Item Duration</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </a>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" method="POST" class="form-horizontal">
                                                        <div class="form-group">
                                                            <label>Object ID</label>
                                                            <input type="text" name="object_id" class="form-control" value="<?php echo $row['object_id'] ?>"  readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Owner ID</label>
                                                            <input type="text" name="owner_id" class="form-control" value="<?php echo $row['owner_id'] ?>"  readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Item ID</label>
                                                            <input type="text" name="item_id" class="form-control" value="<?php echo $row['item_id'] ?>"  readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Duration</label>
                                                            <input type="text" name="count" class="form-control" value="<?php echo $row['count'] ?>"  readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Extend Duration</label>
                                                            <select name="extend_duration" class="form-control text-center" required>
                                                                <option value="" selected disabled>Select Duration</option>
                                                                <?php
                                                                include 'assets/include.php';

                                                                $sync_type = $connec->prepare("SELECT * FROM shop WHERE item_id = '".$row['item_id']."'");
                                                                $sync_type->execute();
                                                                $sync_result = $sync_type->fetch(PDO::FETCH_ASSOC);
                                                                if ($sync_result['buy_type'] == 1 && $row['item_id'] <= 1105003032) 
                                                                {
                                                                ?>
                                                                    <option value="25">25 Unit</option>
                                                                    <option value="50">50 Unit</option>
                                                                    <option value="75">75 Unit</option>
                                                                    <option value="100">100 Unit</option>
                                                                <?php
                                                                }
                                                                if ($sync_result['buy_type'] == 1 && $row['item_id'] >= 1105003033) 
                                                                {
                                                                ?>
                                                                    <option value="3">3 Unit</option>
                                                                    <option value="5">5 Unit</option>
                                                                    <option value="7">7 Unit</option>
                                                                    <option value="10">10 Unit</option>
                                                                <?php
                                                                }
                                                                if ($sync_result['buy_type']  == 2 && $row['item_id'] <= 1105003032) 
                                                                {
                                                                ?>
                                                                    <option value="86400">1 Day</option>
                                                                    <option value="259200">3 Days</option>
                                                                    <option value="604800">7 Days</option>
                                                                    <option value="2592000">30 Days</option>
                                                                <?php
                                                                }
                                                                if ($sync_result['buy_type'] == 2 && $row['item_id'] >= 1105003033) 
                                                                {
                                                                ?>
                                                                    <option value="" selected disabled>Invalid Type Item</option>
                                                                <?php
                                                                }
                                                                if ($sync_result['buy_type'] <= 0) 
                                                                {
                                                                ?>
                                                                    <option value="" selected disabled>Invalid Type Item</option>
                                                                <?php
                                                                }
                                                                if ($sync_result['buy_type'] >= 3) 
                                                                {
                                                                ?>
                                                                    <option value="" selected disabled>Invalid Type Item</option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="reset" class="btn btn-outline-danger"><i class="fas fa-eraser mr-2"></i> Reset</button>
                                                            <button type="submit" name="submit_extend" class="btn btn-outline-primary"><i class="fas fa-paper-plane mr-2"></i>Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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