		<div class="big-title text-center">
                    	<h1>Kegiatan<span class="accent-color"></span><strong> Kami</strong></h1>
						<p class="title-desc">Event & Creative</p>
                    </div>
					<div class="hr5" style="margin-top:30px; margin-bottom:35px;"></div>
                

 <?php
include 'con.php';
$a=mysql_query("select * from gallery where enabled=1 order by tgl_upload");

?>
<div class="row portfolio-page">
                
                	<!-- Start Portfolio Filter -->
                	<div class="portfolio-filter col-md-12">
                    	<ul>
                            <li><a href="#" class="selected" data-filter="*">Show All</a></li>
                            <li><a href="#" data-filter=".pramuka">Pramuka</a></li>
                            <li><a href="#" data-filter=".petualangan">Petualangan</a></li>
                            <li><a href="#" data-filter=".baksos">Baksos</a></li>
                            <li><a href="#" data-filter=".kegiatan">Kegiatan</a></li>
                            <li><a href="#" data-filter=".osis">Osis</a></li>
                            <li><a href="#" data-filter=".rpl">RPL</a></li>
                            <li><a href="#" data-filter=".tkr">TKR</a></li>
                        </ul>
                    </div>
                    <!-- End Portfolio Filter -->
                      
                    <!-- Start Portfolio Items -->
                    <div id="portfolio" class="portfolio-4">
                     <?php
                        while ($row=mysql_fetch_array($a)) {
                        ?>
                      
                       
                        <!-- Start Portfolio Item -->
                        <div class="portfolio-item <?php echo $row['tipe'];?> col-md-3">
                        	<div class="portfolio-border">
                                <!-- Start Portfolio Item Thumb -->
                                <div class="portfolio-thumb">
                                    <a class="lightbox" data-lightbox-type="ajax" href="https://drive.google.com/uc?export=view&id=<?php echo $row['gambar'];?>">
                                        <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                                        <img alt="" src="https://drive.google.com/uc?export=view&id=<?php echo $row['gambar'];?>" />

                                    </a>
                                </div>
                                <!-- End Portfolio Item Thumb -->
                                <!-- Start Portfolio Item Details -->
                                <div class="portfolio-details">
                                    <a href="#">
                                        <h4><?php echo $row['nama'];?></h4>
                                        <span><?php echo $row['tipe'];?></span>
                                    </a>
                                   
                                </div>
                                <!-- End Portfolio Item Details -->
                            </div>
                    	</div>
                    <?php
     }
     ?>
                    </div>
           <!-- End Portfolio Items -->
    
				</div>
		         