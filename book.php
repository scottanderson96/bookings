<?php
require('dbconnect.php');

if($_POST["book"]=="book"){
    
    $name=$_POST["namebox"];
    $date=$_POST["datebox"];
    $time=$_POST["timebox"];
    
    $sql = "INSERT INTO bookings (name, date, time) VALUES ('$name', '$date', '$time')";
    

    if(mysqli_query($conn,$sql)){
        echo 'Thanks for the booking';
    }
    else {
        echo "Error".$sql." ".mysqli_error($conn);
    }
    
}

function display_all(){
    
    $myquery = "SELECT * FROM bookings";
    $result=mysqli_query($conn,$myquery);
    if($result){
        
    }
    else {
        echo "Error".$sql." ".mysqli_error($conn);
    }
    
    if($result->num_rows>0){
        //while there is row
        while($row=$result->fetch_assoc()){
            echo " Name ".$row["name"]. " Date ".$row["date"]. " Time ".$row["time"]. "<br/r>";
        }
    }
}//end of function display all
?>