
    <h1>Kotak Pesan </h1>
<hr>
		
<form id="mainform" action="">
<div class='row-fluid'>
<div class='span12 box'>
<div class='chat row-fluid'>
<div class='box box-nomargin span12'>
<div class='box-content box-no-padding'>
<div class='scrollable' data-scrollable-height='500' data-scrollable-start='bottom'>
<ul class='unstyled list-hover list-striped'>	

	<?php
	include "../config.php";
	$id=isset($_SESSION['id']);
	$sql = $conn->query("select * from tbl_pesan where id_reply=0 and id_user='$id' or id_teman='$id'  order by tanggal desc");
	
	while($r=$sql->fetch_assoc()){;
		$id_inbox=$r['id_inbox'];
	
		if($r['id']==$id){
			$status_in="To";
			$user_inbox=$r['id_teman'];
		}else{
			$status_in="From";
			$user_inbox=$r['id'];
		}
	
		$query_cek1=$conn->query("select * from tbl_pesan where id_inbox='$id_inbox' and dibaca='no' order by tanggal desc");
		while($cek1=$query_cek1->fetch_assoc());
		
		$query_cek2=$conn->query("select * from tbl_pesan where id_reply='$id_inbox' and dibaca='no' order by tanggal desc");
		while($cek2=$query_cek2->fetch_assoc());
			
		if($cek1!==0 || $cek2!==0){
			$baru="<i class='icon-envelope-alt' title='Pesan Belum Dibaca'></i>";
		}else{
			$baru="<i class='icon-envelope' title='Pesan Sudah Dibaca'></i>";
		}
		
		$row_user=mysql_fetch_array(mysql_query("select nama_user from tbl_user_pesan where id_user='$user_inbox'"));
		?>

<li class='message'>
    <div class='avatar'>
         <?php if($baru!=""){ echo $baru; }?>
    </div>
    <div class='name-and-time'>
        <div class='name pull-left'>
            <small><b>
                <a href="?page=inbox_open&id_inbox=<?php echo $row['id_inbox'];?>&user_inbox=<?php echo $user_inbox;?>&dibaca='yes'"><?php echo $status_in." : ".$row_user['nama_user'];?></a>
            </b></small>
        </div>
        <div class='time pull-right'>
            <small class='date pull-right muted'>
                <span class='timeago fade has-tooltip' data-placement='top' title=<?php echo $row['tanggal'];?>><?php echo $row['tanggal'];?></span>
                <i class='icon-time'></i>
            </small>
        </div>
    </div>
    <div class='body'>
        <?php echo $row['message'];?> 
    </div>
</li>


		<?php
	}
	?>
	</ul>
	</div>
</div>
</div>
</div>
</div>
</div>
</form>