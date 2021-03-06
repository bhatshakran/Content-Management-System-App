


       
    <nav class="py-6 bg-white noselect">


    <div class="container flex items-center justify-between md:justify-around">



    <div class="flex-row w-full md:flex md:justify-between ">


    <div id="home" class="flex items-center justify-between ml-6 text-blue-600 md:ml-4 ">
   
    
   
    <div class="flex items-center">
    <a class="mt-2 mr-3 text-3xl italic font-league" href="index">CMS </a>
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
    </svg>
    
   
    </div> 
    <div id="menu" class="mr-4 cursor-pointer menuToggle md:hidden nav-links">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
  </svg>
    </div>
    </div>

    <div id="links" class="hidden w-full border-t-4 panel-lg md:h-auto md:block md:border-0 md:shadow-none md:w-max ">
    <ul class="block py-2 md:py-0 md:flex ">

    <?php
                    
                    $query = "SELECT * FROM categories LIMIT 0, 3";
                    $select_all_categories_query = mysqli_query($connection, $query);
                    
                    while($row = mysqli_fetch_assoc($select_all_categories_query)) {
                        
                        $cat_title = $row['cat_title'];
                        
                        echo "<li class='py-4 md:py nav-links '><a class='text-gray-500 marker ' href='#'>{$cat_title}</a></li>";
                    }
                    
                    
                    
                    
                ?>
                 <li class='flex items-center justify-center text-gray-500 nav-links '>
                 <a class='py-4 text-gray-500 marker md:py md:mr-2 ' href="admin/index.php">Admin</a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                        </svg>
                      
                        
                    </li>

                    <li class='py-4 md:py marker nav-links'>
                 
                    <a class='py-4 text-gray-500 w-max md:py md:mr-2 ' href="registration.php">Registration</a>
             
                    </li>
                  


                    


            
    </ul>
    </div>
    </div>
    
    </div>
    </nav>


       
       
      
                
