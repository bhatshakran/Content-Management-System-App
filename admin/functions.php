<?php



// Check whether there where any errors with your query or not
function confirm($result) {
    global $connection;
    
    if(!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
    
 
}

// Utility Redirect function

function redirect($location) {

    return header("Location:" .$location);
}


// sanitize text inputs inorder to avoid sql injections
function sanitize($conn,$string) {
    return mysqli_real_escape_string($conn,$string);
}

function create_category () {

    global $connection;

    if ( isset( $_POST['submit'] ) ) {
        $cat_title = $_POST['cat_title'];

        if ( $cat_title ==  "" || empty( $cat_title ) ) {

            echo "This field should not be empty";

        } else {

            $query =  "INSERT INTO categories(cat_title) ";
            $query .= "VALUE('{$cat_title}') ";

            $create_category_query = mysqli_query( $connection, $query );

            if ( !$create_category_query ) {

                die( "QUERY FAILED" . mysqli_error( $connection ) );

            }
            header( "Location: categories.php" );

        }
    }

}

function find_all_categories () {
    global $connection;
    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query( $connection, $query );

    while( $row = mysqli_fetch_assoc( $select_categories ) ) {
        $cat_title = $row['cat_title'];
        $cat_id = $row['id'];
        echo "<tr></tr>";
        echo "
                                    <td class='tabledata'>{$cat_id}</td>
                                    ";
        echo "
                                    <td class='tabledata'>{$cat_title}</td>
                                    ";
        echo "
                                    <td class='text-indigo-600 tabledata'><a href='categories.php?delete={$cat_id}'>Delete</a></td>
                                    ";
        echo "
                                    <td class='text-red-600 tabledata'><a href='categories.php?edit={$cat_id}'>Edit</a></td>
                                    ";
        echo "<tr></tr>";
    }
}

function delete_category () {
    global $connection;
    if ( isset( $_GET['delete'] ) ) {

        $the_cat_id = $_GET['delete'];
        $query = "DELETE FROM categories WHERE id = {$the_cat_id} ";

        $delete_query = mysqli_query( $connection, $query );
        header( "Location: categories.php" );
    }

}


// is admin function
function is_admin($username= '') {
    global $connection;

    $query = "SELECT user_role FROM users WHERE username ='username'";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);

    if($row['user_role'] == 'admin') {
        return true;
    }else {
        return false;
    }
}

// check whether the username exists in the databse or not
function username_exists($username) {
    global $connection;

    $query = "SELECT username FROM users WHERE username='{$username}'";
    $result = mysqli_query($connection, $query);
    confirm($result);
    if(mysqli_num_rows($result) == 0) {
        return false;
    }elseif(mysqli_num_rows($result) !== 0) {
        return true;
    }
}


// check whether the email exists in the databse or not
function email_exists($email){
    global $connection;

    $query = "SELECT user_email FROM users WHERE user_email='$email'";
    $result = mysqli_query($connection, $query);
    confirm($result);
    

    if(mysqli_num_rows($result) == 0) {
        return false;
    }else {
        return true;
    }

}


// register user function

function register_user($username, $email, $password) {


        global $connection;



        $username = trim(sanitize($connection, $username));
        $email = trim(sanitize($connection, $email));
        $password = trim(sanitize($connection, $password));
    
    
        
    
        $enc_password = password_hash($password, PASSWORD_BCRYPT);
    
        $query = "INSERT INTO users (username, user_email, user_password, user_role)";
    
        $query .= "VALUES('{$username}', '{$email}', '{$enc_password}' , 'subscriber')";
    
    
        $register_user_query = mysqli_query($connection, $query);
       
        confirm($register_user_query);
          echo " <p class='w-full p-4 mb-4 text-white bg-green-500'> Registration succesfull </p>";
    
       
}


// login user function
function login_user($username, $password) {

    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];

    $cleaned_username = trim(sanitize( $connection, $username ));
    $cleaned_password = trim(sanitize( $connection, $password ));

    $query = "SELECT  * FROM users WHERE username = '{$cleaned_username}' ";

    $select_user_query = mysqli_query( $connection, $query );

    confirm($select_user_query);

    while( $row = mysqli_fetch_array( $select_user_query ) ) {

        $db_user_id = $row['user_id'];
        $db_username = $row['username'];
        $db_user_firstname = $row['user_firstname'];
        $db_user_lastname = $row['user_lastname'];
        $db_user_password = $row['user_password'];
        $db_user_role = $row['user_role'];

    }
    $password = password_verify($cleaned_password, $db_user_password );

    if ($username !== $db_username && $password !== $db_user_password ) {

        redirect("../index.php");

    } else if ( $username === $db_username && $password == $db_user_password ) {

        $_SESSION['username'] = $db_username;
        $_SESSION['user_id'] = $db_user_id;
        $_SESSION['firstname'] = $db_user_firstname;
        $_SESSION['lastname'] = $db_user_lastname;
        $_SESSION['role'] = $db_user_role;
         
        redirect("./admin/index.php");

    } 
}




?>