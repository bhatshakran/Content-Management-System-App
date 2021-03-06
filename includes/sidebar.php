

               <div class="py-4 m-2 px ">
                
              
                <div class="pb-4 ">
                <!-- Blog Search Well -->
                <div class="w-full px-6 glass ">
                    <h3 class="mt-4 text-left text-blue-600 font-ralewaySB">
                    Blog Search
                    </h3>
                    <form class="w-full " action = "search.php"  method="post">
                    <div class="flex items-center gap-3 input-group">
                        <input name="search" type="text" class="form-control">
                        <span class='text-blue-600 cursor-pointer'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    </span>
                    </div>
                    </form>
                </div>
                <!--Login form-->
               
                    <div class="w-full px-6 py-8 mt-4 glass">
                    <h3 class="text-blue-600 font-ralewaySB">Login</h3>
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
                <div class="w-full px-6 py-6 mt-4 glass">
                    <h3 class="mb-3 text-blue-600 font-ralewaySB">Blog Categories</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="items-center xl:flex-auto">
                                <?php
                                
                                $query = "SELECT * FROM categories";
                                $select_categories_sidebar = mysqli_query($connection, $query);
                                
                                confirm($select_categories_sidebar);
                                
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

        


           
                   