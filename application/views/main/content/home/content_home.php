<div class="nk-main">
    <div class="nk-gap-2"></div>
    <div class="container">
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
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-4">
                <div id="registered_players_card" class="nk-feature-2 ld-over-inverse running">
                    <div class="ld ld-ring ld-spin"></div>
                    <div class="nk-feature-icon">
                        <div id="registered_players" class=""></div>
                    </div>
                    <div class="nk-feature-cont text-center">
                        <h3 class="nk-feature-title"><?php echo $this->lang->line('STR_DARKBLOW_25') ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div id="server_status_card" class="nk-feature-2 ld-over-inverse running">
                    <div class="ld ld-ring ld-spin"></div>
                    <div class="nk-feature-icon">
                        <div id="server_status" class=""></div>
                    </div>
                    <div class="nk-feature-cont text-center">
                        <h3 class="nk-feature-title"><?php echo $this->lang->line('STR_DARKBLOW_26') ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div id="online_players_card" class="nk-feature-2 ld-over-inverse running">
                    <div class="ld ld-ring ld-spin"></div>
                    <div class="nk-feature-icon">
                        <div id="online_players" class=""></div>
                    </div>
                    <div class="nk-feature-cont text-center">
                        <h3 class="nk-feature-title"><?php echo $this->lang->line('STR_DARKBLOW_27') ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="nk-gap-2"></div>
        <div class="row veritcal-gap">
            <div class="col-lg-12 col-12">
                <h3 class="nk-decorated-h-2"><span><?php echo $this->lang->line('STR_DARKBLOW_28') ?> <span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_29') ?></span></span></h3>
                <div class="nk-gap"></div>
                <div class="row vertical-gap ">
                    <div class="col-lg-6 col-12 text-white">
                        <div class="nk-box-2 bg-dark-2 text-center" style="border-radius: 10px;">
                            <h4 style="background-color:rgba(221, 22, 59, 0.8); border-radius: 10px;"><?php echo $this->lang->line('STR_DARKBLOW_28') ?> <?php echo $this->lang->line('STR_DARKBLOW_29') ?></h4>
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
                            <h4 style="background-color:rgba(221, 22, 59, 0.8); border-radius: 10px;"><?php echo $this->lang->line('STR_DARKBLOW_30') ?> <?php echo $this->lang->line('STR_DARKBLOW_29') ?></h4>
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
                <h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_177') ?></span> <?php echo $this->lang->line('STR_DARKBLOW_178') ?></span></h3>
                <div class="nk-gap"></div>
                <div class="row vertical-gap text-white">
                    <div class="col-lg-6 col-12">
                        
                        <table class="nk-table table-responsive-lg table-responsive-md table-responsive-sm text-center" style="border-radius: 10px;">
                            <thead style="font-style: italic;">
                                <th width="10%"><?php echo $this->lang->line('STR_DARKBLOW_3') ?></th>
                                <th width="5%"><?php echo $this->lang->line('STR_DARKBLOW_31') ?></th>
                                <th><?php echo $this->lang->line('STR_DARKBLOW_32') ?></th>
                                <th width="23%"><?php echo $this->lang->line('STR_DARKBLOW_33') ?></th>
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
                                        <td colspan="4"><?php echo $this->lang->line('STR_INFO_4') ?></td>
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
                                <th width="10%"><?php echo $this->lang->line('STR_DARKBLOW_3') ?></th>
                                <th width="5%"><?php echo $this->lang->line('STR_DARKBLOW_31') ?></th>
                                <th><?php echo $this->lang->line('STR_DARKBLOW_5') ?></th>
                                <th width="24%"><?php echo $this->lang->line('STR_DARKBLOW_33') ?></th>
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
                                        <td colspan="4"><?php echo $this->lang->line('STR_INFO_4') ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-12 text-center">
                        <a href="<?php echo base_url('player_rank') ?>" class="nk-btn nk-btn-x2 nk-btn-rounded nk-btn-outline nk-btn-color-primary"><?php echo $this->lang->line('STR_DARKBLOW_34') ?></a>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($this->getsettings->Get2()->webshop == 1) : ?>
            <?php if ($webshop != null) : ?>
                <div class="nk-gap-3"></div>
                <h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_35') ?></span> <?php echo $this->lang->line('STR_DARKBLOW_36') ?></span></h3>
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
            <?php endif; ?>
        <?php endif; ?>
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_37') ?></span> <?php echo $this->lang->line('STR_DARKBLOW_159') ?></span></h3>
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
    var QQ = document.getElementById('online_players');
    var QQQ = document.getElementById('registered_players');
    function GetCondition()
    {
        $(document).ready(function(){
            $.ajax({
                url : '<?php echo base_url('home/do_getservercondition') ?>',
                type: 'GET',
                dataType: 'JSON',
                data: {'<?php echo $this->lib->GetTokenName() ?>' : '<?php echo $this->lib->GetTokenKey() ?>'},
                success: function(data){
                    var GetString = JSON.stringify(data);
                    var Result = JSON.parse(GetString);
    
                    if (Result.response == 'true'){
                        if (Result.message == 'OFFLINE'){
                            Q.setAttribute('class', 'h2 mb-0 text-main-1');
                            $('#server_status').html(Result.message);
                            document.getElementById('server_status_card').classList.remove('running');
                            RefreshFetch();
                        }
                        else if (Result.message == 'ONLINE'){
                            Q.setAttribute('class', 'h2 mb-0 text-main-3');
                            $('#server_status').html(Result.message);
                            document.getElementById('server_status_card').classList.remove('running');
                            RefreshFetch();
                        }
                        else{
                            Q.setAttribute('class', 'h2 mb-0 text-main-1');
                            $('#server_status').html(Result.message);
                            document.getElementById('server_status_card').classList.remove('running');
                            RefreshFetch();
                        }
                    }
                    else if (Result.response == 'false'){
                        Q.setAttribute('class', 'h2 mb-0 text-main-1');
                        $('#server_status').html(Result.message);
                        document.getElementById('server_status_card').classList.remove('running');
                        RefreshFetch();
                    }
                    else{
                        Q.setAttribute('class', 'h2 mb-0 text-main-1');
                        $('#server_status').html('OFFLINE');
                        document.getElementById('server_status_card').classList.remove('running');
                        RefreshFetch();
                    }
                },
                error: function(){
                    Q.setAttribute('class', 'h2 mb-0 text-main-1');
                    SetText('OFFLINE');
                    document.getElementById('server_status_card').classList.remove('running');
                    RefreshFetch();
                }
            });
        });
    }
    
    function GetOnlinePlayers()
    {
        $.ajax({
            url: '<?php echo base_url('home/do_getonline') ?>',
            type: 'GET',
            dataType: 'JSON',
            data: {'<?php echo $this->lib->GetTokenName() ?>' : '<?php echo $this->lib->GetTokenKey() ?>'},
            success: function(data){
                var GetString = JSON.stringify(data);
                var Result = JSON.parse(GetString);
                
                QQ.setAttribute('class', 'nk-count h2 mb-0');
                $('#online_players').html(Result.response);
                document.getElementById('online_players_card').classList.remove('running');
            },
            error: function(){
                QQ.setAttribute('class', 'nk-count h2 mb-0');
                document.getElementById('online_players_card').classList.remove('running');
                $('#online_players').html('0');
            }
        });
    }

    function GetRegisteredPlayers()
    {
        $.ajax({
            url: '<?php echo base_url('home/do_getregistered') ?>',
            type: 'GET',
            dataType: 'JSON',
            data: {'<?php echo $this->lib->GetTokenName() ?>' : '<?php echo $this->lib->GetTokenKey() ?>'},
            success: function(data){
                var GetString = JSON.stringify(data);
                var Result = JSON.parse(GetString);
                
                QQQ.setAttribute('class', 'nk-count h2 mb-0');
                $('#registered_players').html(Result.response);
                document.getElementById('registered_players_card').classList.remove('running');
            },
            error: function(){
                QQQ.setAttribute('class', 'nk-count h2 mb-0');
                $('#registered_players').html('0');
                document.getElementById('registered_players_card').classList.remove('running');
            }
        });
    }

    function RefreshFetch()
    {
        setTimeout(() => {
            GetCondition();
            GetOnlinePlayers();
            GetRegisteredPlayers();
        }, 5000);
    }
    setTimeout(() => {
        GetCondition();
        GetOnlinePlayers();
        GetRegisteredPlayers();
    }, 3000);
</script>