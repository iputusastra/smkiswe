
<!-- Divider -->
                <div class="hr1" style="margin-top:15px; margin-bottom:15px;"></div>

                <div class="row">
                	<div class="col-md-8">
                    
                    	<!-- Start Recent Posts Carousel -->
                        <div class="latest-posts">
                            <h4 class="classic-title"><span>Berita Terbaru</span></h4>
                            <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2">
                                
                                <?php
                                include"con.php";
                                $result=mysql_query("select * from artikel ORDER BY tgl_upload DESC"); //output
                                $no=0;
                                while($row=mysql_fetch_array($result)){
                                $no++;
                                $date = $row['tgl_upload'];
                                $format = date('d', strtotime($date ));
                                $format1 = date('M', strtotime($date ));
                               
                                ?>
                                 <div class="post-row item">
                                    <div class="left-meta-post">
                                        <div class="post-date"><span class="day"><?php echo $format;?></span><span class="month"><?php echo $format1;?></span></div>
                                        <div class="post-type"><i class="icon-picture-3"></i></div>
                                    </div>
                                    <h3 class="post-title"><a href="#"><?php echo $row['judul'];?></a></h3>
                                    <div class="post-content">
                                      <?php echo substr($row['isi'],0, 170);?> <a class="read-more" href="index.php?hal=berita&id_b=<?php echo $row['id_b'];?>">Read More...</a></p>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
								<!-- Posts 1 -->
								
                                
                            </div>
                              <br><a class="main-button" href="index.php?hal=artikel&mode=al">Berita Lainya <i class="icon-right-small"></i></a></br>
                        </div>
                      
                        <!-- End Recent Posts Carousel -->
					</div>
					<div class="col-md-4">
                      
                   <h4 class="classic-title"><span>Testimonials Slider</span></h4>
                     
                     
                        <!-- Start Testimonials Carousel -->
                        <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1">
                            <!-- Testimonial 1 -->
                              <?php
                                include"super/conn.php";
                                $result=mysql_query("select * from testi "); //output
                                $no=0;
                                while($row=mysql_fetch_array($result)){
                                $no++;
                                ?><div class="classic-testimonials item">
                                <div class="testimonial-content">
                                    <p><?php echo $row['isi'];?></p>
                                </div>
                                <div class="testimonial-author"><span><?php echo $row['nama'];?></span> - <?php echo $row['pekerjaan'];?></div>
                            </div><?php } ?>
                            <!-- Testimonial 2 -->
                             
                      
                        <!-- End Testimonials Carousel -->

             </div></div></div>


                  
            