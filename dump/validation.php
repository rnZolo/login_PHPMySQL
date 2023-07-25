<?php
    //check if what request method are being sent to server
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //check if the request send by btn is not null 
        if(isset($_POST['regbtn'])){
            echo print_r($_POST)
            regIsEmpty($_POST);
        }elseif ($_POST['loginbtn']) {
            echo print_r($_POST)
            loginIsEmpty($_POST);
        }else{
            echo "user inputs are empty";
        }
    }



    function regIsEmpty($err){
        foreach($err as $key => $val){
            echo $key. " and ". $val;
            //check which is being validate
            //check if empty and throw error mess
            if($key === 'fname-r'){
                if(empty($key)){
                    $err_fn = 'Username or Email is Required';
                }
            }
            if($key === 'lname-r'){
                if(empty($key)){
                    $err_ln = 'Username or Email is Required';
                }
            }            if($key === 'username-r'){
                if(empty($key)){
                    $err_un = 'Username or Email is Required';
                }
            }
            if($key === 'user-r'){
                if(empty($key)){
                    $err_ln = 'Username or Email is Required';
                }
            }
            if($key === 'email-r'){
                if(empty($key)){
                    $err_em = 'Username or Email is Required';
                }
            }
            if($key === 'password-r'){
                if(empty($key)){
                    $err_pass_r = 'Username or Email is Required';
                }
            }
            if($key === 'c-password-r'){
                if(empty($key)){
                    $err_cpass_r = 'Username or Email is Required';
                }
            }
        }   
    }
    function loginIsEmpty($err){
        foreach($err as $key => $val){
            //check which is being validate
            //check if empty and throw error mess
            if($key === 'user-l'){
                if(empty($key)){
                    $err_ue_l = 'Username or Email is Required';
                }
            }
            if($key === 'password'){
                if(empty($key)){
                    $err_pass_l = 'Username or Email is Required';
                }
            }            
        }   
    }
    // $fname = formatInput($_POST['fname-r'])
    // $lname = formatInput($_POST['lname-r'])
    // $username = formatInput($_POST['username-r'])
    // $email = formatInput($_POST['email-r'])
    // $password = formatInput($_POST['password-r'])
    // $cpassword = formatInput($_POST['c-password-r'])
    // trim, remove backslash and convert char to htmlspclchr(to avoid XSS) user's inputs
    function formatInput($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);

        return $input;
    }
    // echo "Get". "\n";
    // print_r($_POST);
    // echo "Post". "\n";
    // print_r($_POST);
    //echo $_SERVER['SERVER_ADDR']; 'PHP_SELF'
     //     function validate($f){
//         foreach($f as $key => $value){
//             echo  $value. '<br>';
//         if(empty($value)){
//            $err = "Please Complete the Required fields!";
//         }else{
//             $value = formatInput($value);
//             echo $value . ' formated <br>';
//         }
//     }
// }
?>