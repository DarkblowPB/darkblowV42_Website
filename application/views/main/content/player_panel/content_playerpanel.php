<div class="nk-main">
     <div class="nk-gap-2"></div>
     <div class="container">
          <h3 class="nk-decorated-h-2"><span><span class="text-main-1">
                         <?= $this->lang->line('STR_DARKBLOW_84') ?>
                    </span>
                    <?= $this->lang->line('STR_DARKBLOW_85') ?>
               </span></h3>
          <div class="nk-gap-2"></div>
          <div class="row vertical-gap">
               <div class="col-lg-6">
                    <div class="nk-feature-2">
                         <div class="nk-feature-icon" style="margin-bottom: -8px;">
                              <span class="ion-person"></span>
                         </div>
                         <div class="nk-feature-cont text-center">
                              <h3 class="nk-feature-title"><span class="text-main-1">
                                        <?= $this->lang->line('STR_DARKBLOW_86') ?>
                                   </span>
                                   <?= $this->lang->line('STR_DARKBLOW_64') ?>
                              </h3>
                              <div class="nk-gap-1"></div>
                              <table class="table table-borderless table-hover text-white" style="width: 100%;">
                                   <tbody>
                                        <?php foreach ($account as $row) : ?>
                                             <tr class="text-center">
                                                  <td>
                                                       <?= $this->lang->line('STR_DARKBLOW_19') ?>
                                                  </td>
                                                  <td>
                                                       <?= $row['login'] ?>
                                                  </td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>
                                                       <?= $this->lang->line('STR_DARKBLOW_87') ?>
                                                  </td>
                                                  <td>
                                                       <?= $row['player_id'] ?>
                                                  </td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>
                                                       <?= $this->lang->line('STR_DARKBLOW_32') ?>
                                                  </td>
                                                  <td>
                                                       <?= $row['player_name'] ?>
                                                  </td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>
                                                       <?= $this->lang->line('STR_DARKBLOW_3') ?>
                                                  </td>
                                                  <td><img src="<?= base_url() ?>/assets/goodgames/assets/images/img_rank/<?= $row['rank'] ?>.gif" alt="<?= $row['rank'] ?>"></td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>
                                                       <?= $this->lang->line('STR_DARKBLOW_88') ?>
                                                  </td>
                                                  <td>
                                                       <?= number_format($row['gp'], '0', ',', '.'); ?>
                                                  </td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>
                                                       <?= $this->lang->line('STR_DARKBLOW_89') ?>
                                                  </td>
                                                  <td>
                                                       <?= number_format($row['exp'], '0', ',', '.'); ?>
                                                  </td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>
                                                       <?= $this->lang->line('STR_DARKBLOW_90') ?>
                                                  </td>
                                                  <td>
                                                       <?php
                                                       if ($row['pc_cafe'] == "1") echo '<button type="button" title="' . $this->lang->line('STR_DARKBLOW_91') . '" class="nk-btn nk-btn-outline nk-btn-color-success">' . $this->lang->line('STR_DARKBLOW_92') . '</button>';
                                                       else if ($row['pc_cafe'] == "2") echo '<button type="button" title="' . $this->lang->line('STR_DARKBLOW_91') . '" class="nk-btn nk-btn-outline nk-btn-color-warning">' . $this->lang->line('STR_DARKBLOW_93') . '</button>';
                                                       else if ($row['pc_cafe'] == "5") echo '<button type="button" title="' . $this->lang->line('STR_DARKBLOW_94') . '" class="nk-btn nk-btn-outline nk-btn-color-danger">' . $this->lang->line('STR_DARKBLOW_129') . '</button>';
                                                       else echo $this->lang->line('STR_DARKBLOW_191');
                                                       ?>
                                                  </td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>
                                                       <?= $this->lang->line('STR_DARKBLOW_165') ?>
                                                  </td>
                                                  <td>
                                                       <?php
                                                       if ($row['access_level'] == "-1") echo '<p class="text-main-1" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">' . $this->lang->line('STR_DARKBLOW_192') . '</p>';
                                                       else if ($row['access_level'] == "0") echo '<p class="text-success" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">' . $this->lang->line('STR_DARKBLOW_193') . '</p>';
                                                       else if ($row['access_level'] == "1") echo '<p class="text-success" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">' . $this->lang->line('STR_DARKBLOW_193') . '</p>';
                                                       else if ($row['access_level'] == "2") echo '<p class="text-success" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">' . $this->lang->line('STR_DARKBLOW_194') . '</p>';
                                                       else if ($row['access_level'] == "3") echo '<p class="text-main-6" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">' . $this->lang->line('STR_DARKBLOW_195') . '</p>';
                                                       else if ($row['access_level'] == "4") echo '<p class="text-main-6" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">' . $this->lang->line('STR_DARKBLOW_196') . '</p>';
                                                       else if ($row['access_level'] == "5") echo '<p class="text-main-6" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">' . $this->lang->line('STR_DARKBLOW_197') . '</p>';
                                                       else if ($row['access_level'] == "6") echo '<p class="text-main-6" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">' . $this->lang->line('STR_DARKBLOW_198') . '</p>';
                                                       else echo $this->lang->line('STR_DARKBLOW_191');
                                                       ?>
                                                  </td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>
                                                       <?= $this->lang->line('STR_DARKBLOW_102') ?>
                                                  </td>
                                                  <td>
                                                       <?= $row['lastip'] ?>
                                                  </td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>
                                                       <?= $this->lang->line('STR_DARKBLOW_48') ?>
                                                  </td>
                                                  <td>
                                                       <?= $row['email'] ?>
                                                  </td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>
                                                       <?= $this->lang->line('STR_DARKBLOW_103') ?>
                                                  </td>
                                                  <td>
                                                       <?= number_format($row['money'], '0', ',', '.'); ?>
                                                  </td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>
                                                       <?= $this->lang->line('STR_DARKBLOW_104') ?>
                                                  </td>
                                                  <td>
                                                       <?= $row['last_mac'] ?>
                                                  </td>
                                             </tr>
                                             <tr class="text-center">
                                                  <td>
                                                       <?= $this->lang->line('STR_DARKBLOW_105') ?>
                                                  </td>
                                                  <td>
                                                       <?= number_format($row['kuyraicoin'], '0', ',', '.'); ?>
                                                  </td>
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
                                             <h3 class="nk-feature-title"><span class="text-main-1">
                                                       <?= $this->lang->line('STR_DARKBLOW_106') ?>
                                                  </span>
                                                  <?= $this->lang->line('STR_DARKBLOW_64') ?>
                                             </h3>
                                             <div class="nk-gap-1"></div>
                                             <table class="table table-borderless table-hover text-white" style="width: 100%;">
                                                  <tbody>
                                                       <?php foreach ($account as $row) : ?>
                                                            <tr class="text-center">
                                                                 <td>
                                                                      <?= $this->lang->line('STR_DARKBLOW_172') ?>
                                                                 </td>
                                                                 <td>
                                                                      <?= $row['fights'] ?>
                                                                 </td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td>
                                                                      <?= $this->lang->line('STR_DARKBLOW_166') ?>
                                                                 </td>
                                                                 <td>
                                                                      <?= $row['fights_win'] ?>
                                                                 </td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td>
                                                                      <?= $this->lang->line('STR_DARKBLOW_167') ?>
                                                                 </td>
                                                                 <td>
                                                                      <?= $row['fights_lost'] ?>
                                                                 </td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td>
                                                                      <?= $this->lang->line('STR_DARKBLOW_168') ?>
                                                                 </td>
                                                                 <td>
                                                                      <?= $row['kills_count'] ?>
                                                                 </td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td>
                                                                      <?= $this->lang->line('STR_DARKBLOW_169') ?>
                                                                 </td>
                                                                 <td>
                                                                      <?= $row['deaths_count'] ?>
                                                                 </td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td>
                                                                      <?= $this->lang->line('STR_DARKBLOW_170') ?>
                                                                 </td>
                                                                 <td>
                                                                      <?= $row['headshots_count'] ?>
                                                                 </td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                 <td>
                                                                      <?= $this->lang->line('STR_DARKBLOW_171') ?>
                                                                 </td>
                                                                 <td>
                                                                      <?= $row['escapes'] ?>
                                                                 </td>
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
                                             <h3 class="nk-feature-title"><span class="text-main-1">
                                                       <?= $this->lang->line('STR_DARKBLOW_114') ?>
                                                  </span>
                                                  <?= $this->lang->line('STR_DARKBLOW_64') ?>
                                             </h3>
                                             <div class="nk-gap-1"></div>
                                             <?php
                                             if (!empty($row['hint_question'])) {
                                             ?>
                                                  <table class="table table-borderless table-hover text-white">
                                                       <tbody>
                                                            <tr>
                                                                 <td>
                                                                      <?= $this->lang->line('STR_DARKBLOW_21') ?>
                                                                 </td>
                                                                 <td>
                                                                      <?= $row['hint_question'] ?>
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <td>
                                                                      <?= $this->lang->line('STR_DARKBLOW_23') ?>
                                                                 </td>
                                                                 <td class="text-main-3" style="font-style: italic;">SECRET</td>
                                                            </tr>
                                                       </tbody>
                                                  </table>
                                                  <input type="button" id="request_hint" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="<?= $this->lang->line('STR_DARKBLOW_199') ?>" onclick="RequestHint()">
                                                  <script>
                                                       var RETRY = 0;
                                                       $(document).ready(function() {
                                                            $('#requesthint_form').on('click', function(e) {
                                                                 e.preventDefault();

                                                                 return RequestHint();
                                                            });
                                                       });

                                                       function RequestHint() {
                                                            SetAttribute('request_hint', 'button', '<?= $this->lang->line('STR_INFO_8') ?>');
                                                            $.ajax({
                                                                 url: '<?= base_url('player_panel/home/do_requesthint') ?>',
                                                                 type: 'GET',
                                                                 dataType: 'JSON',
                                                                 data: {
                                                                      '<?= $this->lib->GetTokenName() ?>': '<?= $this->lib->GetTokenKey() ?>'
                                                                 },
                                                                 success: function(data) {
                                                                      var GetString = JSON.stringify(data);
                                                                      var Result = JSON.parse(GetString);

                                                                      if (Result.response == 'true') {
                                                                           ShowToast(3000, 'info', Result.message);
                                                                           SetAttribute('request_hint', 'button', '<?= $this->lang->line('STR_DARKBLOW_199') ?>');
                                                                           return;
                                                                      } else if (Result.response == 'false') {
                                                                           ShowToast(3000, 'error', Result.message);
                                                                           SetAttribute('request_hint', 'button', '<?= $this->lang->line('STR_DARKBLOW_199') ?>');
                                                                           return;
                                                                      } else {
                                                                           ShowToast(2000, 'error', Result.message);
                                                                           SetAttribute('request_hint', 'button', '<?= $this->lang->line('STR_DARKBLOW_199') ?>');
                                                                           return;
                                                                      }
                                                                 },
                                                                 error: function() {
                                                                      if (RETRY >= 3) {
                                                                           ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_9') ?>');
                                                                           setTimeout(() => {
                                                                                window.location.reload();
                                                                           }, 2000);
                                                                           return;
                                                                      } else {
                                                                           return RequestHint();
                                                                      }
                                                                 }
                                                            });
                                                       }
                                                  </script>
                                             <?php
                                             } else {
                                             ?>
                                                  <table class="table table-borderless table-hover text-white">
                                                       <tbody>
                                                            <tr>
                                                                 <td>
                                                                      <?= $this->lang->line('STR_DARKBLOW_21') ?>
                                                                 </td>
                                                                 <td class="text-main-1"><?= $this->lang->line('STR_DARKBLOW_213') ?></td>
                                                            </tr>
                                                            <tr>
                                                                 <td>
                                                                      <?= $this->lang->line('STR_DARKBLOW_23') ?>
                                                                 </td>
                                                                 <td class="text-main-1"><?= $this->lang->line('STR_DARKBLOW_213') ?></td>
                                                            </tr>
                                                            <tr>
                                                                 <td colspan="2" class="text-main-1">
                                                                      <?= $this->lang->line('STR_DARKBLOW_115') ?>
                                                                 </td>
                                                            </tr>
                                                       </tbody>
                                                  </table>
                                                  <button type="button" class="nk-btn nk-btn-md nk-btn-rounded nk-btn-outline nk-btn-color-main-5" onclick="window.location='<?= base_url('player_panel/create_hint') ?>';">
                                                       <?= $this->lang->line('STR_DARKBLOW_173') ?>
                                                  </button>
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
                    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">
                                   <?= $this->lang->line('STR_DARKBLOW_84') ?> <?= $this->lang->line('STR_DARKBLOW_85') ?>
                              </span>
                              <?= $this->lang->line('STR_DARKBLOW_73') ?>
                         </span></h3>
                    <div class="nk-gap-2"></div>
                    <div class="nk-box-2 bg-dark-2">
                         <div class="container">
                              <div class="row justify-content-center">
                                   <button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="window.location = '<?= base_url('home') ?>'">
                                        <?= $this->lang->line('STR_DARKBLOW_118') ?>
                                   </button>&nbsp;
                                   <a href="<?= base_url('player_panel/changepassword') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-4">
                                        <?= $this->lang->line('STR_DARKBLOW_47') ?> <?= $this->lang->line('STR_DARKBLOW_42') ?>
                                   </a>&nbsp;
                                   <?php if ($this->getsettings->Get()->change_email == 1) : ?>
                                        <a href="<?= base_url('player_panel/changeemail') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-4">
                                             <?= $this->lang->line('STR_DARKBLOW_47') ?> <?= $this->lang->line('STR_DARKBLOW_48') ?>
                                        </a>&nbsp;
                                   <?php endif; ?>
                                   <button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="Logout()">
                                        <?= $this->lang->line('STR_DARKBLOW_119') ?>
                                   </button>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>