<?php
include "../koneksi.php";
include "template.php";

$title="Marketing";
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
                    <div class="tab-content">
						<form name="formcari" method="post">
							<fieldset>
									<div class="form-group">
										<label>Please input type of container</label>
										<input type="text" class="form-control"  name="type" placeholder="type of container">
										 <button type="submit" name="cari" class="btn btn-default">Cek</button>
									  </div>
									  </form>
									  <div class="form-group">
									   <table class="table">
										  <tr style="background-color:#fff;">
										   <th>No Container</th>
										   <th>Nama Container</th>
										   <th>Type Container</th>
										   <th>Size Container</th>
										   <th>Stok Container</th>
										   <th>Harga Container</th>
										  </tr>
										  
									  '.cek().'
									  	</table>		
									  </div>	 
							</fieldset>
						
					</div>
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


function cek()
{
	$string='';
							if(isset($_POST['cari'])){
							  $type = $_POST['type'];
								$sql = "select * from container where type_container='$type' and stock_container>=1";
								$result = mysql_query($sql);
										while ($bl = mysql_fetch_row($result))
										{
											$string= '
											<tr>
													   <td>'.$bl[0].'</td>
													   <td>'.$bl[1].'</td>
													   <td>'.$bl[2].'</td>
													   <td>'.$bl[3].'</td>
													   <td>'.$bl[4].'</td>
													   <td>'.$bl[5].'</td>	
											</tr>
											';
										}
								}else{
									echo 'Data not found!'; 
								}
							
	return $string;
}							  
?>



        









