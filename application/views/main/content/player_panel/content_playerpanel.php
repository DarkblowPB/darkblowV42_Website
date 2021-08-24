<div class="nk-main">
	<div class="nk-gap-2"></div>
     <div class="container">
          <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Player</span> Panels</span></h3>
          <div class="nk-gap-2"></div>
          <div class="row vertical-gap">
               <div class="col-lg-12">
                    <?php
                    if ($this->session->flashdata('error'))
                    {
                         echo "<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>";
                         echo $this->session->flashdata('error');
                         echo "</em></div>";
                    }
                    else if ($this->session->flashdata('success'))
                    {
                         echo "<div class='nk-info-box text-success'><div class='nk-info-box-icon'><i class='ion-checkmark-round'></i></div><h3>Success!</h3><em>";
                         echo $this->session->flashdata('success');
                         echo "</em></div>";
                    }
                    ?>
               </div>
			<div class="col-lg-6">
                    <div class="nk-feature-2">
                         <div class="nk-feature-icon" style="margin-bottom: -8px;">
                              <span class="ion-person"></span>
                         </div>
                         <div class="nk-feature-cont text-center">
                              <h3 class="nk-feature-title"><span class="text-main-1">Account</span> Details</h3>
                              <div class="nk-gap-1"></div>
                              <table class="table table-borderless table-hover text-white" style="width: 100%;">
                                   <tbody>
                                        <?php foreach ($account as $row) : ?>
                                             <tr class="text-center">
                                                  <td>Username</td>
                                                  <td><?php echo $row['login'] ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>Player ID</td>
                                                  <td><?php echo $row['player_id'] ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>Player Name</td>
                                                  <td><?php echo $row['player_name'] ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>Rank</td>
                                                  <td><img src="<?php echo base_url() ?>/assets/goodgames/assets/images/img_rank/<?php echo $row['rank'] ?>.gif" alt="<?php echo $row['rank'] ?>"></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>Points</td>
                                                  <td><?php echo number_format($row['gp'], '0',',','.'); ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>Exp</td>
                                                  <td><?php echo number_format($row['exp'], '0',',','.'); ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>Badges</td>
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
                                                  <td>Account Status</td>
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
                                                            echo '<p class="text-success" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">ACTIVE</p>';
                                                       }
                                                       else if ($row['access_level'] == "3")
                                                       {
                                                            echo '<p class="text-main-6" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">ADMIN</p>';
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
                                                  <td>Last IP Address</td>
                                                  <td><?php echo $row['lastip'] ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>Email</td>
                                                  <td><?php echo $row['email'] ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>D-Cash</td>
                                                  <td><?php echo number_format($row['money'], '0',',','.'); ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>Last MAC</td>
                                                  <td><?php echo $row['last_mac'] ?></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>Web Coin</td>
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
                                             <h3 class="nk-feature-title"><span class="text-main-1">Match</span> Details</h3>
                                             <div class="nk-gap-1"></div>
                                             <table class="table table-borderless table-hover text-white" style="width: 100%;">
                                                  <tbody>
                                                       <?php foreach ($account as $row) :?>
                                                            <tr class="text-center">
                                                                 <td>Total Match</td>
                                                                 <td><?php echo $row['fights'] ?></td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td>Win Match</td>
                                                                 <td><?php echo $row['fights_win'] ?></td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td>Lose Match</td>
                                                                 <td><?php echo $row['fights_lost'] ?></td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td>Total Kills</td>
                                                                 <td><?php echo $row['kills_count'] ?></td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td>Total Deaths</td>
                                                                 <td><?php echo $row['deaths_count'] ?></td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td>Total Headshots</td>
                                                                 <td><?php echo $row['headshots_count'] ?></td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td>Total Escapes</td>
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
                                             <h3 class="nk-feature-title"><span class="text-main-1">Security Option</span> Details</h3>
                                             <div class="nk-gap-1"></div>
                                             <?php 
                                             if (!empty($row['hint_question']))
                                             { 
                                             ?>     
                                                  <table class="table table-borderless table-hover text-white">
                                                       <tbody>
                                                            <tr>
                                                                 <td>Hint Question</td>
                                                                 <td><?php echo $row['hint_question'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                 <td>Hint Answer</td>
                                                                 <td class="text-main-3" style="font-style: italic;">SECRET</td>
                                                            </tr>
                                                       </tbody>
                                                  </table>
                                                  <button type="button" onclick="ShowHint()" class="nk-btn nk-btn-md nk-btn-rounded nk-btn-outline nk-btn-color-main-5">Request To See Hint</button>
                                                  <script>
                                                       function ShowHint()
                                                       {
                                                            $.ajax({
                                                                 url: '<?php echo base_url('player_panel/home/do_requesthint') ?>',
                                                                 type: 'POST',
                                                                 data: {
                                                                      '<?php echo $this->security->get_csrf_token_name() ?>' : '<?php echo $this->security->get_csrf_hash() ?>',
                                                                      'player_id' : '<?php echo $_SESSION['uid'] ?>'
                                                                 },
                                                                 success: function(data){
                                                                      if (data != ""){
                                                                           ShowToast(4000, 'success', 'This Is Your Hint: ' + data + '.');
                                                                           setTimeout(() => {
                                                                                window.location = '<?php echo base_url('player_panel') ?>';
                                                                           }, 4500);
                                                                      }
                                                                      else
                                                                      {
                                                                           ShowToast(4000, 'error', 'Error Request Hint.');
                                                                           setTimeout(() => {
                                                                                window.location = '<?php echo base_url('player_panel') ?>';
                                                                           }, 4500);
                                                                      }
                                                                 },
                                                                 error: function(data){
                                                                      ShowToast(2000, 'error', data);
                                                                      setTimeout(() => {
                                                                           window.location = '<?php echo base_url('player_panel') ?>';
                                                                      }, 2500);
                                                                 }
                                                            });
                                                       }
                                                  </script>
                                             <?php
                                             }
                                             else
                                             {
                                             ?>
                                                  <table class="table table-borderless table-hover text-white">
                                                       <tbody>
                                                            <tr>
                                                                 <td>Hint Question</td>
                                                                 <td class="text-main-1">Empty</td>
                                                            </tr>
                                                            <tr>
                                                                 <td>Hint Answer</td>
                                                                 <td class="text-main-1">Empty</td>
                                                            </tr>
                                                            <tr>
                                                                 <td colspan="2" class="text-main-1">Your Account Is Not Safe!. Please To Create Your Hint Immediately</td>
                                                            </tr>
                                                       </tbody>
                                                  </table>
                                                  <button type="button" class="nk-btn nk-btn-md nk-btn-rounded nk-btn-outline nk-btn-color-main-5" onclick="window.location='create_hint';">Create New One</button>
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
                    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Player Panels</span> Menu</span></h3>
                    <div class="nk-gap-2"></div>
                    <div class="nk-box-2 bg-dark-2">
                         <div class="container">
                              <div class="row justify-content-center">
                                   <button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="window.location.href='../home'">Back To Home</button>&nbsp;
                                   <a href="<?php echo base_url('player_panel/changepassword') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-4">Change Password</a>&nbsp;
                                   <a href="<?php echo base_url('player_panel/changeemail') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-4">Change Email</a>&nbsp;
                                   <button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="window.location.href='../home/logout'">Logout</button>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
	</div>
</div>