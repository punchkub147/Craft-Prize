<?php 
	$title = 'Winner Project';
	include('layouts/header.php');

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
 ?>

<div class="container">
		<div class="search w-12">
			<form action="" method="">
				<input type="text" class="input" placeholder="ค้นหาชื่อโครงการ">
				<input type="submit" value="ค้นหา" class="btn btn-search">
			</form>
		</div>
		<div class="filter w-12">
			<nav>
				<ul>
					<a href="winnerProject.php?filter=<?php echo $filter; ?>&category=" <?php if($category == "")echo "id=\"active\""; ?>class="fl"><li>All</li></a>
					<a href="winnerProject.php?filter=<?php echo $filter; ?>&category=1" <?php if($category == 1)echo "id=\"active\""; ?>class="fl"><li>Logo</li></a>
					<a href="winnerProject.php?filter=<?php echo $filter; ?>&category=2" <?php if($category == 2)echo "id=\"active\""; ?>class="fl"><li>Poster</li></a>
					<a href="winnerProject.php?filter=<?php echo $filter; ?>&category=3" <?php if($category == 3)echo "id=\"active\""; ?>class="fl"><li>Mascot</li></a>
				</ul>
			</nav>
		</div>

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


</div>
	
 <?php 
	include('layouts/footer.php');
 ?>
