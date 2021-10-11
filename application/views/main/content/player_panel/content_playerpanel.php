<div class="nk-main">
	<div class="nk-gap-2"></div>
     <div class="container">
          <h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_84') ?></span> <?php echo $this->lang->line('STR_DARKBLOW_85') ?></span></h3>
          <div class="nk-gap-2"></div>
          <div class="row vertical-gap">
			<div class="col-lg-6">
                    <div class="nk-feature-2">
                         <div class="nk-feature-icon" style="margin-bottom: -8px;">
                              <span class="ion-person"></span>
                         </div>
                         <div class="nk-feature-cont text-center">
                              <h3 class="nk-feature-title"><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_86') ?></span> <?php echo $this->lang->line('STR_DARKBLOW_64') ?></h3>
                              <div class="nk-gap-1"></div>
                              <table class="table table-borderless table-hover text-white" style="width: 100%;">
                                   <tbody>
                                        <?php foreach ($account as $row) : ?>
                                             <tr class="text-center">
                                                  <td><?php echo $this->lang->line('STR_DARKBLOW_19') ?></td>
                                                  <td><?php echo $row['login'] ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td><?php echo $this->lang->line('STR_DARKBLOW_87') ?></td>
                                                  <td><?php echo $row['player_id'] ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td><?php echo $this->lang->line('STR_DARKBLOW_32') ?></td>
                                                  <td><?php echo $row['player_name'] ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td><?php echo $this->lang->line('STR_DARKBLOW_3') ?></td>
                                                  <td><img src="<?php echo base_url() ?>/assets/goodgames/assets/images/img_rank/<?php echo $row['rank'] ?>.gif" alt="<?php echo $row['rank'] ?>"></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>Points<?php echo $this->lang->line('STR_DARKBLOW_88') ?></td>
                                                  <td><?php echo number_format($row['gp'], '0',',','.'); ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td><?php echo $this->lang->line('STR_DARKBLOW_89') ?></td>
                                                  <td><?php echo number_format($row['exp'], '0',',','.'); ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td><?php echo $this->lang->line('STR_DARKBLOW_90') ?></td>
                                                  <td>
                                                       <?php
                                                       if ($row['pc_cafe'] == "1") 
                                                       {
                                                            echo '<button type="button" title="Default Badges For Player" class="nk-btn nk-btn-outline nk-btn-color-success">Member</button>';
                                                       }
                                                       else if ($row['pc_cafe'] == "2") 
                                                       {
                                                            echo '<button type="button" title="Default Badges For Player" class="nk-btn nk-btn-outline nk-btn-color-warning">Special Member</button>';
                                                       }
                                                       else if ($row['pc_cafe'] == "5")
                                                       {
                                                            echo '<button type="button" title="Developer & Game Master Badges" class="nk-btn nk-btn-outline nk-btn-color-danger">DEV & GM</button>';
                                                       }
                                                       else
                                                       {
                                                            echo 'INVALID';
                                                       }
                                                       ?>
                                                  </td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td><?php echo $this->lang->line('STR_DARKBLOW_165') ?></td>
                                                  <td>
                                                       <?php
                                                       if ($row['access_level'] == "-1") 
                                                       {
                                                            echo '<p class="text-main-1" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">BANNED</p>';
                                                       }
                                                       else if ($row['access_level'] == "0") 
                                                       {
                                                            echo '<p class="text-success" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">ACTIVE</p>';
                                                       }
                                                       else if ($row['access_level'] == "1") 
                                                       {
                                                            echo '<p class="text-success" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">ACTIVE</p>';
                                                       }
                                                       else if ($row['access_level'] == "2")
                                                       {
                                                            echo '<p class="text-success" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">STREAMER</p>';
                                                       }
                                                       else if ($row['access_level'] == "3")
                                                       {
                                                            echo '<p class="text-main-6" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">MODERATOR</p>';
                                                       }
                                                       else if ($row['access_level'] == "4")
                                                       {
                                                            echo '<p class="text-main-6" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">GAME MASTER</p>';
                                                       }
                                                       else if ($row['access_level'] == "5")
                                                       {
                                                            echo '<p class="text-main-6" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">ADMIN</p>';
                                                       }
                                                       else if ($row['access_level'] == "6") 
                                                       {
                                                            echo '<p class="text-main-6" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">DEVELOPER</p>';
                                                       }
                                                       ?>
                                                  </td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td><?php echo $this->lang->line('STR_DARKBLOW_102') ?></td>
                                                  <td><?php echo $row['lastip'] ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td><?php echo $this->lang->line('STR_DARKBLOW_48') ?></td>
                                                  <td><?php echo $row['email'] ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td><?php echo $this->lang->line('STR_DARKBLOW_103') ?></td>
                                                  <td><?php echo number_format($row['money'], '0',',','.'); ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td><?php echo $this->lang->line('STR_DARKBLOW_104') ?></td>
                                                  <td><?php echo $row['last_mac'] ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td><?php echo $this->lang->line('STR_DARKBLOW_105') ?></td>
                                                  <td><?php echo number_format($row['kuyraicoin'], '0',',','.'); ?></td>
                                             </tr>
                                        <?php endforeach; ?>
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
               <div class="col-lg-6">
                    <div class="container">
                         <div class="row vertical-gap justify-content-center">
                              <div class="col-lg-12">
                                   <div class="nk-feature-2">
                                        <div class="nk-feature-icon">
                                             <span class="fa fa-history"></span>
                                        </div>
                                        <div class="nk-feature-cont text-center">
                                             <h3 class="nk-feature-title"><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_106') ?></span> <?php echo $this->lang->line('STR_DARKBLOW_64') ?></h3>
                                             <div class="nk-gap-1"></div>
                                             <table class="table table-borderless table-hover text-white" style="width: 100%;">
                                                  <tbody>
                                                       <?php foreach ($account as $row) :?>
                                                            <tr class="text-center">
                                                                 <td><?php echo $this->lang->line('STR_DARKBLOW_172') ?></td>
                                                                 <td><?php echo $row['fights'] ?></td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td><?php echo $this->lang->line('STR_DARKBLOW_166') ?></td>
                                                                 <td><?php echo $row['fights_win'] ?></td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td><?php echo $this->lang->line('STR_DARKBLOW_167') ?></td>
                                                                 <td><?php echo $row['fights_lost'] ?></td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td><?php echo $this->lang->line('STR_DARKBLOW_168') ?></td>
                                                                 <td><?php echo $row['kills_count'] ?></td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td><?php echo $this->lang->line('STR_DARKBLOW_169') ?></td>
                                                                 <td><?php echo $row['deaths_count'] ?></td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td><?php echo $this->lang->line('STR_DARKBLOW_170') ?></td>
                                                                 <td><?php echo $row['headshots_count'] ?></td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td><?php echo $this->lang->line('STR_DARKBLOW_171') ?></td>
                                                                 <td><?php echo $row['escapes'] ?></td>
                                                            </tr>
                                                       <?php endforeach; ?>
                                                  </tbody>
                                             </table>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-12">
                                   <div class="nk-feature-2">
                                        <div class="nk-feature-icon">
                                             <span class="fa fa-lock"></span>
                                        </div>
                                        <div class="nk-feature-cont text-center">
                                             <h3 class="nk-feature-title"><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_114') ?></span> <?php echo $this->lang->line('STR_DARKBLOW_64') ?></h3>
                                             <div class="nk-gap-1"></div>
                                             <?php 
                                             if (!empty($row['hint_question']))
                                             { 
                                             ?>     
                                                  <table class="table table-borderless table-hover text-white">
                                                       <tbody>
                                                            <tr>
                                                                 <td><?php echo $this->lang->line('STR_DARKBLOW_21') ?></td>
                                                                 <td><?php echo $row['hint_question'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                 <td><?php echo $this->lang->line('STR_DARKBLOW_23') ?></td>
                                                                 <td class="text-main-3" style="font-style: italic;">SECRET</td>
                                                            </tr>
                                                       </tbody>
                                                  </table>
                                                  <?php echo form_open('', 'id="requesthint_form"') ?>
                                                       <input type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Request See Hint">
                                                  <?php echo form_close() ?>
                                                  <script>
                                                       $(document).ready(function(){
                                                            $('#requesthint_form').on('submit', function(e){
                                                                 e.preventDefault();
                                                                 $.ajax({
                                                                      url : '<?php echo base_url('player_panel/home/do_requesthint') ?>',
                                                                      type: 'GET',
                                                                      dataType: 'JSON',
                                                                      data: {},
                                                                      success: function(data){
                                                                           var GetString = JSON.stringify(data);
                                                                           var Result = JSON.parse(GetString);

                                                                           if (Result.response == 'true'){
                                                                                ShowToast(3000, 'info', Result.message);
                                                                                return;
                                                                           }
                                                                           else if (Result.response == 'false'){
                                                                                ShowToast(3000, 'error', Result.message);
                                                                                return;
                                                                           }
                                                                           else{
                                                                                ShowToast(2000, 'error', Result.message);
                                                                                return;
                                                                           }
                                                                      },
                                                                      error: function(){
                                                                           ShowToast(2000, 'error', '<?php echo $this->lang->line('STR_ERROR_9') ?>');
                                                                           setTimeout(() => {
                                                                                window.location.reload();
                                                                           }, 2000);
                                                                           return;
                                                                      }
                                                                 });
                                                            });
                                                       });
                                                  </script>
                                             <?php
                                             }
                                             else
                                             {
                                             ?>
                                                  <table class="table table-borderless table-hover text-white">
                                                       <tbody>
                                                            <tr>
                                                                 <td><?php echo $this->lang->line('STR_DARKBLOW_21') ?></td>
                                                                 <td class="text-main-1">Empty</td>
                                                            </tr>
                                                            <tr>
                                                                 <td><?php echo $this->lang->line('STR_DARKBLOW_23') ?></td>
                                                                 <td class="text-main-1">Empty</td>
                                                            </tr>
                                                            <tr>
                                                                 <td colspan="2" class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_115') ?></td>
                                                            </tr>
                                                       </tbody>
                                                  </table>
                                                  <button type="button" class="nk-btn nk-btn-md nk-btn-rounded nk-btn-outline nk-btn-color-main-5" onclick="window.location='<?php echo base_url('player_panel/create_hint') ?>';"><?php echo $this->lang->line('STR_DARKBLOW_173') ?></button>
                                             <?php 
                                             } 
                                             ?>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
			<div class="col-lg-12">
                    <div class="nk-gap-2"></div>
                    <h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_84') ?> <?php echo $this->lang->line('STR_DARKBLOW_85') ?></span> <?php echo $this->lang->line('STR_DARKBLOW_73') ?></span></h3>
                    <div class="nk-gap-2"></div>
                    <div class="nk-box-2 bg-dark-2">
                         <div class="container">
                              <div class="row justify-content-center">
                                   <button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="window.location = '<?php echo base_url('home') ?>'"><?php echo $this->lang->line('STR_DARKBLOW_118') ?></button>&nbsp;
                                   <a href="<?php echo base_url('player_panel/changepassword') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-4"><?php echo $this->lang->line('STR_DARKBLOW_47') ?> <?php echo $this->lang->line('STR_DARKBLOW_42') ?></a>&nbsp;
                                   <?php if ($this->getsettings->Get2()->change_email == 1) : ?>
                                        <a href="<?php echo base_url('player_panel/changeemail') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-4"><?php echo $this->lang->line('STR_DARKBLOW_47') ?> <?php echo $this->lang->line('STR_DARKBLOW_48') ?></a>&nbsp;
                                   <?php endif; ?>
                                   <button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="window.location.href='<?php echo base_url('home/logout') ?>'"><?php echo $this->lang->line('STR_DARKBLOW_119') ?></button>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
	</div>
</div>