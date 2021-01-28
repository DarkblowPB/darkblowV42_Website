					<?php
					$player = $this->launcher_redeemcode_01->getSessionId();
					if (isset($_POST['submit_code'])) 
					{
						include 'assets/include.php';
						$code = $_POST['item_code'];
						$sql = $connec->prepare("SELECT * FROM item_code WHERE item_code = '".$code."'");
						$sql->execute();
						$result = $sql->fetch(PDO::FETCH_ASSOC);
						if ($result) 
						{
							$sql_0 = $connec->prepare("SELECT * FROM player_items WHERE owner_id ='".$_SESSION['launcher_pid']."' AND item_id = '".$result['item_id']."'");
							$sql_0->execute();
							$result_0 = $sql_0->fetch(PDO::FETCH_ASSOC);
							if ($result_0)
							{
								if ($result_0['type'] == "Item") 
								{
									$totalcount_item = $result['item_count'] + $result_0['count'];
									$sql_1 = 'UPDATE player_items '
									. 'SET count = :aa '
									. 'WHERE object_id = :bb';
									$stmt_1 = $connec->prepare($sql_1);
									$stmt_1->bindParam(':aa', $totalcount_item, PDO::PARAM_STR);
									$stmt_1->bindParam(':bb', $result['object_id'], PDO::PARAM_STR);
									$stmt_1->execute();
								}
								if ($result_0['type'] == "Cash") 
								{
									$totalcount_cash = $result['cash'] + $result_0['money'];
									$sql_2 = 'UPDATE accounts '
									. 'SET money = :cc '
									. 'WHERE player_id = :dd';
									$stmt_2 = $connec->prepare($sql_2);
									$stmt_2->bindParam(':cc', $totalcount_cash, PDO::PARAM_STR);
									$stmt_2->bindParam(':dd', $_SESSION['launcher_pid'], PDO::PARAM_STR);
									$stmt_2->execute();
								}
							}
							else 
							{
								$ISp_Res2 = $connec->prepare("INSERT INTO player_items (owner_id, item_id, item_name, count, category,equip) VALUES(?, ?, ?, ?, ?, ?)");
								$ISp_Res2->execute(array(
									$_SESSION['launcher_pid'],
									$result['item_id'],
									$result['item_name'],
									$result['item_count'],
									$result['category'],
									1
								));
							}
						}
					}
					if (isset($_POST['submit_logout'])) 
					{
						$this->login_library->launcher_LogoutProcessing();
					}
					?>
					<h4 class="text-center" style="color: white; font-weight: bold; font-style: italic;">
						Hi, <?php echo $player->player_name ?>
					</h4>
					<br>
					<form action="" method="POST" class="form-horizontal">
						<div class="form-group">
							<label style="color: white; font-size: 15px; font-weight: bold; font-style: italic; margin-bottom: 15px;">Your Code</label>
							<input type="text" name="item_code" class="form-control" placeholder="Enter Redeem Code" minlength="5" maxlength="25" autocomplete="off" autofocus required>
						</div>
						<br>
						<div class="form-group text-center">
							<button type="submit" name="submit_code" class="btn btn-outline-primary" style="font-weight: bold; font-style: italic;"><span class="fa fa-paper-plane"></span> &nbsp;SUBMIT CODE</button>
						</div>
					</form>
						<div class="form-group text-center">
							<form action="" method="POST">
								<button type="submit" name="submit_logout" class="btn btn-outline-danger" style="font-weight: bold; font-style: italic;"><span class="fa fa-sign-out-alt"></span> &nbsp;LOGOUT</button>
							</form>
						</div>
					<br>