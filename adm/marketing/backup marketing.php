<?php
include "../koneksi.php";
include "template.php";
include "cekpesan.php";

$title="Marketing";
$nav='
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge" id="jmlh" style="background-color:red;">'.$j.'</span></a>
                    <ul class="dropdown-menu">
					'.isi().'
                    </ul>
                </li>
';
$content='
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          DAFTAR KONTAINER                       </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-bar-chart-o"></i> CONTAINER                           </li>
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
printPage($title,$nav,$content);

function isi()
{
	
	$string='';
	$i=0;
	$tampil = "SELECT * FROM si where konfirmasi='no'";
	$sql = mysql_query($tampil);
	while($data = mysql_fetch_array($sql))
 	{
				$string='
			    '.$i++;.'
				<li>'.$data['no_si'].'</li>
				';
	}
	
	return $string;
}
?>


        









