<?php
include "connection.php";
include "template.php";

$title="About";
$content='
<div id="content">
    <!--==============================row5=================================-->
    <div class="row_5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 reserve_table">
                    <h2>Our Commitment </h2>
                    <figure><img src="img/s.jpg" alt=""></figure>
                    <ul>
                      <li>Our commitment is to provide Cost-effective, quality and professional services to our customers at all times.</li>
                      <li>Our business processes are constantly being upgraded to meet global standards, with constant leveraging on the best technology.</li>
                      <li>With offices throughout Indonesia cities, we posses strong local knowledge and expertise to give our customers a leading edge.</li>
                  </ul>
                    <h2 class="pad_top1">Our Vision </h2>
					<h3>As a ship owner, operator and agencies working in the Indonesian shipping industry, we strive to not only be the leading shipping company in Indonesia’s domestic market but also the reliable agency serving the Asian Pacific region.</h3>
                    <h2 class="pad_top1">Our Mission </h2>
                    <h3>With our National offices network coverage to all major ports in Indonesia, TMS Linesare dedicated to provide customers and principals with efficient and comprehensive logistics services.</h3>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
				<div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-4 col-md-4 col-sm-4">
                    <h2>Fleet Ownet</h2>
                    <hr class="line2">
                    <p class="style1">MV “TMS GLORY” ex ASIAN GLORY  / CONTAINER VESSEL / INDONESIAN FLAG / CALL SIGN JZMV/ IMO NO. 9065431 / CLASS  BKI / PORT OF REGISTRY TANJUNG PRIOK / BUILT 1993 / BUILDER DAE SUN  SHIPBUILDING &amp; ENGINEERING CO., LTD., BUSAN, KOREA / DEADWEIGHT 7.042 T /  GRT 4.951 T / NRT 2.182 T / LOA 113.20 M / BEAM 19.00 M / DEPTH 8,50 M / DRAFT  6.513 M / LOADING CAPACITY 357 TEUS / MAIN ENGINE : SSANGYONG-MAN-B&amp;W TYPE  6L35MC / AUX ENGINE YANMAR S185DL-ET / SPEED 12.0 KNOTS.</p>
                    <h2 class="pad_bot1">Criticism and Suggestions</h2>
                        <form id="contact-form2" class="reservation-form">
                          <div class="success">Reservation form submitted! <strong>We will be in touch soon.</strong> </div>
                          <fieldset>
                            <div class="coll-1">
                              <div class="txt-form">Name<span></span></div>
                              <label class="name">
                                <input type="text" value="Name:"><br>
                                <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="coll-2">
                              <div class="txt-form">Email<span>:</span></div>
                              <label class="email">
                                <input type="email" value="E-mail:"><br>
                                <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                          
                            
                            <div class="clear"></div>
                            <div>
                              <div class="txt-form">Comment<span>*</span></div>
                              <label class="message">
                                <textarea>Comments:</textarea><br>
                                <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="clear"></div>
                          </fieldset>
                          <div class="buttons-wrapper clearfix"><a href="#" class="btn-link btn-link2" data-type="submit">send<span></span></a><a href="#" class="btn-link btn-link2" data-type="reset">clear<span></span></a></div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
';
printPage($title,$content);
?>