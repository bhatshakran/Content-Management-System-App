 <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
 <div class="h-auto md:h-screen ">
                <ul class="flex-row text-xl text-gray-700 ">
                    <li class="px-2 py-4 mx-3 border-b ">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> 
                         Dashboard
                        </a>
                    </li>
                    <li class="px-2 py-4 mx-3 border-b cursor-pointer collapse">
                        <div>
                        <i class="fa fa-fw fa-arrows-v"></i> 
                        Posts
                         <i class="fa fa-fw fa-caret-down">
                         </i>
                         </div>
                        <ul id="posts_dropdown" class="hidden dropLinks">
                    
                            <li class="ml-6 text-sm">
                                <a href="posts.php">View All Post </a>
                            </li>
                            <li class="ml-6 text-sm">
                                <a href="posts.php?source=add_post">Add Post</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="px-2 py-4 mx-3 border-b ">
                        <a href="categories.php"><i class="fa fa-fw fa-wrench"></i> Categories</a>
                    </li>
                   
                    <li  class="px-2 py-4 mx-3 border-b" >
                        <a href="comments.php"><i class="fa fa-fw fa-file"></i> Comments</a>
                    </li>
                     <li class="px-2 py-4 mx-3 border-b cursor-pointer collapse">
                     <div><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a></div>
                        <ul id="demo" class="hidden dropLinks">
                            <li class="ml-6 text-sm ">
                                <a href="users.php">View All user</a>
                            </li>
                            <li class="ml-6 text-sm">
                                <a href="users.php?source=add_user">Create User</a>
                            </li>
                           
                        </ul>
                    </li>
                     <li class="px-2 py-4 mx-3 border-b">
                        <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
                    </li>
                     <li class="px-2 py-4 mx-3 md:border-b">
                                <a href="/cms/index.php">Go Back</a>
                            </li>
                </ul>
            </div>


            <script>
            
      
            const dropBtn = document.querySelectorAll('.collapse');
     
            let toggle = false;
            dropBtn.forEach((btn, index) => {
                btn.addEventListener('click', function () {
            
                    const nodelis = this.childNodes;
                    const nodeArr = Array.from(nodelis);
                
                    const links = nodeArr[3];
                   if(!toggle) {
                    links.style.display = 'block';
                    toggle = true
                  
                   }else if(toggle) {
                    links.style.display = 'none';
                    toggle = false;
                   }
                    
                    
                 
                
                    
               

            })})
            
            </script>