<?php 

	if(!isset($_GET['search'])){
		$search = "";
	}else{
		$search = $_GET['search'];
	}

	if(!isset($_GET['filter'])){
		$filter = "99";
	}else{
		$filter = $_GET['filter'];
	}

	if(!isset($_GET['category'])){
		$category = "";
	}else{
		$category = $_GET['category'];
	}

	$title = 'Search Project';
	include('layouts/header.php');
 ?>

<div class="container">
		<div class="search w-12">
			<form action="searchProject.php?search=$search" method="">
				<input type="text" class="input" name="search" placeholder="ค้นหาชื่อโครงการ">
				<input type="submit" value="ค้นหา" class="btn btn-search">
			</form>
		</div>
		<div class="filter w-6">
			<nav>
				<ul>
					<a href="searchProject.php?filter=<?php echo $filter; ?>&category=" <?php if($category == "")echo "id=\"active\""; ?>class="fl"><li>All</li></a>
					<a href="searchProject.php?filter=<?php echo $filter; ?>&category=1" <?php if($category == 1)echo "id=\"active\""; ?>class="fl"><li>Logo</li></a>
					<a href="searchProject.php?filter=<?php echo $filter; ?>&category=2" <?php if($category == 2)echo "id=\"active\""; ?>class="fl"><li>Poster</li></a>
					<a href="searchProject.php?filter=<?php echo $filter; ?>&category=3" <?php if($category == 3)echo "id=\"active\""; ?>class="fl"><li>Mascot</li></a>
				</ul>
			</nav>
		</div>
		<div class="filter w-6">
			<nav>
				<ul>
					<!-- <a href="searchProject.php?filter=10" <?php if($filter == 0)echo "id=\"active\""; ?>><li>หมวดหมู่</li></a> -->
					<!-- <a href="searchProject.php?filter=1" <?php if($filter == 1)echo "id=\"active\""; ?>><li>สำหรับคุณ</li></a> -->
					<a href="searchProject.php?filter=2&category=<?php echo $category; ?>" <?php if($filter == 2)echo "id=\"active\""; ?>class="fr"><li>ใกล้หมดเวลา</li></a>
					<a href="searchProject.php?filter=3&category=<?php echo $category; ?>" <?php if($filter == 3)echo "id=\"active\""; ?>class="fr"><li>เงินรางวัลมากที่สุด</li></a>
					<!-- <a href="searchProject.php?filter=4" <?php if($filter == 4)echo "id=\"active\""; ?>><li>ยอดนิยม</li></a> -->
					<!-- <a href="searchProject.php?filter=5" <?php if($filter == 5)echo "id=\"active\""; ?>><li>สิ้นสุด</li></a> -->
				</ul>
			</nav>
			
		</div>

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
			//$user_id = $userLogin['user_id'];
			$search = " projects.project_name LIKE '%$search%'
						";
			$category = " projects.category_id LIKE '%$category%'
						";

			if($filter == 10){
				$filter = "	WHERE projects.category_id = '$category'";
			}else if($filter == 1){
				$filter = "	LEFT JOIN user_category
			    			ON projects.category_id = user_category.category_id
							WHERE user_category.user_id = '$user_id'
			    			AND $search AND $category
			    			";
			}else if($filter == 2){
				$filter = 	"	WHERE $search AND $category
								ORDER BY end_at ASC
							";
			}else if($filter == 3){
				$filter = 	"	WHERE $search AND $category
								ORDER BY prize DESC
							";
			}else if($filter == 4){
				$filter = "	LEFT JOIN items
			    			ON projects.project_id = items.project_id
							WHERE user_category.user_id = '$user_id'
							AND $search AND $category
							";
			}else if($filter == 5){
				$filter = "	WHERE $search AND $category
							ORDER BY end_at ASC		
							";	
			}else{
				$filter = " WHERE $search AND $category
							";
			}

			
			
			$sql = "SELECT project_name,prize_1st,prize_2nd,prize_3rd,end_at,categories.category_name,(prize_1st+prize_2nd+prize_3rd) as prize
			        FROM projects
			        LEFT JOIN categories
			        ON projects.category_id = categories.category_id
			        ".$filter;
			
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
								<p><?php echo date("d-m-Y", strtotime($rows['end_at'])); ?></p>
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
