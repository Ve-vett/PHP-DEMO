<!-- php code with variable data asssignment -->
<!-- internal php, external php -->

<?php
//create a variables
$username = "BSIT BA 3101";
$user_id = 12345;
$user_num = 123456789;
$user_gender = "female";
?>

<?php include 'pure.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> PHP DEMO BSIT BA 3101 </title>
</head>

<body>
    <!-- <h1> Hello World </h1> -->
    <?php // echo "<h1>Hello World</h1>"; ?>
    <a href="index.php"> Next Page </a> 
    <a href="email.php"> Email Page </a>

    <h1> Shortcut of echo: <?= $username?> </h1>
    <h2> Username: <u><?php echo $username; ?></u> </h2>
    <h2> User ID: <u><?php echo $user_id; ?></u> </h2>
    <h2> User Number: <u><?php echo $user_num; ?></u> </h2>
    <h2> User Gender: <u><?php echo $user_gender; ?></u> </h2>

    <button type="button" onclick="greetUser()"> Greet User </button>

    <script>
        //variables
        var username = "<?php echo $username?>";
        var userID = "<?php echo $user_id?>";
        var user_number = "<?php echo $user_num?>";
        var user_gender = "<?php echo $user_gender?>";

        //function
        function greetUser(){
            alert ("Hello " +username+ " "+"Your UserID is: "+userID+ ", User Number: " +user_number+ ", User Gender: " +user_gender+" ");
        } 

    </script>

</body>
</head>
</html>