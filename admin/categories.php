<?php include "includes/header.php"; 
?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/navigation.php";
        ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Welcome to Admin
                            <small>Author</small>
                        </h1>
                        
                        
                        
                        <div class="col-xs-6">
                            <form action="">
                                <div class="form-group">
                                   
                                   <label for="cat_title">
                                       Add Category
                                   </label>
                                    <input type="text"
                                    name="cat_title" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <input type="submit"
                                    name="submit"
                                    value="Add Category" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/footer.php";
   ?>

</body>

</html>
