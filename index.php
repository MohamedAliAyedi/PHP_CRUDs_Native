<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="dali.css" />
</head>
<body>
    <div class="dali">
        <h2>  Liste des etudiant DSI 2 ISET 2019 </h2>
   </div><br>
   <div class="container">
    <a href="create.php" ><input class="btn btn-primary" type="submit" value="Nouvel Etudiant"></a>
<table class="table" >
   <tr>
        <th class="table-dark th">ID</th>
        <th class="table-dark th">FirstName</th>
        <th class="table-dark th">LastName</th>
        <th class="table-dark th">Email</th>
        <th class="table-dark th">phone</th>
        <th class="table-dark th">option</th>

    </tr>


<?php

require("dbconnexion.php");
$rep =$cnx->query('SELECT * FROM students');
while($data= $rep->fetch()){
    echo '<tr>';
    echo '<td>'.$data['id'].'</td>';
    echo '<td>'.$data['firstname'].'</td>';
    echo '<td>'.$data['lastname'].'</td>';
    echo '<td>'.$data['email'].'</td>';
    echo '<td>'.$data['phone'].'</td>';
    echo "<td><a href=\"edit.php?id=$data[id]\">Edit</a> |

    
         <a href=\"delete.php?id=$data[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
         </td>";	
 
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
