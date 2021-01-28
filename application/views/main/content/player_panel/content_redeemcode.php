<?php
include 'assets/include.php';

if (isset($_POST['submit-redeemcode']))
{
	$item_code = $_POST['redeemcode'];
	
	if($item_code == "")
	{
		$this->session->set_flashdata('error', 'Redeem Code Cannot Be Empty');
		redirect(base_url('player_panel/redeemcode'),'refresh');
	}
	else
	{
		$logcheck = $connec->prepare("SELECT * FROM check_user_itemcode WHERE uid='".$_SESSION['uid']."' AND item_code ='".$item_code."'");
		$logcheck->execute();
		$result_log = $logcheck->fetch(PDO::FETCH_ASSOC);
		if ($result_log) 
		{
			$this->session->set_flashdata('error', 'This Code Already Used');
			redirect(base_url('player_panel/redeemcode'),'refresh');
		}
		else 
		{
			$sql = $connec->prepare("SELECT * FROM item_code WHERE item_code ='".$item_code."'");
			$sql->execute();
			$result = $sql->fetch(PDO::FETCH_ASSOC);
			if ($result) 
			{
				if ($result['type'] == "Cash") 
				{
					$sql_0 = $connec->prepare("SELECT * FROM accounts WHERE player_id ='".$_SESSION['uid']."'");
					$sql_0->execute();
					$result_0 = $sql_0->fetch(PDO::FETCH_ASSOC);
					if ($result_0) 
					{
						// Insert To Account
						$totalmoney = $result['cash'] + $result_0['money'];
						$sql_1 = 'UPDATE accounts ' . 'SET money = :aa ' . 'WHERE player_id = :bb';
						$stmt_1 = $connec->prepare($sql_1);
						$stmt_1->bindParam(':aa', $totalmoney, PDO::PARAM_STR);
						$stmt_1->bindParam(':bb', $_SESSION['uid'], PDO::PARAM_STR);
						$stmt_1->execute();

						// Insert To Log
						$logger = $connec->prepare("INSERT INTO check_user_itemcode (uid, item_code, username) VALUES(?, ?, ?)");
						$logger->execute(array($_SESSION['uid'], $result['item_code'], $_SESSION['playername']));

						if ($stmt_1 && $logger) 
						{
							$this->session->set_flashdata('success', 'Congratulation '.$_SESSION['playername'].', You Received '.$result['item_alert'].'');
							redirect(base_url('player_panel/redeemcode'),'refresh');
						}
						else 
						{
							$this->session->set_flashdata('error', 'Something Went Wrong. Error Code : 001');
							redirect(base_url('player_panel/redeemcode'),'refresh');
						}
					}
					else 
					{
						$this->session->set_flashdata('error', 'Failed Fetch Player Data');
						redirect(base_url('player_panel/redeemcode'),'refresh');
					}
				}
				if ($result['type'] == "Item") 
				{
					$sql_0 = $connec->prepare("SELECT * FROM player_items WHERE owner_id ='".$_SESSION['uid']."' AND item_id  ='".$result['item_id']."'");
					$sql_0->execute();
					$result_0 = $sql_0->fetch(PDO::FETCH_ASSOC);
					if ($result_0)
					{
						if ($result_0['equip'] == 1) 
						{
							$totalcount = $result['item_count'] + $result_0['count'];
							$updatequery = 'UPDATE player_items '
							. 'SET count = :aa '
							. 'WHERE object_id = :bb';
							$stmt_0 = $connec->prepare($updatequery);
							$stmt_0->bindParam(':aa', $totalcount, PDO::PARAM_STR);
							$stmt_0->bindParam(':bb', $result_0['object_id'], PDO::PARAM_STR);
							$stmt_0->execute();

							$logger = $connec->prepare("INSERT INTO check_user_itemcode (uid, item_code, username) VALUES(?, ?, ?)");
							$logger->execute(array($_SESSION['uid'], $result['item_code'], $_SESSION['playername']));

							if ($stmt_0 && $logger)
							{
								$this->session->set_flashdata('success', 'Congratulation '.$_SESSION['playername'].', You Received '.$result['item_alert'].'');
								redirect(base_url('player_panel/redeemcode'), 'refresh');
							}
							else
							{
								$this->session->set_flashdata('error', 'Something Went Wrong. Error Code : 002');
								redirect(base_url('player_panel/redeemcode'),'refresh');
							}
						}
						if ($result_0['equip'] == 2)
						{
							$this->session->set_flashdata('error', 'Something Went Wrong. Error Code : 003');
							redirect(base_url('player_panel/redeemcode'), 'refresh');
						}
						if ($result_0['equip'] == 3) 
						{
							$this->session->set_flashdata('error', 'Something Went Wrong. Error Code : 004');
							redirect(base_url('player_panel/redeemcode'), 'refresh');
						}
					}
					else
					{
						$insertitem = $connec->prepare("INSERT INTO player_items (owner_id, item_id, item_name, count, category, equip) VALUES(?, ?, ?)");
						$insertitem->execute(
							array(
								$_SESSION['uid'],
								$result['item_id'],
								$result['item_name'],
								$result['item_count'],
								$result['category'],
								1
							)
						);

						$logger = $connec->prepare("INSERT INTO check_user_itemcode (uid, item_code, username) VALUES(?, ?, ?)");
						$logger->execute(array($_SESSION['uid'], $result['item_code'], $_SESSION['playername']));

						if ($insertitem && $logger) 
						{
							$this->session->set_flashdata('success', 'Congratulation '.$_SESSION['playername'].', You Received '.$result['item_alert'].'');
							redirect(base_url('player_panel/redeemcode'), 'refresh');
						}
						else 
						{
							$this->session->set_flashdata('error', 'Something Went Wrong. Error Code : 005');
							redirect(base_url('player_panel/redeemcode'), 'refresh');
						}
					}
				}
			}
			else 
			{
				$this->session->set_flashdata('error', 'This Code Doesnt Exist');
				redirect(base_url('player_panel/redeemcode'), 'refresh');
			}
		}
	}
}
?>
<div class="nk-main">
	<div class="container">
		<div class="nk-gap"></div>
		<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Redeem</span> Code</span></h3>
		<div class="nk-gap-2"></div>
		<div class="row vertical-gap">
			<div class="col-lg-6 offset-lg-3">
				<div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div>
                <?php
                if ($this->session->flashdata('success'))
                {
                    echo "<div class='nk-info-box text-success'><div class='nk-info-box-icon'><i class='ion-checkmark-round'></i></div><h3>Success!</h3><em>";
                    echo $this->session->flashdata('success');
                    echo "</em></div>";
                    echo '<div class="nk-gap-2"></div>';
                }
                else if ($this->session->flashdata('error')) 
                {
					echo "<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>";
                    echo $this->session->flashdata('error');
                    echo "</em></div>";
                    echo '<div class="nk-gap-2"></div>';
                }
                ?>
                <form action="" method="POST" accept-charset="utf-8">
					<div class="form-group">
						<label for="redeemcode">Redeem Code</label>
						<input type="text" name="redeemcode" class="form-control" placeholder="Enter Your Code" minlength="5" maxlength="25" autocomplete="off" autofocus required>
					</div>
					<div class="form-group text-center">
						<button type="submit" name="submit-redeemcode" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary"><span class="fa fa-paper-plane"></span> &nbsp;Submit</button>
						<button type="reset" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-danger"><span class="fa fa-refresh"></span> &nbsp;Reset</button>
					</div>
				</form>
				<div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div>
			</div>
		</div>
	</div>
</div>