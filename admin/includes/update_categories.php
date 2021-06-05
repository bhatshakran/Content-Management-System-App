
       
       <form action="" method="post">
                                <div class="form-group">
                                   
                                   <label for="cat_title">
                                       Edit Category
                                   </label>
                                   
                                   <?php 
                                    if(isset($_GET['edit'])) {
                                        
                                        
                                $cat_id = $_GET['edit'];
                                        
                                        
                                $query = "SELECT * FROM categories WHERE id = $cat_id ";
                                        
                                        
                                $select_categories_id = mysqli_query($connection, $query);
                                        
                                        
                                while($row = mysqli_fetch_assoc($select_categories_id)) {
                                $cat_title = $row['cat_title'];
                                $cat_id = $row['id'];
                                    ?>
                                    
                                   <input type="text"
                                   value="<?php if(isset($cat_title)){
                                        echo $cat_title;
                                    } ?>"
                                    name="cat_title" class="form-control">  

                                 <?php   }
                                    
                                  
                                    } 
                                    ?>
<!--                                    // UPDATE QUERY-->
                                   <?php
                                    
                                    
                                     if(isset($_POST['update'])) {

                                            $the_cat_title = sanitize($connection,$_POST['cat_title']);
                                            $stmt = mysqli_prepare($connection, "UPDATE categories SET cat_title = ? WHERE id = ? ");
                                            
                                            mysqli_stmt_bind_param($stmt, 'si', $the_cat_title, $cat_id);

                                            mysqli_stmt_execute($stmt);

                                            redirect("categories.php");
                                        }
                                        
                                    
                                    
                                    ?>    
                                                                          
                                                                                                                                    
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                </div>
                                 <div class="form-group">
                                    <input type="submit"
                                    name="update"
                                    value="Update Category" class="btn btn-primary">
                                </div>
                            </form>