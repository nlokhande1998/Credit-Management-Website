<?php
    require_once('db_connect.php'); //connect to database

    $name = $_GET['name'];
    $query = "select * from users where NAME='" . $name . "'";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_array($result);
    
    $query = "select NAME from users where NAME<>'" . $row['NAME'] . "'";
    $result = mysqli_query($link,$query);

    if(isset($_POST['transfer'])) {
        if($_POST['credits_tr'] > $row['CURRENT CREDITS']) {
            echo "Credits transferred cannot be more than " . $row['CURRENT CREDITS'] . "<br>";
        }

        else {
            $query = "update users set `CURRENT CREDITS`=`CURRENT CREDITS`-" . $_POST['credits_tr'] . " where NAME='" . $row['NAME'] . "'";
            mysqli_query($link,$query);

            $query = "update users set `CURRENT CREDITS`=`CURRENT CREDITS`+" . $_POST['credits_tr'] . " where NAME='" . $_POST['to_user'] . "'";
            mysqli_query($link,$query);

            $query = "insert into transfers values('" . $row['NAME'] . "','" . $_POST['to_user'] . "'," . $_POST['credits_tr'] . ")";
            mysqli_query($link,$query);

            header("Location: index1.php");
        }
    }
?>

<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Transfer Credits</title>
    </head>

    <body>
		<div class="container mt-2 mb-4 p-2 shadow bg-white">
			<a href="index1.php">&lt; Back</a>
			<br><br>
			Welcome <?php echo $row['NAME'] ?>,
			<br>
			ID: <?php echo $row['ID'] ?>
			<br>
			Email ID: <?php echo $row['EMAIL'] ?>
			<br>
			Phone: <?php echo $row['PHONE'] ?>
			<br>
			Your credits are: <?php echo $row['CURRENT CREDITS'] ?>
			<br><br>
		</div>
		<div class="container mt-2 mb-4 p-2 shadow bg-white">
			<form action="#" method="post">
				<fieldset>
					<legend>Transfer Details</legend>
					Credits: <input type="number" name="credits_tr" min =0 value=1 required>
					<br><br>
					Transfer to: <select NAME="to_user" required>
						<option value =""></option>

					<?php
							while($tname = mysqli_fetch_array($result)) {
								echo "<option value='" . $tname['NAME'] . "'>" . $tname['NAME'] . "</option>";
							}
					?>

					</select>
					<br>
				</fieldset>
				<br>
				<input type="submit" name="transfer" value="Transfer" class="btn btn-primary">
			</form>
		</div>
    </body>
</html>
