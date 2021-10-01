<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_141') ?> <span class="text-white"><?php echo $this->lang->line('STR_DARKBLOW_142') ?></span></span></h3>
        <div class="row vertical-gap">
            <?php if (!empty($_SESSION['uid'])) : ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card bg-dark-2">
                        <div class="card-body text-center">
                            <a href="<?php echo base_url('trade/addpost') ?>" class="nk-btn nk-btn-rounded nk-btn-sm nk-btn-outline nk-btn-color-main-5"><i class="fa fa-plus-circle mr-2"></i> <?php echo $this->lang->line('STR_DARKBLOW_143') ?></a>
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
                                            $num = 1;
                                            foreach ($items as $row) :
                                            ?>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-6 text-center mt-15">
                                                    <div class="card bg-dark-1">
                                                        <div class="card-header text-center text-white" style="font-weight: bold; text-transform: uppercase;">
                                                            <?php echo $row['item_name'] ?>
                                                        </div>
                                                        <div class="card-body text-left">
                                                            <span>
                                                                <?php echo $this->lang->line('STR_DARKBLOW_68') ?> : <span class="text-white" style="font-weight: bold;"><?php switch($row['item_category']){ case "1":{echo "Weapon";break;}case "2":{echo "Chara";break;}case "3":{echo "Item";break;} default:break;} ?></span><br>
                                                                <?php echo $this->lang->line('STR_DARKBLOW_145') ?> &nbsp;&nbsp;&nbsp;&nbsp;: <span class="text-white" style="font-weight: bold;"><?php echo $this->trade->GetPlayerName($row['item_owner']) ?></span><br>
                                                                <?php echo $this->lang->line('STR_DARKBLOW_174') ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="text-white" style="font-weight: bold;">&#8373; <?php echo number_format($row['item_price'], '0',',','.') ?></span><br>
                                                                <div class="text-center mt-25">
                                                                    <input type="button" id="submit_<?php echo $num ?>" onclick="Buy_Item('submit_<?php echo $num ?>', '<?php echo $row['id'] ?>')" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-sm nk-btn-color-main-5" value="BUY">
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                $num++;
                                            endforeach;
                                        }
                                        else
                                        {
                                            ?>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                                <?php echo $this->lang->line('STR_INFO_3') ?>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <script>
                                            var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                                            var sessionUID = "<?php if (empty($_SESSION['uid'])){echo "0";}if (!empty($_SESSION['uid'])){echo $_SESSION['uid'];} ?>";
                                            function Buy_Item(button_id, id){
                                                if (sessionUID == '0')
                                                {
                                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_15') ?>');
                                                    setTimeout(() => {
                                                        window.location = '<?php echo base_url('login') ?>';
                                                    }, 2500);
                                                }
                                                else
                                                {
                                                    SetAttribute(button_id, 'button', 'Processing...');
                                                    $.ajax({
                                                        url: '<?php echo base_url('trade/do_buy') ?>',
                                                        type: 'POST',
                                                        dataType: 'JSON',
                                                        data: {
                                                            '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                                            'trade_id' : id
                                                        },
                                                        success: function(data){
                                                            var GetString = JSON.stringify(data);
                                                            var Result = JSON.parse(GetString);

                                                            if (Result.response == 'true'){
                                                                SetAttribute(button_id, 'button', 'BUY');
                                                                ShowToast(2000, 'success', Result.message);
                                                                CSRF_TOKEN = Result.token;
                                                                return;
                                                            }
                                                            else if (Result.response == 'false'){
                                                                SetAttribute(button_id, 'button', 'BUY');
                                                                ShowToast(2000, 'error', Result.message);
                                                                CSRF_TOKEN = Result.token;
                                                                return;
                                                            }
                                                            else{
                                                                SetAttribute(button_id, 'button', 'BUY');
                                                                ShowToast(2000, 'error', Result.message);
                                                                CSRF_TOKEN = Result.token;
                                                                return;
                                                            }
                                                        },
                                                        error: function(){
                                                            ShowToast(2000, 'error', '<?php echo $this->lang->line('STR_ERROR_15') ?>');
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