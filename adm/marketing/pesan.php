<?php
include "../koneksi.php";
include "template.php";

$title="Marketing";

$no = $_GET['no'];
$pesan = mysql_query("SELECT * FROM si WHERE no_si='$no'");
while($p = mysql_fetch_array($pesan)){
		$content='
			<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Konfirmasi Shipping Instruction</h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-bar-chart-o"></i>Shipping Instruction</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    
					<div class="tab-content">
													<div class="signup-form"><!--sign up form-->
														
												<form name="form1" method="post" action="update_si.php">
												 <fieldset>
													<div class="form-group">
														<label class="col-sm-4 control-label">Nomor SI :</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="no_si" value= '.$p['no_si'].' required>
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Port of Lading : </label>
														<div class="col-sm-8">
															<label> '.$p['pol'].' </label>
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Port of Discharge :  </label>
														<div class="col-sm-8">
															<label> '.$p['po_disc'].' </label>
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Port of Delivery : </label>
														<div class="col-sm-8">
															<label> '.$p['po_del'].' </label>
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Consignee :  </label>
														<div class="col-sm-8">
															<label> '.$p['id_company'].' </label>
														</div>
													</div>
													&nbsp;
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Notify Party : </label>
														<div class="col-sm-8">
															<label> '.$p['notify_party'].' </label>
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Party : </label>
														<div class="col-sm-8">
															<label> '.$p['party'].' </label>
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Type Container: </label>
														<div class="col-sm-8">
															<label> '.$p['type_container'].' </label>
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Descruption of Goods : </label>
														<div class="col-sm-8">
															<label> '.$p['desc_og'].'</label>
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Weight</label>
														<div class="col-sm-4">
															<label> Nett : '.$p['w_nett'].'</label>
														</div>
														<div class="col-sm-4">
															<label> Gross : '.$p['w_gross'].'</label>
														</div>
													</div>
													&nbsp;
														<div class="form-group">
														<label class="col-sm-4 control-label">Fumigation : </label>
														<div class="col-sm-8">
															<label> '.$p['fumigation'].'</label>
														</div>
													</div>
													&nbsp;
													&nbsp;
													Masukkan Kontainer Yang Sesuai
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Container</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="container" placeholder="No Container" required>
														</div>
													</div>
													&nbsp;
													&nbsp;
													&nbsp;
													&nbsp;
													<center>
													<div class="form-group">
													  <input type="submit" name="konfirm" class="btn btn-default" value="Send">
													</div>
												 </center>
													</fieldset>

												</form>


											</div><!--/sign up form-->
									</div><!--/tab content-->
					
					
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
}
//set sudah dibaca = Y kalau sudah dibaca
$update = mysql_query("UPDATE si SET konfirmasi='ya'
WHERE no_si='$no'");


printPage($title,$content);



?>

