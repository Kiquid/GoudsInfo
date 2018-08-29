<?php
$ConnectionString = mysqli_connect("localhost","ekapqjea_Gouds","Gouds@info","ekapqjea_gouds_info");//connecting to sever
//$ConnectionString = mysqli_connect("localhost","root","","gouds_info");//connecting to localhost
if(!$ConnectionString)
{
     //checking for database existence
die("connection failed :". mysqli_connect_error());
}
else {
    $UserName            = $_POST['name'];
    $UserEmail           = $_POST['email'];
    $UserPassword        = $_POST['password'];
    $userConfirmPassword = $_POST['Confirm_password'];
if(filter_var($UserEmail,FILTER_VALIDATE_EMAIL)== true){
    if (preg_match("/^[a-zA-Z ]*$/",$UserName)) {
        if (preg_match('/^(?=.*\d).{8,12}$/',$UserPassword)) {
            if ($UserPassword == $userConfirmPassword) {
                $encrypted_password = md5($UserPassword);
                $check_email = "SELECT * from users where user_email='$UserEmail'";
                $EmailValidation=$ConnectionString->query($check_email);
                if ($EmailValidation->num_rows!=0) {
                   echo  "<center>
                   <div class=\"alert alert-success\">
                      <strong>User already!</strong> 
                  </div>
              </center>";
                } else {
                   $NewUserQuery = $ConnectionString->prepare("INSERT into users(user_name,user_email,user_password)
                   values(?,?,?)");
                   $NewUserQuery->bind_param("sss",$UserName,$UserEmail,$encrypted_password);
                   $NewUserQuery->execute();
                   echo
                   "<center>
                       <div class=\"alert alert-success\">
                          <strong>Thank you!.</strong> 
                      </div>
                  </center>";
                    
                        
                }
                

            } else {
                echo
            "<center>
                <div class=\"alert alert-danger\">
                   <strong>Password Didn't match.</strong> 
               </div>
           </center>"; 
            }
            
        } else {
            echo
            "<center>
                <div class=\"alert alert-danger\">
                   <strong>Password Should be 8 caracter long and include one alphabet values</strong> 
               </div>
           </center>"; 
        }
                
       
    }else{
        echo
        "<center>
            <div class=\"alert alert-danger\">
               <strong>$UserName please type a valid name</strong> 
           </div>
       </center>"; 
    } 
}
else{
    echo
    "<center>
        <div class=\"alert alert-danger\">
           <strong> $UserEmail  please type a valid Email</strong> 
       </div>
   </center>";
}
   
}

?>