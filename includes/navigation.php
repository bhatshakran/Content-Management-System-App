


       
    <nav class="py-6 bg-white border-b-2">
    <div class="container flex items-center justify-between md:justify-around">
    <div id="home" class="ml-6 md:ml-4">
    <a href="/cms/index.php">Home</a>
    </div>
    <div id="links" class="hidden md:block">
    <ul class="flex ">

    <?php
                    
                    $query = "SELECT * FROM categories";
                    $select_all_categories_query = mysqli_query($connection, $query);
                    
                    while($row = mysqli_fetch_assoc($select_all_categories_query)) {
                        
                        $cat_title = $row['cat_title'];
                        
                        echo "<li class='nav-links'><a href='#'>{$cat_title}</a></li>";
                    }
                    
                    
                    
                    
                ?>
                 <li class='nav-links'>
                        <a href="admin/index.php">Admin</a>
                    </li>
    </ul>
    </div>
    <div id="menu" class="cursor-pointer md:hidden">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
</svg>
    </div>
    </div>
    </nav>


       
       
      
                
