<?php

if(isset($_POST['button'])){
    $regnumber = $_POST["regnumber"];
    $dateofbirth = $_POST["dateofbirth"];

    $con = mysqli_connect('localhost','root','','srms');

    if(!$con){
             die(mysqli_error());
         }

         $result = mysqli_query($con, "SELECT * FROM stu_reg WHERE registernumber LIKE '1234567844' ");
         $row = mysqli_fetch_assoc($result);
         if( $row['registernumber'] == $regnumber){
         if(mysqli_num_rows($result) > 0){
          
         $result = mysqli_query($con, "SELECT * FROM stu_reg WHERE dob LIKE '2002-01-01' ");
         $row = mysqli_fetch_assoc($result);
         if( $row['dob'] == $dateofbirth){
 
            header("Location: hemanth.html");

            // $result = mysqli_query($con, "SELECT * FROM stu_reg WHERE dob = '$dateofbirth' ");
            // $row = mysqli_fetch_assoc($result);
   
            // if(mysqli_num_rows($result) > 0){
            //         header("Location: hemanth.html");
            //  }    
    }else{
        echo "<script> alert('Enter Correct Register Number Or Date of birth') </script>";
    }
}
}
        elseif($result = mysqli_query($con, "SELECT * FROM stu_reg WHERE registernumber LIKE '1234567823' ")){   //else if started...
            $row = mysqli_fetch_assoc($result);
            if( $row['registernumber'] == $regnumber){
            if(mysqli_num_rows($result) > 0){
        
        $result = mysqli_query($con, "SELECT * FROM stu_reg WHERE dob LIKE '2002-02-02'  ");
        $row = mysqli_fetch_assoc($result);
         if( $row['dob'] == $dateofbirth){

            header("Location: dhanushkannan.html");

    }else{
        echo "<script> alert('Enter Correct Register Number Or Date of birth') </script>";
    }     
        }
    }
   
        elseif($result = mysqli_query($con, "SELECT * FROM stu_reg WHERE registernumber LIKE '1234567849' ")){
            $row = mysqli_fetch_assoc($result);
            if( $row['registernumber'] == $regnumber){
            if(mysqli_num_rows($result) > 0){
        
        $result = mysqli_query($con, "SELECT * FROM stu_reg WHERE dob LIKE '2002-03-03'  ");
        $row = mysqli_fetch_assoc($result);
         if( $row['dob'] == $dateofbirth){

            header("Location: jayabalan.html");

    }else{
        echo "<script> alert('Enter Correct Register Number Or Date of birth') </script>";
    }     
        }
    }
    elseif($result = mysqli_query($con, "SELECT * FROM stu_reg WHERE registernumber LIKE '1234567840' ")){
            $row = mysqli_fetch_assoc($result);
            if( $row['registernumber'] == $regnumber){
            if(mysqli_num_rows($result) > 0){
        
        $result = mysqli_query($con, "SELECT * FROM stu_reg WHERE dob LIKE '2003-04-04'  ");
        $row = mysqli_fetch_assoc($result);
         if( $row['dob'] == $dateofbirth){

            header("Location: haribalan.html");

    }else{
        echo "<script> alert('Enter Correct Register Number Or Date of birth') </script>";
    }     
        }
    }

    elseif($result = mysqli_query($con, "SELECT * FROM stu_reg WHERE registernumber LIKE '1234567834' ")){
        $row = mysqli_fetch_assoc($result);
        if( $row['registernumber'] == $regnumber){
        if(mysqli_num_rows($result) > 0){
    
    $result = mysqli_query($con, "SELECT * FROM stu_reg WHERE dob LIKE '2002-05-05'  ");
    $row = mysqli_fetch_assoc($result);
     if( $row['dob'] == $dateofbirth){

        header("Location: rajesh.html");

}else{
    echo "<script> alert('Enter Correct Register Number Or Date of birth') </script>";
}     
    }
}
else{
    echo "<script> alert('Student not registered') </script>";
}    
    }     
        } 
    } 
}     //else if ending...

    else{
        echo "<script> alert('Student not registered') </script>";
     }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Login</title>
    <style>
        body
    {
        background-image: url("images/background-1.jpg");
    
    background: url(images/background-1.jpg)no-repeat center center fixed;
    background-attachment: fixed;  
    background-size: cover;
    }
    .header{
        text-align:center;
    }
    .auto{
        margin-top: -20px;
    }
    .add{
        margin-top: -10px;
    }
    .result{
            margin-left: 260px;
            margin-top: 80px;
            font-size: 30px;
            font-family: sans-serif;
        }
        .container{
            width: 400px;
            height: 290px;
            background-color: white;
            border-radius: 5%;
            margin-left: 200px;
        }
        form{
            width:25rem;
            height: 28rem;
            display: flex;
            flex-direction: column;
        }
        label{
            margin-top: 20px;
            font-size: 20px;
            margin-left: 10%;
        }
        input{
            width:80%;
            margin:5% auto;
            margin-bottom: 8%;
            border:none;
            outline: none;
            background: transparent;
            border-bottom: 1px solid black;
            opacity: .8;
        }
        button{
            width:50%;
            margin:3% auto;
            padding:2px;
        }
        .anger{
            text-align:center;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 class="head"> HR Institute Of Technology</h1> 
        <p class ="auto">(Autonomous)</p>
        <p class="add">
            K.R.Nagar,Nallatinputhur,Kovilpatti-628501,Thoothukudi(Dt)<br>  
            E-Mail:principal.hr.edu.in    Web Page:www.hr.edu.in    contact us:6369251706. 
        </p>
    </div>
    <h2 class="result"> Results 2022 & 2023</h2>
    <div class="container">
        <form class="login" action="" method="POST">
            <label>Register Number</label>
            <input type="text" class = regnumber name="regnumber" placeholder="" required="">
            <label>Date of Birth</label>
            <input type="date" class="dateofbirth" name="dateofbirth" placeholder="" required="">
        <button class="butt" name="button">Submit</button>
        <!-- <a href="index.php" class ="anger">Student Registration</a> -->
    </div>
</body>
</html>
