


       
    <nav class="py-6 bg-white ">


    <div class="container flex items-center justify-between md:justify-around">



    <div class="flex-row w-full md:grid md:grid-cols-3">


    <div id="home" class="flex items-center justify-between ml-6 text-blue-600 md:ml-4 md:w-1/3">
   
    
   
    <div class="flex items-center">
    <a class="mr-3 text-3xl italic" href="/cms/index.php">CMS </a>
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
    </svg>
    
   
    </div> 
    <div id="menu" class="mr-4 cursor-pointer menuToggle md:hidden">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
  </svg>
    </div>
    </div>

    <div id="links" class="hidden w-full border-t-4 panel-lg md:h-auto md:block md:w-2/3 md:border-0 md:shadow-none">
    <ul class="block py-2 md:flex ">

    <?php
                    
                    $query = "SELECT * FROM categories";
                    $select_all_categories_query = mysqli_query($connection, $query);
                    
                    while($row = mysqli_fetch_assoc($select_all_categories_query)) {
                        
                        $cat_title = $row['cat_title'];
                        
                        echo "<li class='py-4 nav-links'><a class='text-gray-500 ' href='#'>{$cat_title}</a></li>";
                    }
                    
                    
                    
                    
                ?>
                 <li class='flex items-center justify-center text-gray-500 nav-links'>
                 <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                        </svg>
                        </div>
                        <a class='py-4 text-gray-500 md:mr-2' href="admin/index.php">Admin</a>
                    </li>
    </ul>
    </div>
    </div>
    
    </div>
    </nav>


       
       
      
                
<script>


                const dropBtn = document.querySelector('.menuToggle')
                let toggle = false;
                const links = document.querySelector('#links')

                dropBtn.addEventListener('click', function () {
            
                   console.log('eotmi')
                
                    
                   if(!toggle) {
                    links.style.display = 'block';
                    toggle = true
                  
                   }else if(toggle) {
                    links.style.display = 'none';
                    toggle = false;
                   }
                    
                }) 
                 

                window.addEventListener('resize', () => {
               console.log(window.innerWidth)
               if(window.innerWidth >= '768') {
                  links.style.display= 'block';
               }else{
                 links.style.display ='none'
               }
                })

</script>