<?php
include "../koneksi.php";
include "template.php";

$title="Dokumen";
$content='
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          Draft Bill of Lading                       </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i> Draft Bill of Lading                           </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    
                </div>
                <!-- /.row -->




    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>

';
printPage($title,$content);


?>


        









