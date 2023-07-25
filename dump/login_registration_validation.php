<?php
//default value for err container
$err = $err_ue_l = $err_pass_l = '';
//check if the request method
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //check if btn is cllick and the request is not null using 
        if(isset($_POST['loginbtn'])){
            // echo print_r($_POST). '<br>';
            // check if required fields empty, then throw error
            $required_login =["user-l" => $_POST['user-l'], 'password'=> $_POST['password']];
            validate($required_login);
            // validate($_POST);
        }elseif (isset($_POST['regbtn'])){
            // echo print_r($_POST);
            //check if required fields empty, then throw error
            $required_reg =["fname-r" => $_POST['fname-r'], 'lname-r'=> $_POST['lname-r'],
            'username-r' => $_POST['username-r'], 'email-r' => $_POST['email-r'], 'password-r' => $_POST['password-r'],
            'c-password-r' => $_POST['c-password-r']
            ];
            // validate($required_reg);
            validate($_POST);
        }
        
    //check if the inputs if valid using filter_var()
    }

        function validate($i){
            $user_email = $pass = $fname = 
            $lname = $username = $email = $pass_hash = '';

            foreach($i as $key => $value){
                //use isset and use empty
                if(isset($value)){
                    echo $value . ' and ' . $key . '<br>';
                    if(empty($value)){
                        $err = 'Complete the required field *';
                        if($key == 'user-1'){
                          return  $err_ue_l = 'Required';
                        }
                        if($key == 'password'){
                            $err_pass_l = "Required";
                        }
                        if($key == 'fname-r'){
                            $err_ue_l = 'Required';
                        }
                        if($key == 'lname-r'){
                            $err_ue_l = 'Required';
                        }
                        if($key == 'username-r'){
                            $err_ue_l = 'Required';
                        }
                        if($key == 'email-r'){
                            $err_ue_l = 'Required';
                        }
                        if($key == 'password-r'){
                            $err_ue_l = 'Required';
                        }
                        if($key == 'c-password-r'){
                            $err_ue_l = 'Required';
                        }
                    }else{
                      //if not empty
                    }
                }else{
                    echo $key . 'is null'. '<br>';
                }
            }
    }

    function formatInput($i){
        $i = trim($i);
        $i = stripcslashes($i);
        $i = htmlspecialchars($i);
        return $i;
    }

?>

