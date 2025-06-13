<?php
include "connection.php";
include "template.php";

$title="Route";
$content='

	<script>
$(function () {
  $("[data-toggle="popover"]").popover()
})
</script>

<div id="content">


    <div class="row_7">
        <div class="container">
                <div class="row">
				<center>
            		<div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="pad_bot2">&nbsp;</h2>
                        <div class="row links">
						
                		  <div class="col-lg-4 col-md-4 col-sm-4">
                                <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="JAPAN" data-content="TOKYO, YOKOHAMA, NAGOYA, OSAKA, MOJI, KOBE, HAKATA, SHIMIZU, FUKUYAMA, NAHA, MIZUSHIMA, CHIBA, YOKKAICHI, KAWASAKI, HIROSHIMA">JAPAN</button>
								</p>
								 <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="CHINA" data-content="GUANGZHOU, HUNGPU, ZHONGSHAN, SHENZHEN, DONGGUAN, SHANTOU, HUIZHOU, NANNING, GUANGXI, EAST CHINA, FUJIAN, XIAMEN, NORTH CHINA">CHINA</button>
								</p>
								<p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="HONGKONG" data-content="">HONGKONG</button>
								</p>
								<p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="MEXICO" data-content="MANZANILO">MEXICO</button>
								</p>
																 <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="PERU" data-content="CALLAO">PERU</button>
								</p>
																 <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="COLUMBIA" data-content="BUENAVENTURA">COLUMBIA</button>
								</p>
								 <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="ECUADOR" data-content="GUAYAQUIL">ECUADOR</button>
								</p>
								 <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="GUATEMALA" data-content="PUERTO QUETZA">GUATEMALA</button>
								</p>
								
								
                          </div>
                		  <div class="col-lg-4 col-md-4 col-sm-4">
                                <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="USA" data-content="LONG BEACH">USA</button>
								</p>
								 <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="KOREA" data-content="INCHOEN, PUSAN, KWANGUANG, ULSAN">KOREA</button>
								</p>
								<p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="VIETNAM" data-content="HAIPHONG, CATLAI, DANANG">VIETNAM</button>
								</p>
								<p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="PHILIPINE" data-content="MANILA NORTH, MANILA SOUTH, CEBU, SUBIG BAY">PHILIPINE</button>
								</p>
																 <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="SINGAPORE" data-content="">SINGAPORE</button>
								</p>
																 <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="THAILAND" data-content="BANGKOK, LAEMCHABANG, LAT KRABANG">THAILAND</button>
								</p>
								 <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="MYANMAR" data-content="RANGOON/YANGON">MYANMAR</button>
								</p>
								 <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="MALAYSIA" data-content="PASIR GUDANG, PENANG, PORTKLANG, TAWAU, MIRI, SAIBU, KUCHING, BINTULU">MALAYSIA</button>
								</p>
                          </div>
						   <div class="col-lg-4 col-md-4 col-sm-4">
                                <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="CAMBODIA" data-content="PHNOM PENH, SIHANOUKVILLE">CAMBODIA</button>
								</p>
								 <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="PAPUA NEW GUINEA" data-content="PORT MORESBY, LAE, RABAUL, KIMBE, MADANG, WEWAK">PAPUA NEW GUINEA</button>
								</p>
								<p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="SOLOMON ISLAND" data-content="HONIARA">SOLOMON ISLAND</button>
								</p>
								<p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="TAIWAN" data-content="TAIPEI, KEELUNG, KAOHSIUNG, TAICHUNG, TAOYUAN">TAIWAN</button>
								</p>
																 <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="PERU" data-content="CALLAO">PERU</button>
								</p>
																 <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="INDIA" data-content="NHAVASEVA, CHENNAI, VISAKHAPATNAM, MUMBAI, MUNDRA">INDIA</button>
								</p>
								 <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title=BLACK SEA" data-content="CONSTANTA, ISTANBUL">BLACK SEA</button>
								</p>
								 <p>
								<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="EUROPE" data-content="ROTERDAM, HAMBURG, ANTWERP">EUROPE</button>
								</p>
								
								
                          </div>
						  
                        </div>
						
    	           </div>
            		
                </div>
				
        </div>
		
    </div>
</div>
';
printPage($title,$content);
?>