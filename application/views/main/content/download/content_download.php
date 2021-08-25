<div class="nk-main">
    <div class="nk-gap-2"></div>
    <div class="container">
        <div class="row veritcal-gap">
            <div class="col-lg-12">
                <h3 class="nk-decorated-h-2"><span>Client <span class="text-main-1">Download</span></span></h3>
                <div class="nk-gap"></div>
                <div class="row vertical-gap justify-content-center">
                    <div class="col-lg-4 text-white">
                        <?php foreach ($client as $row ) : ?>
                            <div class="nk-feature-2">
                                <div class="nk-feature-icon">
                                    <img src="<?php echo base_url() ?>/assets/goodgames/assets/images/rar-images.png" style="max-width: 100px;" alt="rar icon">
                                </div>
                                <div class="nk-feature-cont text-center">
                                    <h3 class="nk-feature-title"><?php echo $row['file_name'] ?></h3>
                                    <p>Size : <?php echo $row['size'] ?><br></p>
                                    <a href="https://<?php echo $row['file_url'] ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary"><span class="fa fa-download"></span>&nbsp; Download</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-lg-4 text-white">
                        <?php foreach ($partial as $row) : ?>
                        <div class="nk-feature-2">
                            <div class="nk-feature-icon">
                                <img src="<?php echo base_url() ?>/assets/goodgames/assets/images/rar-images.png" style="max-width: 100px;" alt="rar icon">
                            </div>
                            <div class="nk-feature-cont text-center">
                                <h3 class="nk-feature-title"><?php echo $row['file_name'] ?></h3>
                                <p>Size : <?php echo $row['size'] ?><br></p>
                                <a href="https://<?php echo $row['file_url'] ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary"><span class="fa fa-download"></span>&nbsp; Download</a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-20">
            <h3 class="nk-decorated-h-2"><span>Launcher <span class="text-main-1">Download</span></span></h3>
            <div class="nk-gap"></div>
            <div class="row vertical-gap justify-content-center">
                <div class="col-lg-4 text-white">
                    <?php foreach ($launcher as $row) : ?>
                    <div class="nk-feature-2">
                        <div class="nk-feature-icon">
                            <img src="<?php echo base_url() ?>/assets/goodgames/assets/images/rar-images.png" style="max-width: 100px;" alt="rar icon">
                        </div>
                        <div class="nk-feature-cont text-center">
                            <h3 class="nk-feature-title"><?php echo $row['file_name'] ?></h3>
                            <p>Size : <?php echo $row['size'] ?><br></p>
                            <a href="https://<?php echo $row['file_url'] ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary"><span class="fa fa-download"></span>&nbsp; Download</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="row veritcal-gap">
            <div class="col-lg-12">
                <h3 class="nk-decorated-h-2"><span>Support App <span class="text-main-1">Download</span></span></h3>
                <div class="nk-gap"></div>
                <div class="row vertical-gap">
                    <?php foreach ($support as $row) : ?>
                    <div class="col-lg-4 text-white">
                        <div class="nk-feature-2">
                            <div class="nk-feature-icon">
                                <img src="<?php echo base_url() ?>/assets/goodgames/assets/images/rar-images.png" style="max-width: 100px;" alt="rar icon">
                            </div>
                            <div class="nk-feature-cont text-center">
                                <h3 class="nk-feature-title"><?php echo $row['file_name'] ?></h3>
                                <p>Size : <?php echo $row['size'] ?><br></p>
                                <a href="https://<?php echo $row['file_url'] ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary"><span class="fa fa-download"></span>&nbsp; Download</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
    </div>
</div>