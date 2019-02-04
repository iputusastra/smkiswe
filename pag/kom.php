                               
                        <div id="comments">
                        	<h2 class="comments-title">() Comments</h2>
                             <?php
                                include"con.php";
                                $id_l=$_GET['id_l'];
                                $e=mysql_query("SELECT * FROM  komentar  WHERE id_l='$id_l' and enabled=1");
                                while ($row=mysql_fetch_array($e)) {
                                ?>
                            <ol class="comments-list">
                                
                            	<li>
                                	<div class="comment-box clearfix">
                                    	<div class="avatar"><img alt="" src="http://placehold.it/70x70/fff/444" /></div>
                                        <div class="comment-content">
                                        	<div class="comment-meta">
                                            	<span class="comment-by"><?php echo $row['owner'];?></span>
                                                <span class="comment-date"><?php echo $format;?></span>
                                                <span class="reply-link"><a href="#">Reply</a></span>
                                            </div>
                                            <p><?php echo $row['komentar'];?></p>
                                        </div>
                                    </div>
                                </li>
                             
                                
                            </ol>
                             <?php
                                    }
                                    ?>
                            <!-- Start Respond Form -->
                            <div id="respond">
                            	<h2 class="respond-title">Leave a reply</h2>
                                <form action="#">
                                	<div class="row">
                                    	<div class="col-md-4">
                                        	<label for="author">Name<span class="required">*</span></label>
                                            <input id="author" name="author" type="text" value="" size="30" aria-required="true">
                                        </div>
                                        <div class="col-md-4">
                                        	<label for="email">Email<span class="required">*</span></label>
                                            <input id="email" name="author" type="text" value="" size="30" aria-required="true">
                                        </div>
                                        <div class="col-md-4">
                                        	<label for="url">Website<span class="required">*</span></label>
                                            <input id="url" name="url" type="text" value="" size="30" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-md-12">
                                            <label for="comment">Add Your Comment</label>
                                            <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                            <input name="submit" type="submit" id="submit" value="Submit Comment">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Respond Form -->
                            
                        </div>
                        <!-- End Comment Area -->

if ($email=='') {
        echo "
        <div class='alert alert-warning fade in'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                            <strong>Peringatan!</strong> Isikan dahulu nama email....
                        </div>";
    }elseif ($name=='') {
        echo "
        <div class='alert alert-warning fade in'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                            <strong>Peringatan!</strong> Isikan dahulu nama kamu....
                        </div>";
    }elseif ($message=='') {
        echo "
        <div class='alert alert-warning fade in'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                            <strong>Peringatan!</strong> Komentar Gagal di simpan..!!
                        </div>";
    }else{