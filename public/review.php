<?php

require "../config.php";

if (isset($_POST['submit'])) {

    try {
        $connection = new PDO($dsn, $username, $password, $options);

        $new_donor = array(
            "lastname" => $_POST['lastname'],
            "firstname" => $_POST['firstname'],
            "streetaddress" => $_POST['streetaddress'],
            "city" => $_POST['city'],
            "stateregion" => $_POST['stateregion'],
            "country" => $_POST['country'],
            "postalcode" => $_POST['postalcode'],
            "phonenumber" => $_POST['phonenumber'],
            "email" => $_POST['email'],
            "preferredcontact" => $_POST['preferredcontact'],
            "donationfrequency" => $_POST['donationfrequency'],
            "donationsum" => $_POST['donationsum'],
            "donationcurrency" => $_POST['donationcurrency'],
            "comments" => $_POST['comments']
        );

        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "donors", 
            implode(",", array_keys($new_donor)), 
            ":" . implode(", :", array_keys($new_donor))
        );

        $statement = $connection->prepare($sql);
        $statement->execute($new_donor);

    } catch(PDOException $error) {	
		echo $sql . "<br>" . $error->getMessage();
        echo "Sorry, please hit the back button, fill out all fields and try again!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../css/styles.css"/>
        <title>Thank you!</title>
    </head>
    <body class="container">

        <h1>Thank you!</h1>
        <h2>Please confirm your information.</h2>
        <table>
            <caption>You submitted...</caption>
            <tbody>
                <tr>
                    <td>Last Name:</td>
                    <td><?php echo $_POST['lastname'] ?></td>
                </tr>
                <tr>
                    <td>First Name:</td>
                    <td><?php echo $_POST['firstname'] ?></td>
                </tr>
                <tr></tr>
                <tr>
                    <td>Street Address:</td>
                    <td><?php echo $_POST['streetaddress'] ?></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><?php echo $_POST['city'] ?></td>
                </tr>
                <tr>
                    <td>State/Region:</td>
                    <td><?php echo $_POST['stateregion'] ?></td>
                </tr>
                <tr>
                    <td>Country:</td>
                    <td><?php echo $_POST['country'] ?></td>
                </tr>
                <tr>
                    <td>Postal Code:</td>
                    <td><?php echo $_POST['postalcode'] ?></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><?php echo $_POST['phonenumber'] ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo $_POST['email'] ?></td>
                </tr>
                <tr>
                    <td>Preferred Mode of Contact:</td>
                    <td><?php echo $_POST['preferredcontact'] ?></td>
                </tr>
                <tr>
                    <td>You submitted a <?php echo $_POST['donationfrequency'] ?> donation of <?php echo $_POST['donationsum'] ?> <?php echo $_POST['donationcurrency'] ?>.</td>
                </tr>
                <tr>
					<td>Your total projected yearly donation is <?php 
            			if($_POST['donationfrequency']=="monthly") {
                			echo $_POST['donationsum']*12;
            			} else {
                			echo $_POST['donationsum'];
            			}
         			?> <?php echo $_POST['donationcurrency'] ?>. 
					</td>
				</tr>
				<tr>
					<td>In USD, your total projected yearly donation is $<?php 
            			if($_POST['donationfrequency']=="monthly") {
                			if($_POST['donationcurrency']=="Euro") {
                  				echo $_POST['donationsum']*1.18*12;
                			} else if ($_POST['donationcurrency']=="BTC"){
                    			echo $_POST['donationsum']*59245*12;
                			} else {
                    			echo $_POST['donationsum']*12;
                			}
            			} else {
                			if($_POST['donationcurrency']=="Euro") {
                    			echo $_POST['donationsum']*1.18;
                			} else if ($_POST['donationcurrency']=="BTC"){
                    			echo $_POST['donationsum']*59245;
                			} else {
                    			echo $_POST['donationsum'];
                			}
            			}?>.    
					</td>
				</tr>
            </tbody>
        </table>
        <br>
       	<button type="button" id="confirm">Confirm</button>
		<script>
   			var press = document.getElementById("confirm");
   		
		    press.addEventListener("click", function (event) {
      		alert("Thank you so much! Someone will be in touch with you shortly.")
   		})
		</script>
		<button type="button" id="cancel">Cancel</button>
		<script>
   			var press = document.getElementById("cancel");
   			press.addEventListener("click", function (event) {
				event.preventDefault();
 				window.location.replace("createdonor.php");
				return false; 
			}
		)
		</script>
	</body>
</html>


