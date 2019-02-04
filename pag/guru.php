<div class="section" style="padding-top:60px; padding-bottom:40px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#fff;">
            	<div class="container">
                
                    <!-- Start Big Heading -->
                	<div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
                    	<p class="title-desc">Karyawan dan</p>
                        <h1>Tenaga Pengajar <strong>Kami</strong></h1>
                    </div>
                    <!-- End Big Heading -->
                    
                    <!-- Some Text -->
                    <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <span class="accent-color sh-tooltip" data-placement="right" title="Simple Tooltip">doloremque laudantium</span>, totam rem aperiam, eaque ipsa quae ab illo inventore<br/> veritatis et quasi <span class="accent-color sh-tooltip" data-placement="bottom" title="Simple Tooltip">architecto</span> beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                    
                    <!-- Divider -->
                    <div class="hr1" style="margin-bottom:35px;"></div>
                    
                    <!-- Start Team Members -->
                    <div class="row">
                    
					<?php
                    include "con.php";
                    $q=mysql_query("Select * from guru order by id_g asc");
                    while($r=mysql_fetch_array($q)){
                    ?>

					<!-- Start Memebr 1 -->
                    	<div class="col-md-2" data-animation="fadeIn" data-animation-delay="03">
                            <div class="team-member">
                                <!-- Memebr Photo, Name & Position -->
                                <div class="member-photo">
                                    <img width="320" height="320" alt="" src="images/guru/<?php echo $r['foto'];?>" />
                                    <div class="member-name"><?php echo $r['nama'];?> <span><?php echo $r['mapel'];?></span></div>
                                </div>
                                <!-- Memebr Words -->
                                <div class="member-info">
                                    <p><?php echo $r['alamat'];?></p>
                                </div>
                                <!-- Memebr Social Links -->
                                <div class="member-socail">
                                    <a class="twitter" href="#"><i class="icon-twitter-2"></i></a>
                                    <a class="gplus" href="#"><i class="icon-gplus"></i></a>
                                    <a class="facebook" href="#"><i class="icon-facebook"></i></a>
                                    <a class="instagram" href="#"><i class="icon-instagram"></i></a>
                                    <a class="mail" href="#"><i class="icon-mail-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- End Memebr 5 -->
						
						<?php
                            }
                        ?>
                    
                    </div>
                    <!-- End Team Members -->
                    
                    <!-- Divider -->
                    <div class="hr1" style="margin-bottom:40px;"></div>
                    
                    
                
                </div>
            </div>
            <!-- End Full Width Section 6 -->
