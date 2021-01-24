<?php
include 'assets/include.php';

if (isset($_POST['submit-redeemcode']))
	{
		$item_code = $_POST['redeemcode'];

		//Checking If Redeem Code Is Empty
		if($item_code == "")
		{
			$this->session->set_flashdata('error', 'Redeem Code Cannot Be Empty');
			redirect(base_url('player_panel/redeemcode'),'refresh');
		}
		else
		{
			//Checking Redeem Code
			$sth = $connec->prepare("SELECT * FROM check_user_itemcode WHERE uid = '".$_SESSION['uid']."' AND item_code = '".$item_code."'");
			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);
			if($result)
			{
				//echo "<script>alert('This Code Has Already Been Used');self.history.back();</script>";
				$this->session->set_flashdata('error', 'This Code Has Already Been Used');
				redirect(base_url('player_panel/redeemcode'),'refresh');
			}
			else
			{
				$sth2 = $connec->prepare("SELECT * FROM item_code WHERE item_code = '".$item_code."'");
				$sth2->execute();
				$result2 = $sth2->fetch(PDO::FETCH_ASSOC);
				if($result2)
				{
					$stmt = $connec->query("SELECT * FROM item_code WHERE item_code = '".$item_code."'");
					while ($row = $stmt->fetch()) 
					{
						$ISp_Res = $connec->prepare("INSERT INTO check_user_itemcode (uid,item_code) VALUES(?, ?)");
						$ISp_Res->execute(array($_SESSION['uid'], $item_code));
						if ($row['cash'] != "") 
						{
							$stmt2 = $connec->query("SELECT * FROM accounts WHERE player_id = '".$_SESSION['uid']."'");
							while ($row2 = $stmt2->fetch()) 
							{
								// Checking If Redeem Code Is Cash
								$moneyGet = $row2['money'] = $row2['money'] + $row['cash'];
								$sql = 'UPDATE accounts '. 'SET money = :mn '. 'WHERE player_id = :p_id';
								$stmt = $connec->prepare($sql);
				                $stmt->bindParam(':mn', $moneyGet, PDO::PARAM_STR);
				                $stmt->bindParam(':p_id', $_SESSION['uid'], PDO::PARAM_STR);
				                $stmt->execute();
				                //echo "<script>alert('Congratulation, You Received ".$row['item_alert']."');window.location.href='?page=redeemcode-area';</script>";
				                $this->session->set_flashdata('success', 'Congratulation '.$_SESSION['login'].', You Received '.$row['item_alert'].'');
								redirect(base_url('player_panel/redeemcode'),'refresh');
				            }
				        }
				        else
				        {
				        	$sth = $connec->prepare("SELECT * FROM player_items WHERE owner_id = '".$_SESSION['uid']."' AND item_id = '".$row['item_id']."'");
							$sth->execute();
							$result = $sth->fetch(PDO::FETCH_ASSOC);
							if($result)
							{
								//echo "<script>alert('This Code Has Already Been Used');self.history.back();</script>";
								$this->session->set_flashdata('error', 'You Already Have This Item, Please Use Another Code');
								redirect(base_url('player_panel/redeemcode'),'refresh');
							}
							else
							{
					        	$ISp_Res2 = $connec->prepare("INSERT INTO player_items (owner_id, item_id, item_name, count, category,equip) VALUES(?, ?, ?, ?, ?, ?)");
					        	$ISp_Res2->execute(array($_SESSION['uid'],$row['item_id'],$row['item_name'],$row['item_count'],$row['category'],1));
					        	$this->session->set_flashdata('success', 'Congratulation '.$_SESSION['login'].', You Received '.$row['item_alert'].'');
								redirect(base_url('player_panel/redeemcode'),'refresh');
							}
				        }
				    }
				}
				else
				{
					$this->session->set_flashdata('error', 'This Code Doesnt Exist');
					redirect(base_url('player_panel/redeemcode'),'refresh');
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
				<div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div>
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
						<input type="text" name="redeemcode" class="form-control" minlength="5" maxlength="25" required autofocus>
					</div>
					<div class="form-group text-center">
						<button type="submit" name="submit-redeemcode" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary"><span class="fa fa-paper-plane"></span> &nbsp;Submit</button>
						<button type="reset" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-danger"><span class="fa fa-refresh"></span> &nbsp;Reset</button>
					</div>
				</form>
				<?php
                if ($this->session->flashdata('success'))
                {
                    echo '<div class="nk-gap-2"></div><div class="nk-gap-2"></div>';
                }
                else if ($this->session->flashdata('error')) 
                {
                    echo '<div class="nk-gap-2"></div><div class="nk-gap-2"></div>';
                }
                ?>
				<div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div>
			</div>
		</div>
	</div>
</div>