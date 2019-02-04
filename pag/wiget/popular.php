<div class="widget widget-popular-posts">
							<h4>Popular Post <span class="head-line"></span></h4>
                            <?php
                                include"pag/con.php";
                                $result=mysql_query("select * from artikel where enabled=1 ORDER BY tgl_upload DESC LIMIT 5 "); //output
                                while($row=mysql_fetch_array($result)){
                                $format = date('d F Y', strtotime($row['tgl_upload'] ));
                               
                                ?>
							<ul>
								<li>
                                	<div class="widget-thumb">
                                    	<a href="index.php?hal=berita&id_b=<?php echo $row['id_b'];?>"><img src="images/berita/<?php echo $row['gambar'];?>" alt="" /></a>
                                    </div>
                                    <div class="widget-content">
                                    	<h5><a href="index.php?hal=berita&id_b=<?php echo $row['id_b'];?>"><?php echo $row['judul'];?></a></h5>
                                        <span><?php echo $format;?></span>
                                    </div>
                                    <div class="clearfix"></div>
								</li>
                                
                                <?php
                            }
                            ?>
							</ul>
						</div>