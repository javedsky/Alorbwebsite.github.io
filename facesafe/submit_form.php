
<?php
include("db.php");
include("mail.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['name']) and isset($_POST['phone']) and isset($_POST['country']) ){
    $name = mysqli_real_escape_string($conn, $_POST["name"]); 

    $email = '';
    $business_name = '';
    $product_service ='';
    $custom_service = '';
    $city = '';
    $postal_code = '';
    $contact_method = '';
    $buying_for = mysqli_real_escape_string($conn, $_POST["buying_for"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);

    
    if(isset($_POST["city"]))
    {
        $city = mysqli_real_escape_string($conn, $_POST["city"]);
    }
    if(isset($_POST["postal_code"]))
    {
    $postal_code = mysqli_real_escape_string($conn,$_POST["postal_code"]);    
    }
    if(isset($_POST["contact_method"]))
    {
    $contact_method = mysqli_real_escape_string($conn,$_POST["contact_smethod"]);
    }

    if(isset($_POST["business_name"]))
    {
        $business_name = mysqli_real_escape_string($conn, $_POST["business_name"]);
    }
    if(isset($_POST["product_service"]))
    {
    $product_service = mysqli_real_escape_string($conn,$_POST["product_service"]);    
    }
    if(isset($_POST["email"]))
    {
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    }
    
    if(isset($_POST["custom_service"]))
    {
        $custom_service = mysqli_real_escape_string($conn, $_POST["custom_service"]);

    }
   
    $product = "FACESAFE";
    
    $query = "INSERT INTO `Quote_facesafe`(`product`, `name`, `email`, `city`, `phone`, `country`, `postal_code`, `contact_method`, `Business_name`, `product_service`, `buying_for`, `custom_service`) 
    VALUES ('$product','$name','$email','$city','$phone','$country','$postal_code','$contact_method','$business_name','$product_service','$buying_for','$custom_service')";

    $sql=mysqli_query($conn,$query);
    
    if($sql){
        $alert = true;
        
        $to   = 'balarajutk26@gmail.com';
        $from = 'connect@alorb.in';
        $company_name = 'Alorb Tech';
        $subj = 'Contact Form - '. $name;
        $msg = $name ." submitted form in " . $product . " Email: ". $email." Phone: " . $phone ." customer message:  ".$custom_service. " Customer Details \r\n
        Postal Code ". $postal_code . "\r\n Country : ". $country . "\r\n contact Method : ". $contact_method . " \r\n Business Name: ".$business_name." \r\n Quantity: ".$buying_for ;
       
        $error=smtpmailer($to,$from, $company_name ,$subj, $msg);
      
        echo 'Thank You, Our team will reach you sooon';

    }

    else{
        $alert = false;
        echo 'Please try again later...';
    }
   

}

else{
    $alert = false;
    echo 'Please fill all fields';
}
}

?>