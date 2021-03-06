
<?php include "./includes/db.php";?>
    <?php  include "./includes/header.php"; ?>
    <?php  include "./admin/functions.php"; ?>
    <div class="container mx-auto my-4 lg:w-3/4">
    <!-- Navigation -->
   <?php include "includes/navigation.php"; ?>
            <?php   
             $user_id = $_GET['u_id'];
             $post_id = $_GET['p_id'];           
                if(isset($_GET['p_id'])) {
                    $the_post_id = $_GET['p_id'];

                    $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
                    $select_all_posts_query = mysqli_query($connection, $query);
                        
                        while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                            
                            $post_title = $row['post_title'];
                            $post_author = $row['post_author'];
                            $post_content = $row['post_content'];
                            $post_image = $row['post_image'];
                            $post_date = $row['post_date'];
                                         
                 }?>
               <div class="mx-3 border-t border-gray-200">
               <div class="text-left post">
             
                <h2 class= 'px-3 py-6 mt-16 text-left font-league'>
                    <?php echo $post_title?>
                </h2>
                <p class="flex w-full gap-2 mx-3 mt-3 mb-8 items-left">
                    By <a href="index.php" class='text-green-700'><?php echo $post_author?></a>
                    <span class="flex items-center text-gray-700" > 
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <small><?php echo $post_date?></small> </span>
                </p>
                
               
                <img class="w-11/12 mx-3 my-4 sm:w-2/3" src="images/<?php echo $post_image;?> " alt="image">
               
                <div class=  "px-3 py-6 text-justify ">
                <?php echo $post_content?>
                </div>
                
               <form action="" method="post" class="flex items-center w-full gap-4 mx-3">
                <?php

               $postLikes = getTotalLikes($post_id);
               echo  "<p class='mt-3 text-3xl text-gray-500 font-league'>$postLikes</p>";

                 
                   $fetchIt = isLikedOrNot($post_id);
                  
                    if($fetchIt == 0 ){
                        $image = 'dist/images/heart_hollow.png';
                    }else{
                        $image = 'dist/images/heart_filled.png';
                    }

                echo "<input type='image' src=$image  class='my-4 cursor-pointer w-7 heart_icon'>";
               

               
                    ?>
                  </form>
                
                </div>
              
                 <?php   }   





                    if(isset($_POST['create_comment'])) {
                    // $the_post_id = $_GET['p_id'];
                    
                    $comment_author = $_POST['comment_author'];
                    $comment_email = $_POST['comment_email'];
                    $comment_content = $_POST['comment_content'];
                    if(!empty($comment_author) && !empty($comment_author) && !empty($comment_content)){
                        
                        $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date)";
                    
                    
                    
                        $query .= " VALUES($the_post_id, '{$comment_author}', '{$comment_email}', 
                        '{$comment_content}', 
                        'unapproved', now())";
                        
                        
                        
                        
                        $create_comment_query = mysqli_query($connection, $query);
                        
                        
                        if(!$create_comment_query) {
                            die("QUERY FAILED" . mysqli_error($connection));
                        }
                        
                        
                        $query = "UPDATE posts SET post_comment_count = post_comment_count + 1 WHERE post_id = $the_post_id ";
                        
                        
                        $update_comment_count = mysqli_query($connection , $query);
                    }else {
                        echo "<script>alert('Fields cannot be empty')</script>";
                    }
                    }
                    
                    
                 
                
                ?>
                <div class="w-full px-6 py-6 my-4 mt-12 glass">
                    <h4>Leave a Comment:</h4>
                    <form action="" method="post" role="form">
                       <div class="form-group">
                          <label for="author">Author</label>
                           <input type="text" name='comment_author' class='form-control'>
                        </div>
                        
                        <div class="form-group">
                           <label for="email">Email</label>
                            <input type="text" name='comment_email' class='form-control'>
                        </div>
                        
                        <div class="form-group">
                             <label for="comment">Comment</label>
                            <textarea name="comment_content" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="myBtn" name="create_comment">Submit</button>
                    </form>
                </div>

          

                <!-- Posted Comments -->
                
                
                <?php
                
               
                $query = "SELECT * FROM comments WHERE comment_post_id = {$the_post_id} ";
                $query .= "AND comment_status = 'approved' ";
                $query .= "ORDER BY comment_id DESC ";
                
                $select_comment_query = mysqli_query($connection, $query);
                
                if(!$select_comment_query) {

                    die("QUERY FAILED" . mysqli_error($connection));
                
                }
                
                
                while ($row = mysqli_fetch_array($select_comment_query)) {
                    
                    
                    $comment_date = $row['comment_date'];
                    $comment_content = $row['comment_content'];
                    $comment_author = $row['comment_author'];
                    
                   ;
                    ?>
                    
                       <!-- Comment -->
                <div class="px-4 py-2 my-4 text-white bg-gray-400">
                    <a class="" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <p class="mb-2"><?php echo $comment_author; ?>  
                        </p>
                        <small class="text-xs"><?php echo $comment_date;?></small></br>
                      <h5> <?php echo $comment_content; ?></h5>
                    </div>
                </div>
          
                   
          <?php      }?>
               </div>
            </div>   
            
                
<?php

if(isset($_POST['liked'])){
        // GET post_id and user_id
    
        $post_id = $_POST['post_id'];
        $user_id = $_POST['user_id'];
    
    
    
       
        $fetchIt = isLikedOrNot($post_id);
        
    
    
        if($fetchIt == 0){
    
            // SELECT the post from the database
            $query = "SELECT * FROM posts WHERE post_id=$post_id";
            $postResult = mysqli_query($connection, $query);
            $post = mysqli_fetch_array($postResult);
            $likes = $post['post_likes']; 
    
        // UPDATE post likes
    
        mysqli_query($connection, "UPDATE posts SET post_likes=$likes+1 WHERE post_id=$post_id");
        
        // CREATE likes for the post in the likes column
    
        mysqli_query($connection, "INSERT INTO likes(user_id, post_id) VALUES($user_id, $post_id)");
     } else{
            // SELECT the post from the database
            $query = "SELECT * FROM posts WHERE post_id=$post_id";
            $postResult = mysqli_query($connection, $query);
            $post = mysqli_fetch_array($postResult);
            $likes = $post['post_likes']; 
            // UPDATE post likes
            
    
        mysqli_query($connection, "UPDATE posts SET post_likes=$likes-1 WHERE post_id=$post_id");
        
        // CREATE likes for the post in the likes column
    
        mysqli_query($connection, "DELETE FROM likes WHERE post_id=$post_id AND user_id=$user_id");
        
      
    }
   


      
     }
?>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                    <script>

                    const heart_icon = document.querySelector('.heart_icon');


                    // show filled heart function
                    function showFilled(){
                        heart_icon.src= "dist/images/heart_filled.png";
                    }

                    // remove filled heart function and show hollow function

                    function removeFilled(){
                        heart_icon.src= "dist/images/heart_hollow.png";
                    }

                    heart_icon.addEventListener('mouseover', showFilled);
                    heart_icon.addEventListener('mouseout', removeFilled);

                  

                    
                    $(document).ready(function(){

                        let post_id = <?php echo $post_id; ?>;
                        let user_id = <?php echo $user_id; ?>;
                        <?php
                       $liked = isLikedOrNot($post_id);
                       
                      ?>
                      let liked = <?php echo $liked; ?>;

                      if(!liked == 0){
 
                        heart_icon.removeEventListener('mouseover', showFilled);
                        heart_icon.removeEventListener('mouseout', removeFilled);
                      }
                       
                     
                        $('.heart_icon').click(function() {

                            $.ajax({

                                url:"post.php?p_id=<?php echo $post_id;?>&u_id=<?php echo $user_id; ?>",
                                type:'post',
                                data:{
                                    'liked': 1,
                                    'post_id': post_id,
                                    'user_id': user_id
                                }
                            })
                        })

                    })


                    </script>
  

      

  <?php include "./includes/footer.php"; ?>