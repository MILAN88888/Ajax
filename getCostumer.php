<?php
    include('db.php');
    $db = new db();
    $con = $db->getConnection();
    $str = $_GET['q'];
    $x = " "; 
    if(isset($str))
    {
        $qry = "select * from costumer where Address = '$str' ";
        $res = mysqli_query($con,$qry);
        echo  "<table><tr><td>ID</td><td>Name</td><td>Contact</td><td>Edit</td></tr>";        
        foreach($res as $x)
        {
           echo "<tr><td>";
           echo $x['id'];
           echo "</td><td>";
           echo $x['Name'];
           echo "</td><td>";
           echo $x['Contact'];
           echo "</td><td>";
           echo "<button>edit</button>";
           echo "</td></tr>";  
        }
        echo "</table>";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <script src="js/index.js"></script> 
</body>
</html>