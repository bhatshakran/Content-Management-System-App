     <table class="mt-20 mb-8 extrasmall md:table-auto glass md:mr-auto">
                            <thead class="border-b ">
                                <tr>
                                    <th class="tabledata">Id</th>
                                    <th class="tabledata">Author</th>
                                    <th class="tabledata">Title</th>
                                    <th class="tabledata">Category</th>
                                    <th class="tabledata">Status</th>
                                    <th class="tabledata">Image</th>
                                    <th class="tabledata">Tags</th>
                                    <th class="tabledata">Comments</th>
                                    <th class="tabledata">Date</th>
                                    <th class="tabledata">Edit</th>
                                    <th class="tabledata">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                               
<?php 
    $query = "SELECT * FROM posts";
    $select_posts = mysqli_query( $connection, $query );

    while( $row = mysqli_fetch_assoc( $select_posts ) ) {
        $post_id = $row['post_id'];
        
        $post_author = $row['post_author'];                           
        $post_title = $row['post_title'];                             
        $post_category_id = $row['post_category_id'];                             
        $post_status = $row['post_status'];                             
        $post_image = $row['post_image'];                             
        $post_tags = $row['post_tags'];                             
        $post_comment_count = $row['post_comment_count'];                 
        $post_date = $row['post_date']; 
        echo "<tr>";
        echo "<td class='tabledata'>$post_id</td>";
        echo "<td class='tabledata'>$post_author</td>";
        echo "<td class='tabledata'>$post_title</td>";
      
        $query = "SELECT * FROM categories WHERE id = {$post_category_id}";
        
        $select_categories_id = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_assoc($select_categories_id)) {
            $cat_id = $row['id'];
            $cat_title = $row['cat_title'];
            echo "<td class='capitalize tabledata'> {$cat_title} </td>";
        }
        
        
        echo "<td class='capitalize tabledata'>$post_status</td>";
        echo "<td class='tabledata'><img src ='../images/$post_image' width='100' alt='image'></img></td>";
        echo "<td class='tabledata'>$post_tags</td>";
        echo "<td class='tabledata'>$post_comment_count</td>";
        echo "<td class='text-green-400 tabledata'>$post_date</td>";
         echo "<td class='text-indigo-600 tabledata' text-white'><a href='posts.php?source=edit_post&p_id=$post_id'>Edit</a></td>";
        echo "<td class='text-red-600 tabledata'><a href='posts.php?delete=$post_id'>Delete</a></td>";
        echo "</tr>";
            
            
    }
                                
 ?>                            
                               
          
<?php

if(isset($_GET['delete'])) {
    
    $the_post_id = $_GET['delete'];
    
    
    $query = "DELETE FROM posts WHERE post_id = {$the_post_id}";
    
    $delete_query = mysqli_query($connection, $query);
    
    header("Location: posts.php");
}                                
                                
?>                                                    
                               
                               
                               
                                
                            </tbody>
                        </table>