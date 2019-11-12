<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
<?php
include("dbconnexion.php");
 $id = intval($_POST['id']);
 $fn = $_POST['firstname'];
 $ln = $_POST['lastname'];
 $em = $_POST['email'];
 $ph = intval($_POST['phone']);

$send= $cnx->prepare(
    "INSERT INTO students (id,firstname,lastname,email,phone)
    VALUES (:param_id, :param_fname, :param_lname, :param_email, :param_phone)"
    );

 $send->bindParam(':param_id',$id);
 $send->bindParam(':param_fname',$fn);
 $send->bindParam(':param_lname',$ln);
 $send->bindParam(':param_email',$em);
 $send->bindParam(':param_phone',$ph);
$send->execute();
if($send){
    echo "<h3>Insert Sucsses</h3>";
    sleep(5);
    header("Location:index.php");
}
else{
   echo "<h3>Insert Not Sucsses</h3>";
}


?>








<!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>