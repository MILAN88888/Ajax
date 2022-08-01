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
        echo  "<table><tr><td>ID</td><td>Name</td><td>Contact</td></tr>";        
        foreach($res as $x)
        {
           echo "<tr><td>";
           echo $x['id'];
           echo "</td><td>";
           echo $x['Name'];
           echo "</td><td>";
           echo $x['Contact'];
           echo "</td></tr>";  
        }
        echo "</table>";
    }


?>