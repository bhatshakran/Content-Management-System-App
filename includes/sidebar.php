

               <div class="px-10 py-4 mt-4 border-2 border-gray-100 rounded ">
                
              

                <!-- Blog Search Well -->
                <div class="w-full px-6">
                    <h2>Blog Search</h2>
                    <form class="w-full " action = "search.php"  method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit"   class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>
                </div>
                <!--Login form-->
                    <div class="w-full px-6 py-2 ">
                    <h3>Login</h3>
                    <form action = "includes/login.php"  method="post">
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" placeholder="Enter username" />
                        
                    </div>
                     <div class="input-group">
                        <input name="password" type="password" class="form-control" placeholder="Enter password" />
                        <span class="input-group-btn">
                            <button class="px-2 py-2 text-white bg-blue-400 rounded" name="login">
                                Submit
                            </button>
                        </span>                       
                    </div>
                    </form>
                   </div>

                <!-- Blog Categories Well -->
                <div class="w-full px-6 pt-6 mt-4 border-t border-gray-300">
                    <h3 class="mb-3">Blog Categories</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="flex items-center ">
                                <?php
                                
                                $query = "SELECT * FROM categories";
                                $select_categories_sidebar = mysqli_query($connection, $query);
                                
                                
                                
                                while($row = mysqli_fetch_assoc($select_categories_sidebar)) {
                                    $cat_id = $row['id'];
                                    $cat_title = $row['cat_title'];
                                    
                                    echo "<li class='px-2 py-1 mr-8 font-light bg-green-300 rounded w-max'><a href='category.php?category={$cat_id}'>{$cat_title}</a></li>";
                                }
                                
                                ?>
                              
                            </ul>
                        </div>
                     
                        <!-- /.col-lg-6 -->
                    </div>

                    
                    
                    
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
          <?php include "sidewidget.php"; ?>

            </div>

        