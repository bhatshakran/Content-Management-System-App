 <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
 <div class="hidden h-auto md:block md:h-screen noselect " id='adminLinks'>
                <ul class="flex-row text-xl text-gray-700 ">
                    <li class="px-2 py-4 mx-3 border-b ">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> 
                         Dashboard
                        </a>
                    </li>
                    <li class="px-2 py-4 mx-3 border-b cursor-pointer collapse ">
                        <div>
                        <i class="fa fa-fw fa-arrows-v"></i> 
                        Posts
                         <i class="fa fa-fw fa-caret-down">
                         </i>
                         </div>
                        <ul id="posts_dropdown" class="hidden dropLinks">
                    
                            <li class="flex items-center py-4 ml-6 text-sm text-blue-400">
                                <a href="posts.php">View All Post </a>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                 <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                </svg>
                            </li>
                            <li class="flex items-center ml-6 text-sm text-blue-400">
                            
                                <a href="posts.php?source=add_post">Add Post</a>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                            </svg>
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
                            <li class="flex items-center py-2 ml-6 text-sm text-blue-400">
                                <a href="users.php">View All user</a>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                </svg>
                            </li>
                            <li class="flex items-center py-2 ml-6 text-sm text-blue-400">
                                <a href="users.php?source=add_user">Create User</a>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                </svg>
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


            