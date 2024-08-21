
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php
//include("include/sidebar.php");

       ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->            
<?php
  //include("include/nav.php") ;         
?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables of product</h1>
                   <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>-->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          
                                
                      

                                <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>price</th>
                                            <th>img</th>
                                            <th>count</th>
                                            <th>category</th>
                                            <th>brand</th>
                                            <th>controls</th>
                                        </tr>
                                    </thead>

                                  <!--  <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> -->
    <?php
                
        $select="SELECT * FROM product ";
        $result=$conn->query($select);
        while ($pro=$result->fetch_assoc())
         {
    ?>


                                    <tbody>
                                        <tr>
                                            <td> <?=$pro['id']?>     </td>
                                            <td> <?=$pro['name']?>   </td>
                                            <td> <?=$pro['price']?>  </td>
                                            <?php $c=explode(",",$pro['img']);
                                            $imgs=$c;
                                            foreach ($imgs as $img ) 
                                            {
                                                
                                            ?>     
                                            <td><img src="imgs/<?=$img?>"  style="width:100px;heigth:100px;"<?php
                                            
                                            }
                                            ?>>  
                                           
                                           
                                            <?php
                                            //explode(",",$pro['img']);
                                            //echo"<pre>";
                                            //echo$pro['img']  ;
                                            //$y=explode(",",$pro['img']);
                                            //print_r($y);
                                            //print_r(explode(",",$pro['img']));
                                            //$im=implode(",",explode(",",$pro['img']));
                                            //echo$im;
                                            ?>
                                        </td>
                                            <td> <?=$pro['count']?>  </td>
                                            <td> <?php
                                           $cat= $pro['cat'];
                                           $select_c="SELECT * FROM  category WHERE id='$cat'";
                                            $result_c=$conn->query($select_c);
                                             $ca=$result_c->fetch_assoc();
                                             echo $ca['name'];
                                               
                                        ?> </td>

                                        <td> <?php
                                            
                                            $br=$pro['brand'];
                                            $select_b="SELECT * FROM  brand  WHERE id='$br'";
                                            $result_b=$conn->query($select_b);
                                            $bra=$result_b->fetch_assoc();
                                            echo $bra['name'];
                                        
                                          ?></td>
                                            
                                          <td>
                                      <a href="?action=edit&&id=<?=$pro['id']?>"><button class="btn btn-info">edit</button> </a>

                                      <a href="fun/delete.php?id=<?=$pro['id']?>"><button class="btn btn-danger">delete</button> </a>
                                          </td>
                                        </tr>
                                        
                                    </tbody>
                                
                            <?php

                                 }

                            ?>
                                </table>
                            
                            <a href="?action=add"><button class="btn btn-success">add product</button></a>

                           


                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
            <!-- Footer -->
            
            <!-- End of Footer -->

                        
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>