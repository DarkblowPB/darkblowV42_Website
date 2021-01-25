<?php
session_start();
error_reporting(0);
include 'assets/include.php';
// If Players Already Logged In
if (!empty($_SESSION["uid"])) 
{
?>
<?php
if (isset($_POST['logout'])) 
{
	session_start();
	unset($_SESSION['login']);
	unset($_SESSION['uid']);
	unset($_SESSION['player_name']);
	unset($_SESSION['cash']);
	unset($_SESSION['rank']);
	unset($_SESSION['exp']);
	unset($_SESSION['coin']);
	unset($_SESSION['gp']);
	unset($_SESSION['lastip']);
	unset($_SESSION['password']);
	session_destroy();
	echo "<script>window.location.href='launcher_redeemcode.php';</script>";
}
?>
<?php
if (isset($_POST['submit-code'])) 
{
	$user = pg_escape_string($_POST['username']);
	$uid = pg_escape_string($_POST['uid']);
	$item_code = $_POST['item_code'];

	//Checking If Redeem Code Is Empty
	if($item_code == "")
	{
		echo "<script>alert('Please Insert Your Code');self.history.back();</script>";
	}
	else
	{
		//Checking Redeem Code
		$sth = $connec->prepare("SELECT * FROM check_user_itemcode WHERE uid = '".$uid."' AND item_code = '".$item_code."'");
		$sth->execute();
		$result = $sth->fetch(PDO::FETCH_ASSOC);
		if($result)
		{
			echo "<script>alert('This Code Has Already Been Used');self.history.back();</script>";
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
					$ISp_Res->execute(array($uid, $item_code));
					if ($row['cash'] != "") 
					{
						$stmt2 = $connec->query("SELECT * FROM accounts WHERE player_id = '".$uid."'");
						while ($row2 = $stmt2->fetch()) 
						{
							// Checking If Redeem Code Is Cash
							$moneyGet = $row2['money'] = $row2['money'] + $row['cash'];
							$sql = 'UPDATE accounts '. 'SET money = :mn '. 'WHERE player_id = :p_id';
							$stmt = $connec->prepare($sql);
			                $stmt->bindParam(':mn', $moneyGet, PDO::PARAM_STR);
			                $stmt->bindParam(':p_id', $uid, PDO::PARAM_STR);
			                $stmt->execute();
			                echo "<script>alert('Congratulation, You Received ".$row['item_alert']."');window.location.href='launcher_redeemcode.php';</script>";
			            }
			        }
			        else
			        {
			        	$ISp_Res2 = $connec->prepare("INSERT INTO player_items (owner_id, item_id, item_name, count, category,equip) VALUES(?, ?, ?, ?, ?, ?)");
			        	$ISp_Res2->execute(array($uid,$row['item_id'],$row['item_name'],$row['item_count'],$row['category'],1));
			        	echo "<script>alert('Congratulation, You Received ".$row['item_alert']."');window.location.href='launcher_redeemcode.php';</script>";
			        }
			    }
			}
			else
			{
				echo "<script>alert('This Code Doesnt Exist');self.history.back();</script>";
			}
		}
	}
}
?>
<!DOCTYPE html>
<html style="background-color: #343a40;">
	<head>
		<title>DarkblowPB | Lastest Private Server on 2020</title>
		<!--for-mobile-apps-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Darkblow Pointblank, DarkblowPB, darkblowpb, pointblank private server, point blank private server">
		<meta name="description" content="Lastest Private Server Development On 2020, FPS Genre & Old Style, Updated UI, New Feature, And Much More. So, What are you waiting for? Lets Play immediately and Get Your Rewards!. BRING YOUR NOSTALGIC MOMENT BACK!">
		<meta name="Author" content="DarkblowPB">
		<meta name="Content" content="DarkblowPB Redeem Code Page">

		<!-- CSS -->
		<link rel="stylesheet" href="assets/launcher/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/launcher/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/launcher/launcher.min.css">
		<link rel="stylesheet" type="text/css" href="assets/launcher/darkblow-custom.css">
		<!-- /CSS -->

	</head>
	<body>
		<section>
			<div class="container bg-dark">
				<div class="col-md-12">
					<h4 class="text-center" style="color: white; font-weight: bold; font-style: italic;">
						Hai, <?php echo $_SESSION['login'] ?>
					</h4>
					<form action="" method="POST" class="form-horizontal">
						<div class="form-group">
							<input type="hidden" name="username" value="<?php echo $_SESSION["login"] ?>">
							<input type="hidden" name="uid" value="<?php echo $_SESSION['uid'] ?>">
						</div>
						<div class="form-group">
							<label style="color: white; font-size: 15px; font-weight: bold; font-style: italic; margin-bottom: 15px;">Your Code</label>
							<input type="text" name="item_code" class="form-control" placeholder="Enter Redeem Code" minlength="5" maxlength="25" required>
						</div>
						<br>
						<div class="form-group text-center">
							<button type="submit" name="submit-code" class="btnoriginal btnoriginal-secondary" style="font-weight: bold; font-style: italic;">SUBMIT CODE</button>
						</div>
					</form>
						<div class="form-group text-center">
							<form action="" method="POST">
								<button type="submit" name="logout" class="btnoriginal btnoriginal-danger" style="font-weight: bold; font-style: italic;">LOGOUT</button>
							</form>
						</div>
					<br>
				</div>
				<br>
				<div class="col-md-12">
					<div class="container">
						<footer class="page-footer" style="margin-top: -25px;">
							<div class="footer-copyright text-center py-3" style="font-weight: bold; font-style: italic;">
								<span style="color: white;">Copyright &copy; DARKBLOWPB 2020</span>
							</div>
						</footer>
					</div>
				</div>
			</div>
		</section>
	</body>

	<!-- SCRIPT -->
    <script src="assets/launcher/jquery/dist/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/launcher/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/launcher/popper/src/popper.min.js"></script>
	<!-- /SCRIPT -->

</html>
<?php
}
// If Players Not Login Yet
else
{
?>
<?php
if (isset($_POST['submit-login'])) 
{
	session_start();
	$user = pg_escape_string($_POST['username']);
	$pass = pg_escape_string($_POST['password']);

	function encripitar($pass)
	{
		$salt = '/x!a@r-$r%an¨.&e&+f*f(f(a)';
		$output = hash_hmac('md5', $pass, $salt);
		return $output;
	}

	if($user == "")
	{
	    echo "<script>self.history.back();</script>";
	}
	else if($pass == "")
	{
	    echo "<script>self.history.back();</script>";
	}
	else
	{
	    $sth = $connec->prepare("SELECT * FROM accounts WHERE login = '".$user."' AND password = '".encripitar($pass)."'");
	    $sth->execute();
	    $result = $sth->fetch(PDO::FETCH_ASSOC);
	    if($result)
	    {
	        $stmt = $connec->query("SELECT * FROM accounts WHERE login = '".$user."' AND password = '".encripitar($pass)."'");
	        while ($row = $stmt->fetch()) 
	        {
	            $_SESSION["login"] = $row['login'];
	            $_SESSION["uid"] = $row['player_id'];
	            $_SESSION["player_name"] = $row['player_name'];
			    $_SESSION["cash"] = $row['money'];
			    $_SESSION["rank"] = $row['rank'];
			    $_SESSION["exp"] = $row['exp'];
			    $_SESSION["coin"] = $row['kuyraicoin'];
			    $_SESSION["gp"] = $row['gp'];
			    $_SESSION["lastip"] = $row['lastip'];
			    $_SESSION["password"] = $row['password'];
	        }
	        echo "<script>window.location.href='launcher_redeemcode.php';</script>";

	    }
	    else
	    {
	        echo "<script>self.history.back();</script>";
	    }
	}
}
?>
<!DOCTYPE html>
<html style="background-color: #343a40;">
	<head>
		<title>DarkblowPB | Lastest Private Server on 2020</title>
		<!--for-mobile-apps-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Darkblow Pointblank, DarkblowPB, darkblowpb, pointblank private server, point blank private server" />
		<meta name="description" content="Lastest Private Server Development On 2020, FPS Genre & Old Style, Updated UI, New Feature, And Much More. So, What are you waiting for? Lets Play immediately and Get Your Rewards!. BRING YOUR NOSTALGIC MOMENT BACK!">
		<meta name="Author" content="DarkblowPB">
		<meta name="Content" content="DarkblowPB Redeem Code Page">

		<!-- CSS -->
		<link rel="stylesheet" href="assets/launcher/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/launcher/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/launcher/launcher.min.css">
		<link rel="stylesheet" type="text/css" href="assets/launcher/darkblow-custom.css">
		<!-- /CSS -->

	</head>
	<body>
		<section>
			<div class="container bg-dark">
				<div class="col-md-12">
					<form action="" method="POST">
						<h4 class="text-center" style="color: white; font-weight: bold; font-style: italic;">LOGIN FORM</h4>
						<div class="form-group">
							<br>
							<label style="color: white; font-size: 15px; font-weight: bold; font-style: italic;">Username</label>
							<input type="text" name="username" class="form-control" placeholder="Enter Username" minlength="4" maxlength="16" required>
						</div>
						<div class="form-group">
							<label style="color: white; font-size: 15px; font-weight: bold; font-style: italic;">Password</label>
							<input type="password" name="password" class="form-control" placeholder="Enter Password" minlength="4" maxlength="16" required>
						</div>
						<div class="form-group text-center">
							<button type="submit" name="submit-login" class="btnoriginal btnoriginal-secondary" style="font-weight: bold; font-style: italic;">LOGIN</button>
						</div>
					</form>
						
					<br>
				</div>
				<br>
				<div class="col-md-12">
					<div class="container">
						<footer class="page-footer" style="margin-top: -25px;">
							<div class="footer-copyright text-center py-3" style="font-weight: bold; font-style: italic;">
								<span style="color: white;">Copyright &copy; DARKBLOWPB 2020</span>
							</div>
						</footer>
					</div>
				</div>
			</div>
		</section>
	</body>

	<!-- SCRIPT -->
    <script src="vendors/jquery/dist/jquery-3.2.1.slim.min.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendors/popper/src/popper.min.js"></script>
	<!-- /SCRIPT -->

</html>
<?php
}
?>