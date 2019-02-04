

<div class="page-banner no-subtitle">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Testimonials</h2>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumbs">
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <div class="hr5" style="margin-top:40px;margin-bottom:40px;"></div>

<?php
include"con.php";
$result=mysql_query("select * from testi ORDER BY id_t DESC"); //output
while($row=mysql_fetch_array($result)){
?>
<div class="classic-testimonials">
                            <div class="testimonial-content">
                                <p><?php echo $row['isi'];?>.</p>
                            </div>
                            <div class="testimonial-author"><span><?php echo $row['nama'];?></span> - <?php echo $row['pekerjaan'];?></div>
</div>
<div class="hr5" style="margin-top:40px;margin-bottom:40px;"></div>
<?php

}
?>

