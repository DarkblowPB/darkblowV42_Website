<div class="row justify-content-center">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Extend Weapon Duration</h3>
            </div>
            <div class="card-body">
                <?php echo form_open(base_url('moderatorpanel/player/extenditem?object_id='.$_GET['object_id'].'&owner_id='.$_GET['owner_id']), 'class="form-horizontal"') ?>
                    <div class="form-group row">
                        <label class="col-3">Owner Item</label>
                        <?php
                        // Function To Get Owner Name
                        $a = $this->db->get_where('accounts', array('player_id' => $item->owner_id))->row();
                        ?>
                        <input type="text" class="form-control col-9" value="<?php echo $a->player_name ?>" disabled readonly>
                    </div>
                    <div class="form-group row">
                        <label class="col-3">Remaining Duration</label>
                        <?php
                        $count = $item->count / 24 / 60 / 60;
                        if ($count == 1)
                        {
                            $count = "1 Day";
                        }
                        if ($count > 1)
                        {
                            $count = $count." Days";
                        }
                        ?>
                        <input type="text" class="form-control col-9" value="<?php echo $count ?>" disabled readonly>
                    </div>
                    <div class="form-group row">
                        <label class="col-3">Select Duration</label>
                        <select name="duration_value" class="form-control col-9" value="<?php echo set_value('duration_value') ?>" required>
                            <option value="" disabled selected>Select Duration</option>
                            <option value="86400">1 Day</option>
                            <option value="259200">3 Days</option>
                            <option value="604800">7 Days</option>
                            <option value="2592000">30 Days</option>
                        </select>
                    </div>
                    <div class="form-group text-center">
                        <button type="reset" class="btn btn-outline-danger"><i class="fa fa-undo mr-2"></i>Reset</button>
                        <button type="reset" class="btn btn-outline-primary"><i class="fa fa-paper-plane mr-2"></i>Submit</button>
                    </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>