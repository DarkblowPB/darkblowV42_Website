<div class="nk-main">
    <div class="nk-gap-2"></div>
    <div class="container">
        <div class="row veritcal-gap">
            <div class="col-lg-12">
                <h3 class="nk-decorated-h-2"><span><?php echo $this->lang->line('STR_DARKBLOW_9') ?> <span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_10') ?></span></span></h3>
                <div class="nk-gap"></div>
                <div class="row vertical-gap justify-content-center">
                    <?php if ($client != null || $partial != null) : ?>
                        <div class="col-lg-4 text-white">
                            <?php $num = 1; foreach ($client as $row ) : ?>
                                <div id="data_<?php echo $num ?>" class="nk-feature-2">
                                    <div class="nk-feature-icon">
                                        <img src="<?php echo base_url() ?>/assets/goodgames/assets/images/rar-images.png" style="max-width: 100px;" alt="rar icon">
                                    </div>
                                    <div class="nk-feature-cont text-center">
                                        <h3 class="nk-feature-title"><?php echo $row['file_name'] ?></h3>
                                        <p>Size : <?php echo $row['size'] ?><br></p>
                                        <input type="button" id="button_<?php echo $num; ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary" value="Download" onclick="GetDownloadUrl('data_<?php echo $num ?>', 'button_<?php echo $num ?>', '<?php echo $row['id'] ?>')">
                                        <!-- <a href="https://<?php echo $row['file_url'] ?>" target="_blank" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary"><span class="fa fa-download"></span>&nbsp; Download</a> -->
                                    </div>
                                </div>
                            <?php $num++; endforeach; ?>
                        </div>
                        <div class="col-lg-4 text-white">
                            <?php $num = 1; foreach ($partial as $row) : ?>
                            <div id="data_<?php echo $num ?>" class="nk-feature-2">
                                <div class="nk-feature-icon">
                                    <img src="<?php echo base_url() ?>/assets/goodgames/assets/images/rar-images.png" style="max-width: 100px;" alt="rar icon">
                                </div>
                                <div class="nk-feature-cont text-center">
                                    <h3 class="nk-feature-title"><?php echo $row['file_name'] ?></h3>
                                    <p>Size : <?php echo $row['size'] ?><br></p>
                                        <input type="button" id="button_<?php echo $num; ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary" value="Download" onclick="GetDownloadUrl('data_<?php echo $num ?>', 'button_<?php echo $num ?>', '<?php echo $row['id'] ?>')">
                                    <!-- <a href="https://<?php echo $row['file_url'] ?>" target="_blank" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary"><span class="fa fa-download"></span>&nbsp; Download</a> -->
                                </div>
                            </div>
                            <?php $num++; endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($client == null && $partial == null) : ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center"><?php echo $this->lang->line('STR_INFO_5') ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-12 mt-20">
            <h3 class="nk-decorated-h-2"><span><?php echo $this->lang->line('STR_DARKBLOW_11') ?> <span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_10') ?></span></span></h3>
            <div class="nk-gap"></div>
            <div class="row vertical-gap justify-content-center">
                <?php if ($launcher != null) : ?>
                    <div class="col-lg-4 text-white">
                        <?php $num = 1; foreach ($launcher as $row) : ?>
                        <div id="data_<?php echo $num ?>" class="nk-feature-2">
                            <div class="nk-feature-icon">
                                <img src="<?php echo base_url() ?>/assets/goodgames/assets/images/rar-images.png" style="max-width: 100px;" alt="rar icon">
                            </div>
                            <div class="nk-feature-cont text-center">
                                <h3 class="nk-feature-title"><?php echo $row['file_name'] ?></h3>
                                <p>Size : <?php echo $row['size'] ?><br></p>
                                        <input type="button" id="button_<?php echo $num; ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary" value="Download" onclick="GetDownloadUrl('data_<?php echo $num ?>', 'button_<?php echo $num ?>', '<?php echo $row['id'] ?>')">
                                <!-- <a href="https://<?php echo $row['file_url'] ?>" target="_blank" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary"><span class="fa fa-download"></span>&nbsp; Download</a> -->
                            </div>
                        </div>
                        <?php $num++; endforeach; ?>
                    </div>
                <?php endif; ?>
                <?php if ($launcher == null) : ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center"><?php echo $this->lang->line('STR_INFO_6') ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="row veritcal-gap">
            <div class="col-lg-12">
                <h3 class="nk-decorated-h-2"><span><?php echo $this->lang->line('STR_DARKBLOW_12') ?> <span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_10') ?></span></span></h3>
                <div class="nk-gap"></div>
                <div class="row vertical-gap">
                    <?php if ($support != null) : ?>
                        <?php $num = 1; foreach ($support as $row) : ?>
                        <div class="col-lg-4 text-white">
                            <div id="data_<?php echo $num ?>" class="nk-feature-2">
                                <div class="nk-feature-icon">
                                    <img src="<?php echo base_url() ?>/assets/goodgames/assets/images/rar-images.png" style="max-width: 100px;" alt="rar icon">
                                </div>
                                <div class="nk-feature-cont text-center">
                                    <h3 class="nk-feature-title"><?php echo $row['file_name'] ?></h3>
                                    <p>Size : <?php echo $row['size'] ?><br></p>
                                        <input type="button" id="button_<?php echo $num; ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary" value="Download" onclick="GetDownloadUrl('data_<?php echo $num ?>', 'button_<?php echo $num ?>', '<?php echo $row['id'] ?>')">
                                    <!-- <a href="https://<?php echo $row['file_url'] ?>" target="_blank" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary"><span class="fa fa-download"></span>&nbsp; <?php echo $this->lang->line('STR_DARKBLOW_10') ?></a> -->
                                </div>
                            </div>
                        </div>
                        <?php $num++; endforeach; ?>
                    <?php endif; ?>
                    <?php if ($support == null) : ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center"><?php echo $this->lang->line('STR_INFO_7') ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <script>
            function GetDownloadUrl(data_id, button_id, package_id)
            {
                if (data_id == '' || data_id == null){
                    ShowToast(2000, 'warning', 'Invalid Download Data.');
                    return;
                }
                else if (button_id == '' || button_id == null){
                    ShowToast(2000, 'warning', 'Invalid Download Data.');
                    return;
                }
                else if (package_id == '' || package_id == null){
                    ShowToast(2000, 'warning', 'Invalid Download Data.');
                    return;
                }
                else{
                    SetAttribute(button_id, 'button', 'Processing...');

                    $.ajax({
                        url: '<?php echo base_url('download/do_download') ?>',
                        type: 'GET',
                        dataType: 'JSON',
                        data: {
                            'package_id' : package_id
                        },
                        success: function(data){
                            var GetString = JSON.stringify(data);
                            var Result = JSON.parse(GetString);

                            if (Result.response == 'true'){
                                SetAttribute(button_id, 'button', 'Download');
                                ShowToast(2000, 'info', Result.message);
                                setTimeout(() => {
                                    window.open(Result.url);
                                }, 2000);
                            }
                            else{
                                SetAttribute(button_id, 'button', 'Download');
                                ShowToast(2000, 'error', Result.message);
                                return;
                            }
                        },
                        error: function(){
                            SetAttribute(button_id, 'button', 'Download');
                            ShowToast(2000, 'error', 'Failed To Generate Download Link.');
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                        }
                    });
                }
            }
        </script>
        <div class="nk-gap-2"></div>
    </div>
</div>