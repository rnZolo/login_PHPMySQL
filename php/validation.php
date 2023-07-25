<?php
    //declare the initial value
    $ue = $password = $mess_l =  $err_ue_l = $err_pass_l = $err_class = '';
    $fname = $lname = $username = $email = $password_r = $c_password_r = '';
    $mess_r = $err_fn_r = $err_ln_r = $err_us_r = $err_email_r = $err_pass_r = $err_c_pass_r = '';

    //check if request method is POST
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // echo print_r($_POST);
        //if btn is click
        if(isset($_POST['loginbtn'])){
                //check if array values are empty throw messsage and if not assign new value
                if(empty($_POST['user-l'])){
                    $mess_l = 'Complete the required field *';
                    $err_ue_l = '*';
                }else{
                    $ue = $_POST['user-l'];
                }
                if(empty($_POST['password'])){
                    $mess_l = 'Complete the required field *';
                    $err_pass_l = '*';
                }else{
                    $password = $_POST['password'];
                }

                //declare all required fields
                $required_login =["user-l" => $_POST['user-l'], 'password'=> $_POST['password']];
                //if all req fields are not empty format values
                if(allValid($required_login)){
                    $ue = formatInput($_POST['user-l']);
                    $password = formatInput($_POST['password']);

                    include '../config/config.inc.php';

                    $db = new DB();
                    $sql = "SELECT * FROM user_table WHERE user_stats = ? ";
                    $look_for =  '1';
                    $results = $db->prepared($sql, $look_for);
                    while($row = $results->fetch_assoc()){
                        echo var_dump($row);
                    }
                }
                // config connection
                // create connection
                // create query
                // create session if query matched
        }else if(isset($_POST['regbtn'])){
                //check if array values are empty throw messsage and if not assign new value
                if(empty($_POST['fname-r'])){
                    $mess_r = 'Complete the required field *';
                    $err_fn_r = '*';
                }else{
                    $fname = $_POST['fname-r'];
                }
                if(empty($_POST['lname-r'])){
                    $mess_r = 'Complete the required field *';
                    $err_ln_r = '*';
                }else{
                    $lname = $_POST['lname-r'];
                }
                if(empty($_POST['username-r'])){
                    $mess_r = 'Complete the required field *';
                    $err_us_r = '*';
                }else{
                    $username = $_POST['username-r'];
                }
                if(empty($_POST['email-r'])){
                    $mess_r = 'Complete the required field *';
                    $err_email_r = '*';
                }else{
                    if (filter_var($_POST['email-r'], FILTER_VALIDATE_EMAIL)){
                        $email = filter_var($_POST['email-r'], FILTER_SANITIZE_EMAIL);
                    }else{
                        $mess_r = 'Complete the required field *';
                        $err_email_r = '* invalid email';
                        $email = $_POST['email-r'];
                    }
                }
                if(empty($_POST['password-r'])){
                    $mess_r = 'Complete the required field *';
                    $err_pass_r = '*';
                }else{
                        $password_r = $_POST['password-r'];
                }
                if(empty($_POST['c-password-r'])){
                    $mess_r = 'Complete the required field *';
                    $err_c_pass_r = '*';
                }elseif (!empty($_POST['password-r']) && !empty($_POST['c-password-r'])){
                    if(areMatched($_POST['password-r'], $_POST['c-password-r'])){
                        $c_password_r = $_POST['c-password-r'];
                    }else{
                        $err_c_pass_r = '* Not Matched';
                        $email = $_POST['c-password-r'];
                    }
                }
                //declare all the required field
                // $required_reg =["fname-r" => $_POST['fname-r'], 'lname-r'=> $_POST['lname-r'],
                // 'username-r' => $_POST['username-r'], 'email-r' => $_POST['email-r'], 'password-r' => $_POST['password-r'],
                // 'c-password-r' => $_POST['c-password-r']
                // ]; failed to detect if valid email not throwing a right error
                $required_reg =["fname-r" => $fname, 'lname-r'=> $lname,
                'username-r' => $username, 'email-r' => $email, 'password-r' => $password_r,
                'c-password-r' => $c_password_r
                ];
                if(allValid($required_reg)){
                    $fname = formatInput($fname);
                    $lname = formatInput($lname);
                    $username = formatInput($lname);
                    $email = formatInput($email);
                    $password_r = formatInput($password_r);
                    
                }
                
        }

    }
    function areMatched($x, $y){
        if($x === $y ){
            return true;
        }{
            return false;
        }
    }
    function formatInput($i){
        $i = trim($i);
        $i = stripcslashes($i);
        $i = htmlspecialchars($i);
        return $i;
    }
    function allValid($i){
        foreach($i as $key => $value){
            if(empty($value)){
                $err_class = 'err';
                return false;
            }
        }
        if(isset($_POST['regbtn'])){
            if (!filter_var($_POST['email-r'], FILTER_VALIDATE_EMAIL)){
                return false;
            }
        }
        return true ;
    }
?>