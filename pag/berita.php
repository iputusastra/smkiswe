<?php
 include"con.php";
 $id_b=$_GET['id_b'];
 $edit=mysql_query("SELECT a.*, c.nama, b.* FROM (artikel a left join user c on a.id_user=c.id_user)LEFT JOIN komentar b on a.id_b=b.id_b where a.id_b='$id_b' and a.enabled=1 order by a.tgl_upload DESC");
 $row=mysql_fetch_array($edit);
 $format = date('d F Y', strtotime($row['tgl_upload'] ));
 ?>

            <div class="post-content">

                
                      <div class="col-md-7">
                       <h4 class="classic-title"><span><?php echo $row['judul'];?></span></h4>
                           

                            <p></p>
                            <p><?php echo $row['isi'];?></p>
                           
                            <p></p>
                          
                      </div>
                      
                        <div class="col-md-5"> 
                          
                            <!-- Start Touch Slider -->
                            <div class="touch-slider" data-slider-navigation="true" data-slider-pagination="true">
                                <div class="item"><img sizes="320" alt="" src="images/berita/<?php echo $row['gambar'];?>"></div>
                            </div>
                            <!-- End Touch Slider -->
                        </div>

                       <div class="col-md-12">
                        <ul class="post-meta">
                                  <li>By <?php echo $row['nama'];?></li>
                                    <li><?php echo $format;?></li>
                                    <li><?php echo $row['kategori'];?></li>
                                </ul>
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
                        <?php
                            $id_b=$_GET['id_b'];
                            $a=mysql_query("SELECT * FROM komentar WHERE id_b='$id_b' and enabled=1");
                            $count = mysql_num_rows($a);
                        ?>
                        <div id="comments">
                          <h2 class="comments-title">(<?php echo $count;?>) Comments</h2>
                            <?php
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
$id_b=$_GET['id_b'];
if(isset($_POST['submit'])){ 
    $email      = $_POST['email'];
    $message   = $_POST['message'];
    $name      = $_POST['name'];

    
    $sql=mysql_query("INSERT INTO komentar (id_b,owner,email,komentar,enabled) VALUES ('$id_b','$name','$email','$message','0')");
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


                       </div> 
</div>