<div class="nk-main">
    <div class="nk-gap-2"></div>
    <div class="container">
        <!-- START: Image Slider -->
        <div class="nk-image-slider" data-autoplay="8000">
            <?php foreach ($quickslide as $row) : ?>
            <div class="nk-image-slider-item">
                <img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_slider/<?php echo $row['quickslide_img'] ?>" alt="<?php echo $row['quickslide_title'] ?> Images" class="nk-image-slider-img">
                <div class="nk-image-slider-content">
                    <h3 class="h4"><?php echo $row['quickslide_title'] ?></h3>
                    <p class="text-white"><?php echo $row['quickslide_description'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- END: Image Slider -->
        <!-- START: Categories -->
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-4">
                <div class="nk-feature-2">
                    <div class="nk-feature-icon">
                        <div class="nk-count h2 mb-0"><?php echo $allaccount ?></div>
                    </div>
                    <div class="nk-feature-cont text-center">
                        <h3 class="nk-feature-title">Registered Players</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="nk-feature-2">
                    <div class="nk-feature-icon">
                        <div id="server_status" class=""></div>
                    </div>
                    <div class="nk-feature-cont text-center">
                        <h3 class="nk-feature-title">SERVER STATUS</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="nk-feature-2">
                    <div class="nk-feature-icon">
                        <div class="nk-count h2 mb-0"><?php echo $onlineaccount ?></div>
                    </div>
                    <div class="nk-feature-cont text-center">
                        <h3 class="nk-feature-title">Online Players</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <!-- END: Categories -->

        <!-- START: Latest News -->
        <div class="nk-gap-2"></div>
        <div class="row veritcal-gap">
            <div class="col-lg-12 col-12">
                <h3 class="nk-decorated-h-2"><span>Minimum <span class="text-main-1">Requirements</span></span></h3>
                <div class="nk-gap"></div>
                <div class="row vertical-gap ">
                    <div class="col-lg-6 col-12 text-white">
                        <div class="nk-box-2 bg-dark-2 text-center" style="border-radius: 10px;">
                            <h4 style="background-color:rgba(221, 22, 59, 0.8); border-radius: 10px;">Minimum Requirements</h4>
                            OS : Windows System NT/2000/XP/7;<br>
                            CPU : Pentium 4 2.4 GHz / Athlon XP 2500+;<br>
                            Memory : 1GB RAM;<br>
                            Hard Disk Space : 10 GB;<br>
                            Video : GeForce FX 5700 / Radeon 9600;<br>
                            Sound : DirectX Compatible;<br>
                            DirectX &circledR; : DirectX &circledR;;<br>
                            Internet : Broadband;
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 text-white">
                        <div class="nk-box-2 bg-dark-2 text-center" style="border-radius: 10px;">
                            <h4 style="background-color:rgba(221, 22, 59, 0.8); border-radius: 10px;">Recommended Requirements</h4>
                            OS : Windows 8/8.1/10;<br>
                            CPU : Pentium 4 4.30 GHz / Athlon XP 3000+;<br>
                            Memory : 4GB RAM;<br>
                            Hard Disk Space : 25 GB;<br>
                            Video : GeForce 6600 / Radeon X600;<br>
                            Sound : DirectX Compatible;<br>
                            DirectX &circledR; : DirectX &circledR;;<br>
                            Internet : Broadband;
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-12 col-12">
                <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Top #5</span> Players & Clans</span></h3>
                <div class="nk-gap"></div>
                <div class="row vertical-gap text-white">
                    <div class="col-lg-6 col-12">
                        <table class="nk-table table-responsive-lg table-responsive-md table-responsive-sm text-center" style="border-radius: 10px;">
                            <thead style="font-style: italic;">
                                <th width="10%">Rank</th>
                                <th width="5%">Patent</th>
                                <th>Player Name</th>
                                <th width="22%">Total Exp</th>
                            </thead>
                            <tbody>
                                <?php
                                if ($account != null)
                                {
                                    $num = 1;
                                    foreach ($account as $row) :
                                        ?>
                                        <tr>
                                            <td><strong><span><?php echo $num ?></span></strong></td>
                                            <td><img src="<?php echo base_url() ?>/assets/goodgames/assets/images/img_rank/<?php echo $row['rank'] ?>.gif" alt=""></td>
                                            <td><?php echo $row['player_name'] ?></td>
                                            <td><strong><?php echo number_format($row['exp'], '0',',','.') ?></strong></td>
                                        </tr>
                                        <?php
                                        $num++;
                                    endforeach;
                                }
                                else
                                {
                                    ?>
                                    <tr>
                                        <td colspan="4">No Data Found</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6 col-12">
                        <table class="nk-table table-responsive-lg table-responsive-md table-responsive-sm text-center" style="border-radius: 10px;">
                            <thead style="font-style: italic;">
                                <th width="10%">Rank</th>
                                <th width="5%">Patent</th>
                                <th>Clan Name</th>
                                <th width="24%">Total Exp</th>
                            </thead>
                            <tbody>
                                <?php
                                if ($clan != null)
                                {
                                    $num = 1;
                                    foreach ($clan as $row) :
                                        ?>
                                        <tr>
                                            <td><strong><?php echo $num ?></strong></td>
                                            <td><img src="<?php echo base_url() ?>/assets/goodgames/assets/images/img_clan/<?php echo $row['clan_rank'] ?>.jpg" alt=""></td>
                                            <td><?php echo $row['clan_name'] ?></td>
                                            <td><strong><?php echo number_format($row['clan_exp'], '0',',','.') ?></strong></td>
                                        </tr>
                                        <?php
                                        $num++;
                                    endforeach;
                                }
                                else
                                {
                                    ?>
                                    <tr>
                                        <td colspan="4">No Data Found</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-12 text-center">
                        <a href="<?php echo base_url('player_rank') ?>" class="nk-btn nk-btn-x2 nk-btn-rounded nk-btn-outline nk-btn-color-primary">View All Ranks</a>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($this->getsettings->Get2()->webshop == 1) : ?>
            <?php if ($webshop != null) : ?>
                <div class="nk-gap-3"></div>
                <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Best</span> Selling Items</span></h3>
                <div class="nk-gap"></div>
                <div class="nk-carousel nk-carousel-x4" data-autoplay="3000" data-dots="false" data-cell-align="left" data-arrows="true">
                    <div class="nk-carousel-inner">
                        <?php foreach ($webshop as $row) :?>
                            <div>
                                <div class="pl-5 pr-5">
                                    <div class="nk-product-cat-3">
                                        <a class="nk-product-image" href="<?php echo base_url('webshop/details/'.$row['id']) ?>">
                                            <img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_webshop/<?php echo $row['webshop_itemimg'] ?>" alt="<?php echo $row['webshop_itemname'] ?>">
                                        </a>
                                        <div class="nk-product-cont">
                                            <div class="nk-gap-1"></div>
                                            <h3 class="nk-product-title h5"><a href="<?php echo base_url('webshop/details/'.$row['id']) ?>"><?php echo $row['webshop_itemname'] ?></a></h3>
                                            <div class="nk-gap-1"></div>
                                            <div class="nk-product-price"><?php echo $row['webshop_itemprice_30days'] ?>&#8373;</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="nk-gap-3"></div>
                <div class="container">
                    <div class="row vertical-gap justify-content-center">
                        <a href="javascript:void(0)" onclick="return alert('This Feature Not Available At This Moment.')" class="nk-btn nk-btn-x2 nk-btn-rounded nk-btn-outline nk-btn-color-main-5">View All</a>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Discord</span> Server</span></h3>
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-12">
                <iframe src="https://discord.com/widget?id=713091347711524955&theme=dark" width="100%" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
            </div>
        </div>
    </div>
</div>
<script>
    var Q = document.getElementById('server_status');
    function GetCondition()
    {
        $(document).ready(function(){
            $.ajax({
                url : '<?php echo base_url('home/do_fetch') ?>',
                type: 'GET',
                dataType: 'JSON',
                data: {},
                success: function(data){
                    var GetString = JSON.stringify(data);
                    var Result = JSON.parse(GetString);
    
                    if (Result.response == 'true'){
                        if (Result.message == 'OFFLINE'){
                            CSRF_TOKEN = Result.token;
                            Q.setAttribute('class', 'h2 mb-0 text-main-1');
                            SetText('OFFLINE');
                            RefreshFetch();
                        }
                        else if (Result.message == 'ONLINE'){
                            CSRF_TOKEN = Result.token;
                            Q.setAttribute('class', 'h2 mb-0 text-main-3');
                            SetText('ONLINE');
                            RefreshFetch();
                        }
                        else{
                            CSRF_TOKEN = Result.token;
                            Q.setAttribute('class', 'h2 mb-0 text-main-1');
                            SetText('OFFLINE');
                            RefreshFetch();
                        }
                    }
                },
                error: function(){
                    Q.setAttribute('class', 'h2 mb-0 text-main-1');
                    SetText('OFFLINE');
                    RefreshFetch();
                }
            });
        });
    }

    function SetText(text)
    {
        $('#server_status').html('');

        $('#server_status').html(text);
    }

    function RefreshFetch()
    {
        setTimeout(() => {
            GetCondition();
        }, 5000);
    }

    GetCondition();
</script>