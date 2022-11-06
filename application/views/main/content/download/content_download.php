<div class="nk-main">
    <div class="nk-gap-2"></div>
    <div class="container">
        <div class="row veritcal-gap">
            <div class="col-lg-12">
                <h3 class="nk-decorated-h-2">
                    <span>
                        <?= $this->lang->line('STR_DARKBLOW_9') ?>
                        <span class="text-main-1"><?= $this->lang->line('STR_DARKBLOW_10') ?></span>
                    </span>
                </h3>
                <div class="nk-gap"></div>
                <div class="row vertical-gap justify-content-center">
                    <?php if ($this->download->GetClient() != null || $this->download->GetPartialClient() != null) : ?>
                        <div class="col-lg-4 text-white">
                            <?php $num = 1;
                            foreach ($this->download->GetClient() as $row) : ?>
                                <div id="data_<?= $num ?>" class="nk-feature-2">
                                    <div class="nk-feature-icon">
                                        <img src="<?= base_url() ?>/assets/goodgames/assets/images/rar-images.png" style="max-width: 100px;" alt="rar icon">
                                    </div>
                                    <div class="nk-feature-cont text-center">
                                        <h3 class="nk-feature-title"><?= $row['file_name'] ?></h3>
                                        <p>Size : <?= $row['file_size'] ?><br></p>
                                        <input type="button" id="button_single_link_<?= $num; ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary" value="Download" onclick="GetDownloadUrl('data_<?= $num ?>', 'button_single_link_<?= $num ?>', '<?= $row['id'] ?>')">
                                    </div>
                                </div>
                            <?php $num++;
                            endforeach; ?>
                        </div>
                        <div class="col-lg-4 text-white">
                            <?php $num = 1;
                            foreach ($this->download->GetPartialClient() as $row) : ?>
                                <div id="data_<?= $num ?>" class="nk-feature-2">
                                    <div class="nk-feature-icon">
                                        <img src="<?= base_url() ?>/assets/goodgames/assets/images/rar-images.png" style="max-width: 100px;" alt="rar icon">
                                    </div>
                                    <div class="nk-feature-cont text-center">
                                        <h3 class="nk-feature-title"><?= $row['file_name'] ?></h3>
                                        <p>Size : <?= $row['file_size'] ?><br></p>
                                        <input type="button" id="button_partial_link_<?= $num; ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary" value="Download" onclick="GetDownloadUrl('data_<?= $num ?>', 'button_partial_link_<?= $num ?>', '<?= $row['id'] ?>')">
                                    </div>
                                </div>
                            <?php $num++;
                            endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->download->GetClient() == null && $this->download->GetPartialClient() == null) : ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                            <?= $this->lang->line('STR_INFO_5') ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-12 mt-20">
                <h3 class="nk-decorated-h-2"><span>
                        <?= $this->lang->line('STR_DARKBLOW_11') ?> <span class="text-main-1">
                            <?= $this->lang->line('STR_DARKBLOW_10') ?>
                        </span>
                    </span></h3>
                <div class="nk-gap"></div>
                <div class="row vertical-gap justify-content-center">
                    <?php if ($this->download->GetLauncher() != null) : ?>
                        <div class="col-lg-4 text-white">
                            <?php $num = 1;
                            foreach ($this->download->GetLauncher() as $row) : ?>
                                <div id="data_<?= $num ?>" class="nk-feature-2">
                                    <div class="nk-feature-icon">
                                        <img src="<?= base_url() ?>/assets/goodgames/assets/images/rar-images.png" style="max-width: 100px;" alt="rar icon">
                                    </div>
                                    <div class="nk-feature-cont text-center">
                                        <h3 class="nk-feature-title"><?= $row['file_name'] ?></h3>
                                        <p>Size : <?= $row['file_size'] ?><br></p>
                                        <input type="button" id="button_launcher_<?= $num; ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary" value="Download" onclick="GetDownloadUrl('data_<?= $num ?>', 'button_launcher_<?= $num ?>', '<?= $row['id'] ?>')">
                                    </div>
                                </div>
                            <?php $num++;
                            endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->download->GetLauncher() == null) : ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                            <?= $this->lang->line('STR_INFO_6') ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="nk-gap-2"></div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="row veritcal-gap">
            <div class="col-lg-12">
                <h3 class="nk-decorated-h-2"><span>
                        <?= $this->lang->line('STR_DARKBLOW_12') ?> <span class="text-main-1">
                            <?= $this->lang->line('STR_DARKBLOW_10') ?>
                        </span>
                    </span></h3>
                <div class="nk-gap"></div>
                <div class="row vertical-gap">
                    <?php if ($this->download->GetSupportApp() != null) : ?>
                        <?php $num = 1;
                        foreach ($this->download->GetSupportApp() as $row) : ?>
                            <div class="col-lg-4 text-white">
                                <div id="data_<?= $num ?>" class="nk-feature-2">
                                    <div class="nk-feature-icon">
                                        <img src="<?= base_url() ?>/assets/goodgames/assets/images/rar-images.png" style="max-width: 100px;" alt="rar icon">
                                    </div>
                                    <div class="nk-feature-cont text-center">
                                        <h3 class="nk-feature-title"><?= $row['file_name'] ?></h3>
                                        <p>Size : <?= $row['file_size'] ?><br></p>
                                        <input type="button" id="button_support_app_<?= $num; ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary" value="<?= $this->lang->line('STR_DARKBLOW_10') ?>" onclick="GetDownloadUrl('data_<?= $num ?>', 'button_support_app_<?= $num ?>', '<?= $row['id'] ?>')">
                                    </div>
                                </div>
                            </div>
                        <?php $num++;
                        endforeach; ?>
                    <?php endif; ?>
                    <?php if ($this->download->GetSupportApp() == null) : ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                            <?= $this->lang->line('STR_INFO_7') ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <script>
            function GetDownloadUrl(data_id, button_id, package_id) {
                if (data_id == '' || data_id == null) {
                    ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_16') ?>');
                    return;
                } else if (button_id == '' || button_id == null) {
                    ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_16') ?>');
                    return;
                } else if (package_id == '' || package_id == null) {
                    ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_16') ?>');
                    return;
                } else {
                    SetAttribute(button_id, 'button', '<?= $this->lang->line('STR_INFO_8') ?>');

                    var Fixurl = "<?= base_url('download/do_download/') ?>" + package_id;

                    $.ajax({
                        url: Fixurl,
                        type: 'GET',
                        dataType: 'JSON',
                        data: {
                            'package_id': package_id
                        },
                        success: function(data) {
                            var GetString = JSON.stringify(data);
                            var Result = JSON.parse(GetString);

                            SetAttribute(button_id, 'button', '<?= $this->lang->line('STR_DARKBLOW_10') ?>');
                            ShowToast(2000, Result.response, Result.message);
                            if (Result.response != 'success') setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                            else setTimeout(() => {
                                window.open(Result.url, '_blank');
                            }, 2000);
                        },
                        error: function() {
                            SetAttribute(button_id, 'button', '<?= $this->lang->line('STR_DARKBLOW_10') ?>');
                            ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_17') ?>');
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