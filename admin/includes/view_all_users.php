     <table class="mt-20 extrasmall glass ">
                            <thead class="border-b ">
                                <tr class="">
                                    
                                    <th class="tabledata">Username</th>
                                    <th class="tabledata">Firstname</th>
                                    <th class="tabledata">Lastname</th>
                                    <th class="tabledata">Email</th>
                                      <th class="tabledata">Role</th>
                                        <th class="tabledata">Action</th>
                                    <th class="tabledata">Action</th>
                                    <th class="tabledata">Action</th>
                                    <th class="tabledata">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
<?php 
    $query = "SELECT * FROM users";
    $select_users = mysqli_query( $connection, $query );

    while( $row = mysqli_fetch_assoc( $select_users ) ) {
        $user_id = $row['user_id'];
        
        $username = $row['username']; 
        
        $user_password = $row['user_password'];                             
        $user_firstname = $row['user_firstname'];                             
        $user_lastname = $row['user_lastname'];                             
        $user_email = $row['user_email'];                             
        $user_image = $row['user_image'];                             
        $user_role = $row['user_role']; 
                          
         
        echo "<tr class =''>";
       
        echo "<td class='tabledata'>$username</td>";
        echo "<td class='capitalize tabledata'>$user_firstname</td>";
        echo "<td class='capitalize tabledata'>$user_lastname</td>";
      

        
        
        echo "<td class='text-blue-400 tabledata'>$user_email</td>";
        echo "<td class='text-green-400 capitalize tabledata'>$user_role</td>";

        

        
        
        
       
      
         echo "<td class='text-red-400 tabledata'><a href='users.php?change_to_admin={$user_id}'>Make admin</a></td>";
        echo "<td class='text-yellow-400 tabledata' text-white><a href='users.php?change_to_sub={$user_id}'>Make sub</a></td>";
        echo "<td class='text-indigo-600 tabledata' text-white><a href='users.php?source=edit_user&edit_user={$user_id}'>Edit </a></td>";
        echo "<td class='text-red-600 tabledata'><a href='users.php?delete={$user_id}'>Delete</a></td>";
        echo "</tr>";
            
            
    }
                                
 ?>                            
                               
          
<?php
                                
if(isset($_GET['change_to_sub'])) {
    
    $the_user_id = $_GET['change_to_sub'];
    
    
    $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id =  $the_user_id ";
    
    $make_subscriber_query = mysqli_query($connection, $query);
    
    if(!headers_sent()){
        header("Location: users.php");
    }
   
}      
                                
                                
                                
                                
                                
                                
if(isset($_GET['change_to_admin'])) {
    
    $the_user_id = $_GET['change_to_admin'];
    
    
    $query = "UPDATE users SET user_role = 'admin' WHERE user_id =  $the_user_id ";
    
    $make_admin_query = mysqli_query($connection, $query);
    
    if(!headers_sent()){
        header("Location: users.php");
    }
}  
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                

if(isset($_GET['delete'])) {
    
    $the_user_id = $_GET['delete'];
    
    
    $query = "DELETE FROM users WHERE user_id = {$the_user_id}";
    
    $delete_query = mysqli_query($connection, $query);
    
    if(!headers_sent()){
        header("Location: users.php");
    }
}                                
                                
?>                                                    
                               
                               
                               
                                
                            </tbody>
                        </table>