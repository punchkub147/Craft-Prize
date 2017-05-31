<?php 
	$title = 'Home';
	include('layouts/header.php');
 ?>

	<div class="banner">
		<h1>CraftPrize</h1>
	</div>

	<div class="banner-news">
		<h3>ประกาศโครงการของคุณ <br> ให้นักออกแบบกว่า   120,429     คนได้เห็น</h3>
		<a href="createProject.php"><button class="btn">ประกาศโครงการ</button></a>
	</div>

	<div class="container">
		<div class="row">
			<a href="###">
				<div class="w-3 pull">
					<div class="item-card w-12">
						<img src="" alt="" class="img">
						<div class="item-description">
							<div class="item-project">
								<p>ตราสัญลักษณ์ โลโก้องกรณ์</p>
							</div>
							<div class="item-designer">
								<p>by <a href="###">PunchilZ</a></p>
							</div>
						</div>
						<div class="line"></div>
						<div class="item-prize">
							<h5> ฿ 30,000 </h5>
						</div>
					</div>
				</div>
			</a>
			<a href="###">
				<div class="w-3 pull">
					<div class="item-card w-12">
						<img src="" alt="" class="img">
						<div class="item-description">
							<div class="item-project">
								<p>ตราสัญลักษณ์ โลโก้องกรณ์</p>
							</div>
							<div class="item-designer">
								<p>by <a href="###">PunchilZ</a></p>
							</div>
						</div>
						<div class="line"></div>
						<div class="item-prize">
							<h5> ฿ 30,000 </h5>
						</div>
					</div>
				</div>
			</a>
			<a href="###">
				<div class="w-3 pull">
					<div class="item-card w-12">
						<img src="" alt="" class="img">
						<div class="item-description">
							<div class="item-project">
								<p>ตราสัญลักษณ์ โลโก้องกรณ์</p>
							</div>
							<div class="item-designer">
								<p>by <a href="###">PunchilZ</a></p>
							</div>
						</div>
						<div class="line"></div>
						<div class="item-prize">
							<h5> ฿ 30,000 </h5>
						</div>
					</div>
				</div>
			</a>
			<a href="###">
				<div class="w-3 pull">
					<div class="item-card w-12">
						<img src="" alt="" class="img">
						<div class="item-description">
							<div class="item-project">
								<p>ตราสัญลักษณ์ โลโก้องกรณ์</p>
							</div>
							<div class="item-designer">
								<p>by <a href="###">PunchilZ</a></p>
							</div>
						</div>
						<div class="line"></div>
						<div class="item-prize">
							<h5> ฿ 30,000 </h5>
						</div>
					</div>
				</div>
			</a>

		</div>
		<div class="cb"></div>
	</div>

	<div class="banner-news">
		<h3>โชว์ฝีมือการออกแบบของคุณ <br> เพื่อชิงเงินรางวัลกว่า 4,855,000 บาท</h3>
		<a href="searchProject.php"><button class="btn">ค้นหาโครงการ</button></a>
	</div>

	<div class="container">
		<?php 
			require 'connectDB.php';
			$sql = "SELECT project_name,prize_1st,prize_2nd,prize_3rd,end_at,categories.category_name,(prize_1st+prize_2nd+prize_3rd) as prize
			        FROM projects
			        LEFT JOIN categories
			        ON projects.category_id = categories.category_id
			        LIMIT 3
			        ";
			
			$result = $mysqli->query($sql);
			if ($result->num_rows > 0) {
			    while ($rows = $result->fetch_assoc()) {
			    ?>
					<a href="###" id="modal-btn-project">
						<div class="project-card w-12">
							<div class="project-name w-6">
								<p><?php echo $rows['project_name']; ?></p>
								<p><?php echo $rows['category_name']; ?></p>
							</div>
							<div class="project-competitor w-2">
								<p>300</p>
							</div>
							<div class="project-prize w-2">
								<p><?php echo $rows['prize']; ?></p>
							</div>
							<div class="project-countdown w-2">
								<p><?php echo $rows['end_at']; ?></p>
							</div>
						</div>
					</a>
				<?php
			    }
			}else{
				//echo $sql;

				echo "
				<h3 class=\"cb\">ไม่พบโครงการที่ค้นหา</h3>";
			}
			$mysqli->close();
		 ?>

		<div class="cb"></div>
	</div>
	
 <?php 
	include('layouts/footer.php');
 ?>
