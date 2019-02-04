<script type="text/javascript">
    $('.contactForm').validate({
        //statements to validate the form   
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var email = document.getElementById('e-mail');
        if (!filter.test(email.value)) {
            $('.email-missing').css({'opacity': 1 });
        } else {$('.email-missing').css({'opacity': 0 });}
        if (document.cform.name.value == "") {
            $('.name-missing').css({'opacity': 1 });
        } else {$('.name-missing').css({'opacity': 0 });}   
        if (document.cform.message.value == "") {
            $('.message-missing').css({'opacity': 1 });
        } else {$('.message-missing').css({'opacity': 0 });}        
        if ((document.cform.name.value == "") || (!filter.test(email.value)) || (document.cform.message.value == "")){
            return false;
        } 
        
  }); 
</script>

<?php
 include"con.php";
 $id_l=$_GET['id_l'];
 $edit=mysql_query("SELECT * FROM (loker l INNER JOIN komentar k on l.id_l=k.id_l) LEFT JOIN user u on l.id_user=u.id_user WHERE k.id_l='$id_l' and k.enabled=1");
 $ow=mysql_fetch_array($edit);
 $count = mysql_num_rows($edit);
$date = $ow['tgl_upload'];
$format = date('d F Y', strtotime($date ));

 ?>

<div class="col-md-9 blog-box">
                        
                        <!-- Start Single Post Area -->
                        <div class="blog-post gallery-post">
                          
                            <!-- Start Single Post (Gallery Slider) -->
                        	<div class="post-head">
                            	<div class="touch-slider post-slider">
                                    <div class="item">
                                        <a class="lightbox" title="This is an image title" href="images/loker/<?php echo $ow['gambar'];?>" data-lightbox-gallery="gallery1">
                                            <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                                            <img alt="" src="images/loker/<?php echo $ow['gambar'];?>">
                                        </a>
                                    </div>
                                   
                            	</div>
                            </div>
                            <!-- End Single Post (Gallery) -->
                          
                            <!-- Start Single Post Content -->
							<div class="post-content">
                            	<div class="post-type"><i class=" icon-picture-1"></i></div>
								<h2><?php echo $ow['judul'];?></h2>
                                <ul class="post-meta">
                                	<li>By <a href="#"><?php echo $ow['nama'];?></a></li>
                                    <li><?php echo $format;?></li>
                                    <li><?php echo $ow['tag'];?></li>
                                    <li><a href="#"><?php echo $count;?> Comments</a></li>
                                </ul>
                                <p><?php echo $ow['isi'];?></p>
                                
                                <div class="post-bottom clearfix">
                                    <div class="post-share">
                                        <span>Share This Post:</span>
                                        <a class="facebook" href="#"><i class="icon-facebook"></i></a>
                                        <a class="twitter" href="#"><i class="icon-twitter"></i></a>
                                        <a class="gplus" href="#"><i class="icon-gplus"></i></a>
                                        <a class="linkedin" href="#"><i class="icon-linkedin-1"></i></a>
                                        <a class="mail" href="#"><i class="icon-mail-4"></i></a>
                                    </div>
                                </div>
                                <div class="author-info clearfix">
                                	
                                </div>
							</div>
                            <!-- End Single Post Content -->
                          
						</div>
                        <!-- End Single Post Area -->
                    
                        <!-- Start Comment Area -->
						
                        <div id="comments">
                        	<h2 class="comments-title">(<?php echo $count;?>) Comments</h2>
                            <?php
                            $id_l=$_GET['id_l'];
                            $a=mysql_query("SELECT * FROM komentar WHERE id_l='$id_l' and enabled=1");
                            while ($row=mysql_fetch_array($a)) {
                            ?>
                            <ol class="comments-list">
                                
                            	<li>
                                	<div class="comment-box clearfix">
                                    	<div class="avatar"><img alt="" src="images/user.png" /></div>
                                        <div class="comment-content">
                                        	<div class="comment-meta">
                                            	<span class="comment-by"><?php echo $row['owner'];?></span>
                                                <span class="comment-date"><?php echo $format;?></span>
                                                <!--<span class="reply-link"><a href="#">Reply</a></span>-->
                                            </div>
                                            <p><?php echo $row['komentar'];?></p>
                                        </div>
                                    </div>
                                </li>
                             
                                
                            </ol>
                           <?php
                                    }
                                    ?>

<?php
$id_l=$_GET['id_l'];
if(isset($_POST['submit'])){ 
    $email      = $_POST['email'];
    $message   = $_POST['message'];
    $name      = $_POST['name'];

    
    $sql=mysql_query("INSERT INTO komentar (id_l,owner,email,komentar,enabled) VALUES ('$id_l','$name','$email','$message','0')");
        if($sql){
            echo "
   <div class='alert alert-success fade in'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                            <strong>Sukses!</strong> Komentar berhasil di simpan, tunggu admin untuk post yach....!!
                        </div>";
        }else{
            echo "<div class='alert alert-warning fade in'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                            <strong>Peringatan!</strong> Komentar Gagal di simpan..!!
                        </div>";
        }
}

?>
                            <!-- Start Respond Form -->
                            <div id="respond">
                            	<h2 class="respond-title">Leave a reply</h2>
                                    <div id="contact-form" class="contatct-form">
                                        <div class="loader"></div>

                                <form action="" class="contactForm" name="cform" method="post">
                                	<div class="row">
                                        <div class="col-md-4">
                                        <label for="name">Name<span class="required">*</span></label>
                                        <span class="name-missing">Tuliskan nama kamu</span>  
                                        <input id="name" name="name" type="text" value="" size="30">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="e-mail">Email<span class="required">*</span></label>
                                        <span class="email-missing">Email mu kleru brooo</span> 
                                        <input id="e-mail" name="email" type="text" value="" size="30">
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="message">Add Your Comment</label>
                                        <span class="message-missing">Tulisno kalimat sitik wae...</span>
                                        <textarea id="message" name="message" cols="45" rows="10"></textarea>
                                        <input type="submit" name="submit" class="button" id="submit_btn" value="Send Message">
                                    </div>
                                </div>

                                </form>
                            </div>
                        </div>

                            <!-- End Respond Form -->
                            
                        </div>
                        <!-- End Comment Area -->
  
					</div>
                  
                  
                    
					<!-- Sidebar -->
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
                            	
							</div>
						</div>
                        
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

</div>
