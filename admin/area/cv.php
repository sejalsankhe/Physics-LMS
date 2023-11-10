


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Questions</title>
    <?php   
    
        include("partials/head.php");

    ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    
        <!-- Sidebar -->
        <?php   
        include("partials/sidebar.php");

        ?>

        <!-- End of Sidebar -->



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->
                <?php   
                include("partials/topbar.php");

                ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Concept Videos</h1>
                        
                    </div>
                    <form method="POST" action="handler/cvadd.php" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Question Image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="qi" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Answer Image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="ai" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Answer Video</label>
                            <input type="link" class="form-control-file" id="exampleFormControlFile1" name="av" >
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Chapter select</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="chp">
                            <option value="1">Force</option>
                            <option value="2">Work Power Energy</option>
                            <option value="3">Machines</option>
                            <option value="4">Refarction of light at plane surfaces</option>
                            <option value="5">Refarction through lens</option>
                            <option value="6">Spectrum</option>
                            <option value="7">Sound</option>
                            <option value="8">Current Electricity</option>
                            <option value="9">Electrical power and household circuits</option>
                            <option value="10">Electromagnetism</option>
                            <option value="11">Calorimetry</option>
                            <option value="12">Radioctivity</option>
                            
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <?php   
                include("partials/footer.php");

                ?>

            

</body>

</html>