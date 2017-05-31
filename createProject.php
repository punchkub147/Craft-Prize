<?php 
	$title = 'Create Project';
	include('layouts/header.php');
 ?>

<div class="container">
	<form action="createProject_api.php" method="post">
		<div class="w-6 formProject">
			<label for="">ชื่อโครงการ</label>
			<input class="input" type="text" placeholder="ชื่อโครงการ" name="name" required>
			<label for="">ประเภทงาน</label>
			<select class="select" name="category" id="">
				<?php 
					require 'connectDB.php';
					$sql = "SELECT category_id,category_name
					        FROM categories
					        ";
					
					$result = $mysqli->query($sql);
					if ($result->num_rows > 0) {
					    while ($rows = $result->fetch_assoc()) {
					    ?>
							<option value="<?php echo $rows['category_id'];?>"><?php echo $rows['category_name']; ?></option>
						<?php
					    }
					}else{
						?>
							<option value="">ไม่มีประเภท</option>
						<?php
					}
				 ?>
			</select>
			<label for="">รายละเอียด</label>
			<textarea class="input-textarea" placeholder="รายละเอียด" name="description" id="" cols="30" rows="3" required></textarea>
			<!-- <label for="">รูปภาพ</label>
			<input class="input" type="file" placeholder="Upload Poster" name="poster">
			 -->
			<!-- <input class="input" type="text" placeholder="ประเภท" name="category" required> -->
			<label for="">เงินรางวัล</label>
			<input class="input" type="text" placeholder="อันดับที่ 1" name="prize1" required>
			<input class="input" type="text" placeholder="อันดับที่ 2" name="prize2" required>
			<input class="input" type="text" placeholder="อันดับที่ 3" name="prize3" required>
			<label for="">คุณสมบัติ</label>
			<input class="input" type="text" placeholder="18" name="age1" required>
			<input class="input" type="text" placeholder="60" name="age2" required>
			<input class="input" type="text" placeholder="อาชีพ" name="job" required>
			<input class="input" type="text" placeholder="คุณสมบัติอื่น" name="other" required>
			<label for="">สิ้นสุดโครงการ</label>
			<input class="input" type="date" placeholder="End Date" name="end_at" required>
			<label for="">ช่องทางการติดต่อ</label>
			<input class="input" type="text" placeholder="เว็บไซต์" name="website" required>
			<input class="input" type="text" placeholder="เบอร์โทรศัพท์" name="tel" required>

			<input class="btn w-12" type="submit" value="Public">
			<div class="cb"></div>
			
		</div>
	</form>
</div>









 <?php 
	include('layouts/footer.php');
 ?>
