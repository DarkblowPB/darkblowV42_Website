<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span class="text-main-1">Trade <span class="text-white">MARKET</span></span></h3>
        <div class="row vertical-gap">
            <?php if (!empty($_SESSION['uid'])) : ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card bg-dark-2">
                        <div class="card-body text-center">
                            <a href="<?php echo base_url('trade/addpost') ?>" class="nk-btn nk-btn-rounded nk-btn-sm nk-btn-outline nk-btn-color-main-5"><i class="fa fa-plus-circle mr-2"></i> Sell Your Items</a>
                            <a href="" class="nk-btn nk-btn-rounded nk-btn-sm nk-btn-outline nk-btn-color-main-1"><i class="fa fa-history mr-2"></i> History</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card bg-dark-2">
                    <div class="card-body text-center">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-10 mb-10">
                                    <div class="row justify-content-center">
                                        <?php
                                        if ($items != null)
                                        {
                                            foreach ($items as $row) :
                                            ?>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-6 text-center mt-15">
                                                    <div class="card bg-dark-1">
                                                        <div class="card-header text-center text-white" style="font-weight: bold; text-transform: uppercase;">
                                                            <?php echo $row['item_name'] ?>
                                                        </div>
                                                        <div class="card-body text-left">
                                                            <span>
                                                                Category : <span class="text-white" style="font-weight: bold;"><?php switch($row['item_category']){ case "1":{echo "Weapon";break;}case "2":{echo "Chara";break;}case "3":{echo "Item";break;} default:break;} ?></span><br>
                                                                Owner &nbsp;&nbsp;&nbsp;&nbsp;: <span class="text-white" style="font-weight: bold;"><?php echo $this->trade->GetPlayerName($row['item_owner']) ?></span><br>
                                                                Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="text-white" style="font-weight: bold;">&#8373; <?php echo number_format($row['item_price'], '0',',','.') ?></span><br>
                                                                <div class="text-center mt-25">
                                                                    <button type="button" onclick="Buy_Item('<?php echo $row['id'] ?>')" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-sm nk-btn-color-main-5">BUY</button>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php 
                                            endforeach;
                                        }
                                        else
                                        {
                                            ?>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                                No Trade Items Found.
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <script>
                                            function Buy_Item(id){
                                                var sessionUID = "<?php if (empty($_SESSION['uid'])){echo "0";}if (!empty($_SESSION['uid'])){echo $_SESSION['uid'];} ?>";
                                                if (sessionUID == "0")
                                                {
                                                    ShowToast(2000, 'warning', 'You Need To Login For Bought This Item.');
                                                    setTimeout(() => {
                                                        window.location = '<?php echo base_url('login') ?>';
                                                    }, 2500);
                                                }
                                                else
                                                {

                                                    $.ajax({
                                                        url: '<?php echo base_url('trade/do_buy') ?>',
                                                        type: 'POST',
                                                        data: {
                                                            '<?php echo $this->security->get_csrf_token_name() ?>' : '<?php echo $this->security->get_csrf_hash() ?>',
                                                            'trade_id' : id
                                                        },
                                                        success: function(data){
                                                            if (data == "true"){
                                                                ShowToast(2000, 'success', 'Successfully Bought This Item.');
                                                                setTimeout(() => {
                                                                    window.location = '<?php echo base_url('trade') ?>';
                                                                }, 2500);
                                                            }
                                                            else if (data == "true2"){
                                                                ShowToast(2000, 'success', 'Successfully Bought This Item.');
                                                                setTimeout(() => {
                                                                    window.location = '<?php echo base_url('trade') ?>';
                                                                }, 2500);
                                                            }
                                                            else if (data == "true2"){
                                                                ShowToast(2000, 'success', 'Successfully Bought This Item.');
                                                                setTimeout(() => {
                                                                    window.location = '<?php echo base_url('trade') ?>';
                                                                }, 2500);
                                                            }
                                                            else if (data == "false"){
                                                                ShowToast(2000, 'error', 'Failed To Bought This Item.');
                                                                setTimeout(() => {
                                                                    window.location = '<?php echo base_url('trade') ?>';
                                                                }, 2500);
                                                            }
                                                            else if (data == "false2"){
                                                                ShowToast(2000, 'error', 'Failed To Bought This Item.');
                                                                setTimeout(() => {
                                                                    window.location = '<?php echo base_url('trade') ?>';
                                                                }, 2500);
                                                            }
                                                            else if (data == "false3"){
                                                                ShowToast(2000, 'error', 'Failed To Bought This Item.');
                                                                setTimeout(() => {
                                                                    window.location = '<?php echo base_url('trade') ?>';
                                                                }, 2500);
                                                            }
                                                            else if (data == "false4"){
                                                                ShowToast(2000, 'error', 'Failed To Bought This Item.');
                                                                setTimeout(() => {
                                                                    window.location = '<?php echo base_url('trade') ?>';
                                                                }, 2500);
                                                            }
                                                            else if (data == "false5"){
                                                                ShowToast(2000, 'error', 'Failed To Bought This Item.');
                                                                setTimeout(() => {
                                                                    window.location = '<?php echo base_url('trade') ?>';
                                                                }, 2500);
                                                            }
                                                            else if (data == "false6"){
                                                                ShowToast(2000, 'error', 'Failed To Bought This Item.');
                                                                setTimeout(() => {
                                                                    window.location = '<?php echo base_url('trade') ?>';
                                                                }, 2500);
                                                            }
                                                            else if (data == "false7"){
                                                                ShowToast(2000, 'error', 'Failed To Bought This Item.');
                                                                setTimeout(() => {
                                                                    window.location = '<?php echo base_url('trade') ?>';
                                                                }, 2500);
                                                            }
                                                            else if (data == "false8"){
                                                                ShowToast(2000, 'error', 'You Need To Logged In For Bought This Item.');
                                                                setTimeout(() => {
                                                                    window.location = '<?php echo base_url('login') ?>';
                                                                }, 2500);
                                                            }
                                                            else if (data == "false9"){
                                                                ShowToast(2000, 'error', 'No Trade Item Found.');
                                                                setTimeout(() => {
                                                                    window.location = '<?php echo base_url('trade') ?>';
                                                                }, 2500);
                                                            }
                                                            else{
                                                                ShowToast(2000, 'error', data);
                                                                setTimeout(() => {
                                                                    window.location = '<?php echo base_url('trade') ?>';
                                                                }, 2500);
                                                            }
                                                        },
                                                        error: function(){
                                                            ShowToast(2000, 'error', 'Failed To Bought This Item.');
                                                            setTimeout(() => {
                                                                window.location = '<?php echo base_url('trade') ?>';
                                                            }, 2500);
                                                        }
                                                    });
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>