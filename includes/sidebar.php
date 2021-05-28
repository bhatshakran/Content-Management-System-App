

               <div class="py-4 m-2 px ">
                
              
                <div class="pb-4 panel-lg">
                <!-- Blog Search Well -->
                <div class="w-full px-6">
                    <h2 class="mt-4">Blog Search</h2>
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
                <div class="w-full px-6 pt-6 mt-4 ">
                    <h3 class="mb-3">Blog Categories</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="items-center xl:flex-auto">
                                <?php
                                
                                $query = "SELECT * FROM categories";
                                $select_categories_sidebar = mysqli_query($connection, $query);
                                
                                
                                
                                while($row = mysqli_fetch_assoc($select_categories_sidebar)) {
                                    $cat_id = $row['id'];
                                    $cat_title = $row['cat_title'];
                                    
                                    echo "<li class='px-2 py-1 mt-2 mr-6 font-light bg-green-300 rounded w-max'><a href='category.php?category={$cat_id}'>{$cat_title}</a></li>";
                                }
                                
                                ?>
                              
                            </ul>
                        </div>
                     
                     
                    </div>

                    
                    
                    
                    <!-- /.row -->
                </div>
               

                <!-- Side Widget Well -->
          <?php include "sidewidget.php"; ?>
          </div>
            </div>

        


           
                   