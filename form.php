
<html>
    <head>
	    <title>Form</title>
	    <link rel="stylesheet" type="text/css" href="assests/myStyles.css">
    </head>
    <body>   
    <?php
        // pre_r($_POST);
        // pre_r($_GET);
        // pre_r($_REQUEST);
        // if(isset($_POST['submit'])){
        //     //the post fprm has been submitted
        //     echo "The form is using POST method <br>";

        //     echo "First Name :" .$_POST['first_name']. '<br>';
        //     echo "Last  Name :" .$_POST['last_name']. '<br>';
        // }
        // elseif(isset($_GET['submit'])){

        //     echo "The form s using GEt Method!c<br>";
        //     echo "First Name :".$_GET['first_name']. '<br>';
        //     echo "Last  Name :" .$_GET['last_name']. '<br>';
        // }

			

        ?>
        <!-- <form action=" " method="GET">
			<label>First Name</label>
			<input type="text" name="first_name" placeholder="Enter First Name" value=""><br><br>	
			<label>Last Name</label>
			<input type="text" name="last_name" placeholder="Enter Last Name" valur=""><br><br>
            <input type="Submit" name="submit" value="submit">
        </form> -->



	<div id="header">
		<div class="logo">
			<!-- <img src="images/apple.png" width="60px"> -->
		</div>
		<div class="nav">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="">About Us</a></li>
				<li><a href="">Products</a></li>
				<li><a href="">Contact Us</a></li>
				<li><a href="form1.php">Register</a></li>
			</ul>
		</div>
	</div>

	<div class="col-md-4" >
		<div class="pad-10">
			
		</div>
	</div>

	<div id="midsection" >
		<div style="padding: 10px">
            <form action=" " method="GET">
                <label>First Name</label>
                <input type="text" name="first_name" placeholder="Enter First Name" value=""><br><br>	
                <label>Last Name</label>
                <input type="text" name="last_name" placeholder="Enter Last Name" valur=""><br><br>
                <input type="Submit" name="submit" value="Submit">
            </form>
	    </div>
	</div>

	<div class="col-md-4">
		<div class="pad-10">
			
		</div>
	</div>
	<div id="footer">
		All Rights Reserved Copright @ Company
	</div>




    </body>
</html>

<?php

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';

}
