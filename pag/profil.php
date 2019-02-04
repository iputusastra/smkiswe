 <div id="map" data-position-latitude="-7.404055" data-position-longitude="111.226830" data-marker-img="images/marke.png"></div>
        <script>
            (function ( $ ) {
                $.fn.CustomMap = function( options ) {
                    
        var posLatitude = $('#map').data('position-latitude'),
            posLongitude = $('#map').data('position-longitude');
            
                    var settings = $.extend({
                        home: { latitude: posLatitude, longitude: posLongitude },
                        text: '<div class="map-popup"><h4>SMK Islamiyah Widodaren | SMKIsWe</h4><p>Jl. Raya Walikukun - Ngrambe Km. 01, Widodaren - Ngawi <br>Telephone: (0351) 671 489</br></p></div>',
                        icon_url: $('#map').data('marker-img'), 
                        zoom: 15
                    }, options );
                    
                    var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);
                         
                    return this.each(function() {   
                        var element = $(this);
                        
                        var options = {
                            zoom: settings.zoom,
                            center: coords,
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                            mapTypeControl: false,
                            scaleControl: false,
                            streetViewControl: false,
                            panControl: true,
                            disableDefaultUI: true,
                            zoomControlOptions: {
                                style: google.maps.ZoomControlStyle.DEFAULT
                            },
                            overviewMapControl: true,   
                        };
                        
                        var map = new google.maps.Map(element[0], options);
                        
                        var icon = { 
                            url: settings.icon_url, 
                            origin: new google.maps.Point(0, 0)
                        };
    
                        var marker = new google.maps.Marker({
                            position: coords,
                            map: map,
                            icon: icon,
                            draggable: false
                        });
                        
                        var info = new google.maps.InfoWindow({
                            content: settings.text
                        });
    
                        google.maps.event.addListener(marker, 'click', function() { 
                            info.open(map, marker);
                        });
    
                        var styles = [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}];
                      
                        map.setOptions({styles: styles});
                    });
                  
                };
            }( jQuery ));
    
            jQuery(document).ready(function() {
                jQuery('#map').CustomMap();
            });
        </script>
         <div class="hr1" style="margin-bottom:10px;"></div>


 <?php
include"con.php";
$result=mysql_query("select * from profil where id_p=1"); //output
while($row=mysql_fetch_array($result)){
?>


<div class="row sidebar-page">
<!-- Page Content -->
					<div class="col-md-9 page-content">
                    
                        <!-- Classic Heading -->
                    	<h4 class="classic-title"><span>Profil Kami</span></h4>
                        
                        <!-- Some Text -->
                    	<p><img class="img-thumbnail image-text" style="float:left; width:150px;" alt="" src="images/profil/<?php echo $row['foto'];?>" /><?php echo $row['isi'];?></p>
                        
                        
                        <!-- Divider -->
                        <div class="hr5" style="margin-top:30px; margin-bottom:45px;"></div>
                        
                        <!-- Accordion -->
                        <div class="panel-group">
                            
                            <!-- Start Accordion 1 -->
                            <div class="panel panel-default">
                                <!-- Toggle Heading -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-4">
                                        	<i class="icon-down-open-1 control-icon"></i>
                                            <i class="icon-paper-plane icon-medium"></i> Visi
                                        </a>
                                    </h4>
                                </div>
								
                                <!-- Toggle Content -->
                                <div id="collapse-4" class="panel-collapse collapse in">
                                    <div class="panel-body"> <strong class="accent-color">Visi SMKI</strong> kami sebagai pelayan masyarakat dengan sepenuh hati, kami mengedepankan apa yang menjadi visi kami yaitu :
                                    <p>    <?php echo $row['visi'];?></p>

                                    </div>
                                </div>

                            </div>
                            <!-- End Accordion 3 -->
                          
                            <!-- Start Accordion 2 -->
                            <div class="panel panel-default">
                                <!-- Toggle Heading -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-5" class="collapsed">
                                        	<i class="icon-down-open-1 control-icon"></i>
                                            <i class="icon-globe-3"></i> Misi
                                        </a>
                                    </h4>
                                </div>
                                <!-- Toggle Content -->
                                <div id="collapse-5" class="panel-collapse collapse">
                                    <div class="panel-body">Misi SMKI :
                                        <?php echo $row['misi'];?></div>
                                </div>
                            </div>
                            <!-- End Accordion 3 -->
                               

                            <?php
                        }
                        ?>
                        </div>
                        <!-- End Accordion -->
                    
					</div>
                    <!-- End Page Content-->
                  
                  
                    <!--Sidebar-->
                    <div class="col-md-3 sidebar right-sidebar">
                    
						<!-- Search Widget -->
					<div class="widget widget-search">
                            <form action="index.php?hal=search" method="POST">
                                <input type="search" name="cari" placeholder="Enter Keywords..." />
                                <button class="search-btn" type="submit" name="submit"><i class="icon-search-1"></i></button>
                            </form>
                        </div>

                        <div class="widget widget-categories">
                            <h4>Categories <span class="head-line"></span></h4>
                            <form method="GET" action="">
                            <ul>
                                <li>
                                    <a href="index.php?hal=artikel&mode=b" name="b">Berita</a>
                                </li>
                                <li>
                                    <a href="index.php?hal=artikel&mode=pm" name="pm">Pengumuman</a>
                                </li>
                                <li>
                                    <a href="index.php?hal=artikel&mode=si" name="si">OSIS</a>
                                </li>
                                <li>
                                    <a href="index.php?hal=artikel&mode=pra" name="pra">Pramuka</a>
                                </li>
                                <li>
                                    <a href="index.php?hal=artikel&mode=keg" name="keg">Kegiatan</a>
                                </li>
                            </ul>
                            </form>
                        </div>

                            <?php
                        include "pag/wiget/popular.php";
                        ?>
                      
                      
                     

					</div>
                    <!--End sidebar-->
					</div>
                    
                 