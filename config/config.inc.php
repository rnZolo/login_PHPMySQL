<?php 
// //declare connection variables
// $servername = 'localhost';
// $s_username = 'root';
// $s_password = '';
// $dbname = 'lim';

// //create connection
// $conn = new mysqli($servername,$s_username, $s_password, $dbname);
// //check connection
// if($conn->connect_error){
//     die('error: '. $conn->connect_error);
// }else{
//     //declare a query
//     $sql = "SELECT * FROM user_table";

//     //using connection chain to query to get the result and stored in result
//     $result = $conn->query($sql);

//     //check if result row is 0
//     if($result->num_rows > 0){
//         echo 'results found'. '<br>';
//         // echo var_dump($result->fetch_assoc()) . '<br>';
//         // echo print_r($result->fetch_assoc()) . '<br>';
//         //just html format to retain the actual format
//         echo '<pre>';
//         // using fetchassoc to get every row as associative array from $result and stored in $row
//         while($row = $result->fetch_assoc()){
//         //    var_dump($row);
//         echo "id = " . $row['id'] . "name = " . $row['first_name'];
//         echo '<br>';
//         }
//         echo '</pre>';
//     }else{
//         echo 'no record';
//     }
// }
// OOP version of mysqli
class DB {
    //declare private variables (only accessible within this class)
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'lim';
    private $conn;

    // in every instance this function will assign each variables 
    public function __construct(){
        //create connection
        $this->conn = new mysqli($this->servername,
        $this->username,
        $this->password, 
        $this->database);
    }
    // this will return the created connection
    public function connect() {
        return $this->conn;
    }
    //this will create a query and give results
    public function query($sql){
        // query that select all users in user table
        // $sql = "SELECT * FROM user_table"; as param to be dynamic
        //use this clss connection and send query sql and store to reuslt
        $result = $this->connect()->query($sql);
        // echo '<pre>'; //html tag to retain the pre-format
        // using fetchassoc to get every row as associative array from $result and stored in $row
        // while($row = $result->fetch_assoc()){
        //     echo var_dump($row);
        // }
        // echo '</pre>';
        return $result;
    }
    public function prepared($sql , $condition) {
        // $sql = "SELECT * FROM user_table where user_type = ? ";as param to be dynamic
            //prepare the statements
        //use this connection and set this query

        $stmnt = $this->connect()->prepare($sql);
        // $admin = '0';as param to be dynamic
        // a chain function that will bind the user input to ?EB.
        // 's' means string and it counts of expected input is 1 therefore if it is 'sis' it expect a string,int,string
        // 2nd param is the input val
        $stmnt->bind_param('s', $condition);
        //execute the prepared statements
        $stmnt->execute();
        
        //get the result of the prepared statement
        $result = $stmnt->get_result();
        //     // using fetchassoc to get every row as associative array from $result and stored in $row
        // while($row = $result->fetch_assoc()){
        //    echo var_dump($row);
        // }
        // echo '</pre>';
        return $result;
    }

}
?>