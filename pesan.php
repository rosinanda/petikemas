<?php
session_start();
include "connection.php";
include "template.php";

$title="Cek BL";
$id_shipper=$_SESSION['id_shipper'];
$no = $_GET['no'];
$pesan = mysql_query("SELECT * FROM bl,si,schedule,container WHERE bl.no_bl='$no' and bl.no_si=si.no_si and si.voy=schedule.voy and si.no_container=container.no_container");
while($p = mysql_fetch_array($pesan)){
		$content='
<div id="content">
    <!--==============================row6=================================-->
    <div class="row_6">
        <div class="container">
            <h2 class="pad_bot3">Draft Bill Of Lading</h2>
            <div class="row">
													<div class="col-lg-7 col-md-7 col-sm-7 reserve_table">
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
														<label class="col-sm-4 control-label">Name Container: </label>
														<div class="col-sm-8">
															<label> '.$p['name_container'].' </label>
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
														.
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
													<div class="form-group">
														<label class="col-sm-4 control-label">Estimate Time Departure : </label>
														<div class="col-sm-8">
															<label> '.$p['etd'].'</label>
														</div>
													</div>
													&nbsp;
													&nbsp;
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Harga Container : </label>
														<div class="col-sm-8">
															<label> '.$p['harga_container'].'</label>
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Harga Pengiriman : </label>
														<div class="col-sm-8">
															<label> '.$p['harga_pengiriman'].'</label>
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">Total Pembayaran : </label>
														<div class="col-sm-8">
															<label> '.$p['payment_total'].'</label>
														</div>
													</div>
													&nbsp;
													</div>
													
								<div class="col-lg-5 col-md-5 col-sm-5 reserve_table">
								<h2 class="pad_bot1">Konfirmasi Kesesuaian Draft B/L</h2>
                       			 <form name="form1" method="post" action="insert_sesuai.php">
                         		 <fieldset>
								 &nbsp;
													&nbsp;
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">No Bill of Lading </label>
														<div class="col-sm-8">
															<input type="text" name="no_bl" value="'.$p['no_bl'].'">
														</div>
													</div>
													&nbsp;
                            					<div class="form-group">
														<label class="col-sm-4 control-label">Correct  </label>
														<div class="col-sm-8">
															<input type="checkbox" name="check1" value="correct"><br/>
														</div>
													</div>
													&nbsp;
													<div class="form-group">
														<label class="col-sm-4 control-label">InCorrect  </label>
														<div class="col-sm-8">
															<input type="checkbox" name="check2" value="incorrect"><br/>
														</div>
													</div>
													&nbsp;
													&nbsp;
													&nbsp;
													&nbsp;
													&nbsp;
													&nbsp;
													<div class="form-group">
														<label class="col-sm-7 control-label">Description If Incorrect  </label>
														&nbsp;
													</div>
													&nbsp;
													<div class="form-group">
														<textarea class="form-control" rows="4" name="keterangan"></textarea>
														&nbsp;
													</div>
													&nbsp;
													&nbsp;
													&nbsp;
													<center>
													<div class="form-group">
													  <input type="submit" name="kesesuaian" class="btn btn-default" value="Send">
													</div>
												 </center>
                       			 </form>
								
								
								</div>
				
			
			</div>
        </div>
    </div>
</div>
		';
}
//set sudah dibaca = Y kalau sudah dibaca
$update = mysql_query("UPDATE bl SET status_bl='Sudah di konfirmasi'
WHERE no_bl='$no'");

printPage($title,$content);

	

?>

