    <!-- Divider -->
<div class="hr1" style="margin-top:25px; margin-bottom:25px;"></div>
                 <?php
                    include 'pag/con.php';
                    $a=mysql_query("select * from gallery where enabled=1 order by tgl_upload");

                ?>
                                    <!-- Start Recent Projects -->
                <div class="recent-projects">
                	<h4 class="title"><span>Kegiatan Kami</span></h4>
                    <div class="projects-carousel touch-carousel">
                        <?php
                        while ($row=mysql_fetch_array($a)) {
                        ?>
                    	<!-- Start Project Item -->
                    	<div class="portfolio-item item">
                        	<div class="portfolio-border">
                                <!-- Start Project Thumb -->
                                <div class="portfolio-thumb">
                                    <a class="lightbox" data-lightbox-type="ajax" href="https://drive.google.com/uc?export=view&id=<?php echo $row['gambar'];?>">
                                        <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                                        <img alt="" src="https://drive.google.com/uc?export=view&id=<?php echo $row['gambar'];?>" />
                                    </a>
                                </div>
                                <!-- End Project Thumb -->
                                <!-- Start Project Details -->
                                <div class="portfolio-details">
                                    <a href="#">
                                        <h4><?php echo $row['nama'];?></h4>
                                        <span><?php echo $row['tipe'];?></span>
                                        
                                    </a>
                                    
                                </div>
                                <!-- End Project Details -->
                            </div>
                    	</div>
                        <!-- End Project Item -->
                        <?php
                            }
                        ?>
                	</div>
                </div>
                <!-- End Recent Projects -->
                
                <!-- Divider -->
            