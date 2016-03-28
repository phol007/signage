<?php
///echo $_FILES['Pic']['name'];
echo "<meta charset='utf-8'>";

	if($_FILES['Pic']['name']){//ตรวจสอบว่ามีการส่งรูปหรือไม่

		$Pic_time = date("Y-m-d H:i:s");
		$Pic_cover = $_FILES['Pic']['name'];
		$Pic_tmp=$_FILES['Pic']['tmp_name'];
		$pic_size=$_FILES['Pic']['size'];

		if($pic_size<200000){
		echo"<script language=\"JavaScript\">alert('รูปของคุณมีขนาดเกิน 2 MB หรือ 2,000 KB หรือน้อยกว่า 200 KBกรุณากรอกข้อมูลใหม่!!')</script>";
		$check_size=false;
		echo "<script language='javascript'>window.location='setting.php'</script>";
		}else{
			$check_size=true;
			copy($Pic_tmp,"images/$Pic_cover");
			echo"<script language=\"JavaScript\">alert('เพิ่มป้ายประกาศรียบร้อย!! ".$_POST['type']."')</script>";
			//echo "<script language='javascript'>window.location='setting.php'</script>";
			}
	}else{
		echo $_POST['data']."<br>";
		echo $_POST['type'];
	}

?>