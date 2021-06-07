<?php include "./includes/db.php"; ?>
    <?php  include "./includes/header.php"; ?>
    <?php  include "admin/functions.php"; ?>


    <?php


  isLoggedIn();
?>
<?php include "./includes/footer.php"; ?>


    $request_body = file_get_contents('php://input');
    $data = json_decode($request_body);
    $value = get_object_vars($data);
    if(isset($value['liked'])){
        
    

    
    // GET post_id and user_id

    $post_id = $value['post_id'];
    $user_id = $value['user_id'];



   
    $query = "SELECT * FROM likes WHERE post_id=$post_id and user_id=$user_id";
    $likedOrNotResult = mysqli_query($connection, $query);
    $fetchIt = mysqli_num_rows($likedOrNotResult);
    


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











 <!-- / -->
 <!-- 

  -->
  // let xhttp = new XMLHttpRequest();
                        // xhttp.open('POST', "post.php?p_id=<?php echo $the_post_id; ?>&u_id=<?php echo $user_id; ?>" );
                        // // xhttp.setRequestHeader('Content-type', 'text/plain');
                        // xhttp.onreadystatechange = function () {

                        //     if(this.readyState == 4 && this.status == 200) {
                        //         var response = this.responseText;
                                
                        //     }
                          
                        // };


                        // const data = {
                        //     'liked': 1,
                        //     'post_id': post_id,
                        //     'user_id': user_id
                        // }
                       

                        // xhttp.send(data);