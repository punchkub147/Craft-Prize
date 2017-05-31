<?php 
	$title = 'My Project';
	include('layouts/header.php');
 ?>

<div class="container">
		<!-- <div class="search w-12">
			<form action="" method="">
				<input type="text" class="input" placeholder="ค้นหาชื่อโครงการ">
				<input type="submit" value="ค้นหา" class="btn btn-search">
			</form>
		</div> -->

			<div class="project-head w-12">
				<div class="project-head-in w-6">
					<p>ชื่อโครงการ</p>
				</div>
				<div class="project-head-in w-2">
					<p>ผู้เข้าร่วม</p>
				</div>
				<div class="project-head-in w-2">
					<p>รางวัลรวม</p>
				</div>
				<div class="project-head-in w-2">
					<p>สิ้นสุดเมื่อ</p>
				</div>
			</div>

		<?php 
		require 'connectDB.php';
			$user_id = $userLogin['user_id'];

			$sql = "SELECT project_name,prize_1st,prize_2nd,prize_3rd,end_at,categories.category_name
			        FROM projects
			        LEFT JOIN categories
			        ON projects.category_id = categories.category_id
			        WHERE user_id = '$user_id'
			        ORDER BY project_id DESC
			        ";
			
			$result = $mysqli->query($sql);
			if ($result->num_rows > 0) {
			    while ($rows = $result->fetch_assoc()) {
			    ?>
					<a href="">
						<div class="project-card w-12">
							<div class="project-name w-6">
								<p><?php echo $rows['project_name']; ?></p>
								<p><?php echo $rows['category_name']; ?></p>
							</div>
							<div class="project-competitor w-2">
								<p>0</p>
							</div>
							<div class="project-prize w-2">
								<p><?php echo $rows['prize_1st']+$rows['prize_2nd']+$rows['prize_3rd']; ?></p>
							</div>
							<div class="project-countdown w-2">
								<p><?php echo date("d-m-Y", strtotime($rows['end_at'])); ?></p>
							</div>
						</div>
					</a>
				<?php
			    }
			}else{
				echo $sql;
			}
		?>
		
		

	<div class="cb"></div>
</div>

	
 <?php 
	include('layouts/footer.php');
 ?>
