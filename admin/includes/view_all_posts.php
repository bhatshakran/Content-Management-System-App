
<?php
if(isset($_POST['checkbox_array'])) {
 
    foreach($_POST['checkbox_array'] as $postValueId) { 
     
        // Get the value of the select dropdown 
   $bulk_options = $_POST['bulk_options'];

    //    switch case
        switch($bulk_options) {
            // If we selected published 
            case 'publish':

                // Create a query to update the selected posts
                $query  = "UPDATE posts SET post_status = '{$bulk_options}' WHERE 
                post_id = {$postValueId} ";

                $update_to_published_status = mysqli_query($connection, $query);
                confirm($update_to_published_status);
                break;
        case 'draft':

            // Create a query to update the selected posts
            $query  = "UPDATE posts SET post_status = '{$bulk_options}' WHERE 
            post_id = {$postValueId} ";

            $update_to_draft_status = mysqli_query($connection, $query);
            confirm($update_to_draft_status);
            break;

            case 'delete':

            $query  = "DELETE FROM posts WHERE post_id = {$postValueId} ";

            $update_to_delete_status = mysqli_query($connection, $query);
            confirm($update_to_delete_status);
            break;

            case 'clone':

            $query = "SELECT * FROM posts WHERE post_id = {$postValueId}";
            $select_all_posts_query = mysqli_query($connection, $query);
                
                while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    
                    $post_title = $row['post_title'];
                    $post_category_id = $row['post_category_id'];
                    $post_tags = $row['post_tags'];
                    $post_status = $row['post_status'];
                    $post_author = $row['post_author'];
                    $post_content = $row['post_content'];
                    $post_image = $row['post_image'];
                    $post_date = $row['post_date'];
                                    
            }


            $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_status)";
    
            $query .= "VALUES({$post_category_id}, '{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}','{$post_status}' )";

            $create_post_query = mysqli_query($connection, $query);
    
            confirm($create_post_query);
            break;
        }




    }


}



?>







<form action="" method='post' class="px-4 py-6">
<h3 class="border-b border-gray-600 font-league">All Posts</h3>
<div class="flex items-center gap-3 px-3 mt-12 ">
    <div class="w-1/2 ">
    <select name="bulk_options" id="" class='form-control'>
        <option value="">Select Options</option>
        <option value="draft">Draft</option>
        <option value="publish">Publish</option>
        <option value="delete">Delete</option>
        <option value="clone">Clone</option>
    </select>
    </div>

    <div class="w-1/2 py-4 ">
        <button class="px-2 py-3 text-sm text-white bg-blue-500 rounded-lg hover:bg-blue-700" type='submit'>Apply</button>
        <a  href="posts.php?source=add_post" class="px-2 py-3 ml-3 text-sm text-white bg-green-500 rounded-lg hover:bg-green-700">Add New</a>
    </div>
    </div>

    <table class="mx-auto mt-10 mb-8 extrasmall sm:text-sm md:table-auto glass md:mr-auto">
                            <thead class="border-b ">
                                <tr>
                                    <th class="border-r tabledata">
                                    <input type="checkbox" name="" id="selectAllBoxes">
                                    </th>
                                    <th class="border-r tabledata">Author</th>
                                    <th class="border-r tabledata">Title</th>
                                    <th class="border-r tabledata">Category</th>
                                    <th class="border-r tabledata">Status</th>
                                    <th class="border-r tabledata">Image</th>
                                    <th class="border-r tabledata">Date</th>
                                    <th class="border-r tabledata">Edit</th>
                                    <th class="border-r tabledata">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                               
<?php 
    $query = "SELECT * FROM posts ORDER BY post_id DESC";
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
        echo "
        <td class='border-b border-r tabledata'> 
        <input type='checkbox' name = 'checkbox_array[]' id='checkBoxes' value = '$post_id'>
        </td>";
        echo "<td class='border-b border-r tabledata'>$post_author</td>";
        echo "<td class='border-b border-r tabledata'><a href='../post.php?p_id=$post_id' class='text-gray-600 hover:text-black hover:underline'>$post_title</a></td>";
       
      
        $query = "SELECT * FROM categories WHERE id = {$post_category_id}";
        
        $select_categories_id = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_assoc($select_categories_id)) {
            $cat_id = $row['id'];
            $cat_title = $row['cat_title'];
            echo "<td class='capitalize border-b border-r tabledata'> {$cat_title} </td>";
        }
        
        
        echo "<td class='capitalize border-b border-r tabledata'>$post_status</td>";
        echo "<td class='border-b border-r tabledata'><img src ='../images/$post_image' width='100' alt='image'></img></td>";
        echo "<td class='text-green-400 border-b border-r tabledata'>$post_date</td>";
         echo "<td class='text-indigo-600 border-b border-r tabledata' text-white'><a href='posts.php?source=edit_post&p_id=$post_id'>Edit</a></td>";
        echo "<td class='text-red-600 border-b tabledata'><a onClick=\"javascript:return confirm('Are you sure you want to delete');\" href='posts.php?delete=$post_id' >Delete</a></td>";
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
                    </form>



      