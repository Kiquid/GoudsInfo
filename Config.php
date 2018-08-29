<?php

    class DataBaseConnection 
    {
        public function store_contact_details()
       {
        $ConnectionString = mysqli_connect("localhost","root","","gouds_info");//connecting to localhost
        if(!$ConnectionString)
        {
             //checking for database existence
        die("connection failed :". mysqli_connect_error());
        }else{
     
            $First_Name   = $_POST['First_Name'];
            $Last_Name    = $_POST['Last_Name'];
            $Phone_Number = $_POST['Phone_Number'];
            $Email         = $_POST['Email'];
            $Message      = $_POST['Message'];
            
            $QueryString = $ConnectionString->prepare("INSERT INTO contact (First_Name, Last_Name, Email,
           Phone_Number,Message) VALUES (?, ?, ?,?,?)");
            $QueryString->bind_param("sssss", $First_Name, $Last_Name, $Email,$Phone_Number,$Message);
            $QueryString->execute();    
            echo
             "<center>
                 <div class=\"alert alert-success\">
                    <strong>Thank you $First_Name $Last_Name!</strong> Our Representative will Contact you in 24hrs.
                </div>
            </center>";     
        
           $QueryString->close();
            $ConnectionString->close();
        }
        
       }
       public function User_SignUp(){
        $ConnectionString = mysqli_connect("localhost","root","","gouds_info");//connecting to localhost
        if(!$ConnectionString)
        {
             //checking for database existence
        die("connection failed :". mysqli_connect_error());
        }
        else {
            $UserName            = $_POST['user_name'];
            $UserEmail           = $_POST['user_email'];
            $UserPassword        = $_POST['user_password'];
            $userConfirmPassword = $_POST['user_confirm_password'];
           
            if (preg_match("/^[a-zA-Z ]*$/",$UserName)) {
                if (preg_match('/^(?=.*\d)(?=.*[A-Za-z]).{8,12}$/',$UserPassword)) {
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
          
       } 
       /*  
       public function User_SignIn(){
        $ConnectionString = mysqli_connect("localhost","root","","gouds_info");//connecting to localhost
           $SignInName = $_POST['user_name'];
           $SignInPassword = md5($_POST['user_pass']);
           //echo $SignInName,$SignInPassword;

           $UserRegisterQuery = "SELECT * from users where user_email ='$SignInName' and 
           user_password = '$SignInPassword'";
           $UserRegisterValidation = $ConnectionString->query($UserRegisterQuery);
            if ($UserRegisterValidation->num_rows==0) {
               echo  "<center>
               <div class=\"alert alert-danger\">
                  <strong>Register first !</strong> 
              </div>
          </center>";;
            } else {
               
              //echo  '<meta content="0; url=listing_submit.php" />';
            //header('Location:listing_submit.php');
            //exit;
             
             //exit;
             session_start();
             $_SESSION['email'] =  $SignInName;
             //header('Location:listing_submit.php');
             echo "<script> window.location.assign('listing_submit.php'); </script>";
             
             
                          
            }
            


       }      */
    }
    

?>