
<?php
include("db.php");
include("mail.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
   if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['message'])){

   
    $name =  mysqli_real_escape_string($conn ,$_POST["name"]); 
  $email =  mysqli_real_escape_string($conn,$_POST["email"]);
  $phone =  mysqli_real_escape_string($conn, $_POST['phone']);
   $message = mysqli_real_escape_string($conn,$_POST["message"]);
    $product = "ALORB";

    
    
    $query = "INSERT INTO `contact_footer`(`name`, `email`, `message`, `phone`) VALUES ('$name','$email','$message','$phone')";

    $sql=mysqli_query($conn,$query);

    echo $sql;

    if($sql){
        $alert = true;
        
        $to   = 'balarajutk26@gmail.com';
        $from = 'connect@alorb.in';
        $companyname = 'Alorb Tech';
        $subj = "Contact Form - " . $name;
        $msg = $name . " submitted form in " . $product . " Email: " . $email . " Phone: " .  $phone . " customer message: " . $message;
       
        $error=smtpmailer($to,$from, $companyname ,$subj, $msg);
        
        echo 'Thank You, Our team will reach you soon';
    }
    else{
        $alert = false;
        echo 'Please try again later...';
    }
    

}
else{return " Please fill all fields";}

}


?>