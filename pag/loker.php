

<div class="row blog-page">
                    
                    <!-- Start Blog Posts -->
					<div class="col-md-9 blog-box">
                      <?php
                        include "con.php";    
                        $result=mysql_query("SELECT a.id_l, a.isi, a.judul,a.id_user,a.tgl_upload,a.gambar,
                         a.tag,a.enabled, c.nama FROM loker a left join user c on a.id_user=c.id_user 
                         where a.enabled=1 order by tgl_upload DESC"); //output
                        $count = mysql_num_rows($result);
                        while($row=mysql_fetch_array($result)){ 
                        $format = date('d F Y', strtotime($row['tgl_upload'] ));
                      ?>  
                        <!-- Start Post -->
						<div class="blog-post image-post">
                            <!-- Post Thumb -->
                        	<div class="post-head">
                            	<a class="lightbox" title="<?php echo $row['judul'];?>" href="images/loker/<?php echo $row['gambar'];?>">
                                    <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                                    <img alt="" width="250" src="images/loker/<?php echo $row['gambar'];?>">
                                </a>
                            </div>
                            <!-- Post Content -->
							<div class="post-content">
                            	<div class="post-type"><i class="icon-picture-3"></i></div>
								<h2><a href="#"><?php echo $row['judul'];?></a></h2>
                                <ul class="post-meta">
                                	<li>By <a href="#"><?php echo $row['nama'];?></a></li>
                                    <li><?php echo $format; ?></li>
                                    <li><a href="#"><?php echo $row['tag'];?></a></li>
                                </ul>
								<p><?php echo $row['isi'];?></p>
								<a class="main-button" href="index.php?hal=detlok&id_l=<?php echo $row['id_l'];?>">Read More <i class="icon-right-small"></i></a>
							</div>
						</div>
                        <!-- End Post -->
                       <?php
                   }
                   ?>
                        <!-- Start Pagination -->
						<div id="pagination">
                        	<span class="all-pages">Page 1 of 3</span>
                            <span class="current page-num">1</span>
                            <a class="page-num" href="#">2</a>
                            <a class="page-num" href="#">3</a>
                            <a class="next-page" href="#">Next</a>
                        </div>
                        <!-- End Pagination -->

					</div>
                    <!-- End Blog Posts -->
                  
                    
                    <!--Sidebar-->
                    <div class="col-md-3 sidebar right-sidebar">
                    
						<!-- Search Widget -->
						<div class="widget widget-search">
							<form action="index.php?hal=search" method="POST">
                                <input type="search" name="cari" placeholder="Enter Keywords..." />
                                <button class="search-btn" type="submit" name="submit"><i class="icon-search-1"></i></button>
                            </form>
						</div>

                        <!-- Categories Widget -->
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

                        <!-- Popular Posts widget -->
						<?php
                        include "pag/wiget/popular.php";
                        ?>
                      
                        <!-- Video Widget 
						<div class="widget">
							<h4>Video <span class="head-line"></span></h4>
							<div>
                            	<iframe src="http://player.vimeo.com/video/74013667?byline=0&amp;portrait=0&amp;badge=0" width="800" height="450" frameborder="0"></iframe>
							</div>
						</div>-->
                        
                        <!-- Tags Widget 
                        <div class="widget widget-tags">
							<h4>Tags <span class="head-line"></span></h4>
							<div class="tagcloud">
                            	<a href="#">Portfolio</a>
                                <a href="#">Theme</a>
                                <a href="#">Mobile</a>
                                <a href="#">Design</a>
                                <a href="#">Wordpress</a>
                                <a href="#">Jquery</a>
                                <a href="#">CSS</a>
                                <a href="#">Modern</a>
                                <a href="#">Theme</a>
                                <a href="#">Icons</a>
                                <a href="#">Google</a>
							</div>
						</div>-->

					</div>
                    <!--End sidebar-->
                    
                    
				</div>