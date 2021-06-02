     <table class="w-full mt-20 mb-8 text-center extrasmall md:table-auto glass md:mr-auto">
     <h3 class="mx-4 my-6 border-b border-gray-600 font-league">All Comments</h3>
    <?php if($_SESSION['role'] == 'admin') {?>

                            <thead class="border-b">
                                <tr>
                                    <!-- <th class="tabledata">Id</th> -->
                                    <!-- <th class="tabledata">Author</th> -->
                                    <th class="tabledata">Comment</th>
                                    <th class="tabledata">Email</th>
                                    <th class="tabledata">Status</th>
                                    <th class="tabledata">In response to</th>
                                      <!-- <th class="tabledata">Date</th> -->
                                    <th class="tabledata">Approve</th>
                                    <th class="tabledata">Unapprove</th>
                                    <th class="tabledata">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
   <?php  }else {?>
        <thead class="border-b">
                                <tr>
                                    <!-- <th class="tabledata">Id</th> -->
                                    <!-- <th class="tabledata">Author</th> -->
                                    <th class="tabledata">Comment</th>
                                    <th class="tabledata">Email</th>
                                    <th class="tabledata">Status</th>
                                    <th class="tabledata">In response to</th>
                                      <!-- <th class="tabledata">Date</th> -->
                                      <th class="tabledata">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
    <?php }   ?>           
<?php 


if($_SESSION['role'] == 'admin') {
    $query = "SELECT * FROM comments";

    $select_comments = mysqli_query( $connection, $query );

    while( $row = mysqli_fetch_assoc( $select_comments ) ) {
        $comment_id = $row['comment_id'];
        
        $comment_post_id = $row['comment_post_id'];                           
        $comment_author = $row['comment_author'];                             
        $comment_email = $row['comment_email'];                             
        $comment_content = $row['comment_content'];                             
        $comment_status = $row['comment_status'];                             
        // $comment_date = $row['comment_date'];                             
         
        echo "<tr>";
        // echo "<td class='tabledata'>$comment_id</td>";
        // echo "<td class='tabledata'>$comment_author</td>";
        echo "<td class='border-b border-r tabledata'>$comment_content</td>";
      

        
        echo "<td class='border-b border-r tabledata'>$comment_email</td>";
        echo "<td class='capitalize border-b border-r tabledata'>$comment_status</td>";
        
        $query = "SELECT * FROM posts WHERE post_id = $comment_post_id";
        
        $select_post_id_query = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_assoc($select_post_id_query)) {

            $post_id = $row['post_id'];
            $post_title = $row['post_title'];
            
             echo "<td class='border-b border-r tabledata'><a href='../post.php?p_id=$post_id'>{$post_title}</a></td>";
        
        }
        
        
        
       
        // echo "<td class='tabledata'>$comment_date</td>";
         echo "<td class='text-green-400 border-b border-r tabledata'><a href='comments.php?approve=$comment_id'>Approve</a></td>";
        echo "<td class='text-indigo-600 border-b border-r tabledata'><a href='comments.php?unapprove=$comment_id'>Unapprove</a></td>";
        echo "<td class='text-red-600 tabledata'><a href='comments.php?delete=$comment_id'>Delete</a></td>";
        echo "</tr>";
            
            
    }



    
 } elseif($_SESSION['role'] == 'subscriber') {
    $query = "SELECT * FROM comments WHERE comment_author ='".$_SESSION['username']."' ";

    $select_comments = mysqli_query( $connection, $query );

    while( $row = mysqli_fetch_assoc( $select_comments ) ) {
        $comment_id = $row['comment_id'];
        
        $comment_post_id = $row['comment_post_id'];                           
        $comment_author = $row['comment_author'];                             
        $comment_email = $row['comment_email'];                             
        $comment_content = $row['comment_content'];                             
        $comment_status = $row['comment_status'];                             
        // $comment_date = $row['comment_date'];                             
         
        echo "<tr>";
        // echo "<td class='tabledata'>$comment_id</td>";
        // echo "<td class='tabledata'>$comment_author</td>";
        echo "<td class='border-b border-r tabledata'>$comment_content</td>";
      

        
        echo "<td class='border-b border-r tabledata'>$comment_email</td>";
        echo "<td class='capitalize border-b border-r tabledata'>$comment_status</td>";
        
        $query = "SELECT * FROM posts WHERE post_id = $comment_post_id";
        
        $select_post_id_query = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_assoc($select_post_id_query)) {

            $post_id = $row['post_id'];
            $post_title = $row['post_title'];
            
             echo "<td class='border-b border-r tabledata'><a href='../post.php?p_id=$post_id'>{$post_title}</a></td>";
             echo "<td class='text-red-600 tabledata'><a href='comments.php?delete=$comment_id'>Delete</a></td>";
        
        }
    }

 }

 
  
                                
 ?>                            
                               
          
<?php
                                
if(isset($_GET['unapprove'])) {
    
    $the_comment_id = $_GET['unapprove'];
    
    
    $query = "UPDATE comments SET comment_status = 'unapproved' WHERE comment_id =  $the_comment_id ";
    
    $unapprove_comment_query = mysqli_query($connection, $query);
    
    header("Location: comments.php");
}      
                                
                                
                                
                                
                                
                                
if(isset($_GET['approve'])) {
    
    $the_comment_id = $_GET['approve'];
    
    
    $query = "UPDATE comments SET comment_status = 'approved' WHERE comment_id =  $the_comment_id ";
    
    $approve_comment_query = mysqli_query($connection, $query);
    
    header("Location: comments.php");
}  
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                

if(isset($_GET['delete'])) {
    
    $the_comment_id = $_GET['delete'];
    
    
    $query = "DELETE FROM comments WHERE comment_id = {$the_comment_id}";
    
    $delete_query = mysqli_query($connection, $query);
    
    header("Location: comments.php");
}                                
                                
?>                                                    
                               
                               
                               
                                
                            </tbody>
                        </table>