<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <h5 class="card-header">Redeem Code Item Form</h5>
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
                <form action="<?php echo base_url('moderatorpanel/redeemcode/redeemcode_item') ?>" method="POST" class="form-horizontal">
                    <div class="form-group row">
                        <div class="col-sm-3 text-right">
                            <label class="col-form-label">List Item</label>
                        </div>
                        <div class="col-sm-9">
                            <select name="item_id" class="form-control" value="<?php echo set_value('item_id') ?>">
                                <option value="" selected disabled>Select Item</option>
                                <?php
                                foreach ($itemname as $row) 
                                {
                                ?>
                                    <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3 text-right">
                            <label class="col-form-label">Item Duration</label>
                        </div>
                        <div class="col-sm-9">
                            <select name="item_count" class="form-control" value="<?php echo set_value('item_count') ?>">
                                <option value="" selected disabled>Select Item Duration</option>
                                <option value="" disabled># Main, Chara & Head (Type : Days)</option>
                                <option value="86400">1 Day</option>
                                <option value="259200">3 Days</option>
                                <option value="604800">7 Days</option>
                                <option value="2592000">30 Days</option>
                                <option value="" disabled></option>
                                <option value="" disabled># Main, Chara & Head (Type : Units)</option>
                                <option value="25">25 Units</option>
                                <option value="50">50 Units</option>
                                <option value="75">75 Units</option>
                                <option value="100">100 Units</option>
                                <option value="" disabled></option>
                                <option value="" disabled># Box & Items</option>
                                <option value="1">1 Unit</option>
                                <option value="3">3 Units</option>
                                <option value="5">5 Units</option>
                                <option value="7">7 Units</option>
                                <option value="10">10 Units</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3 text-right">
                            <label class="col-form-label">Item Alert</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="item_alert" class="form-control" value="<?php echo set_value('item_alert') ?>" minlength="20" max="255" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3 text-right">
                            <label class="col-form-label">Code</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="item_code" class="form-control" placeholder="Ex. AAAA-BBBB-CCCC-DDDD" value="<?php echo set_value('item_code') ?>" minlength="19" max="19" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3 text-right">
                            <label class="col-form-label">Item Category</label>
                        </div>
                        <div class="col-sm-9">
                            <select name="category" class="form-control" value="<?php echo set_value('category') ?>">
                                <option value="" selected disabled>Select Item Category</option>
                                <option value="1">Main</option>
                                <option value="2">Chara & Head</option>
                                <option value="3">Box & Items</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12 text-center">
                            <button type="reset" class="btn btn-outline-danger"><i class="fas fa-eraser mr-2"></i>Reset</button>
                            <button type="submit" class="btn btn-outline-primary"><i class="fas fa-paper-plane mr-2"></i>Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>