<?php 
	session_start();
	if (!isset($_SESSION['unique_id'])){
		header('location: login.php');
	}
?>


<?php include "header.php";?>
<body>
	<div class="wrapper">
		<section class="users">
			<header>
			<?php
	    		include_once "php/config.php";
				$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = ");
	
			?>
				<div class="content">
					<img src="img.jpg" alt="">
					<div class="details">
						<span>Giani Alvez</span>
						<p>Active Now</p>
					</div>
				</div>
				<a href="" class="logout">Logout</a>
			</header>
			<div class="search">
				<span class="text">Select a user to start chatting.</span>
				<input type="text" placeholder="Enter name to search...">
				<button><i class="fas fa-search"></i></button>
			</div>
			<div class="users-list">
				<a href="#">
					<div class="content">
						<img src="img.jpg" alt="">
						<div class="details">
							<span>Giani Alvez</span>
							<p>This is test message</p>
						</div>
					</div>
					<div class="status-dot"><i class="fas fa-circle"></i></div>
				</a>
				<a href="#">
					<div class="content">
						<img src="img.jpg" alt="">
						<div class="details">
							<span>Giani Alvez</span>
							<p>This is test message</p>
						</div>
					</div>
					<div class="status-dot"><i class="fas fa-circle"></i></div>
				</a>
				<a href="#">
					<div class="content">
						<img src="img.jpg" alt="">
						<div class="details">
							<span>Giani Alvez</span>
							<p>This is test message</p>
						</div>
					</div>
					<div class="status-dot"><i class="fas fa-circle"></i></div>
				</a>
				<a href="#">
					<div class="content">
						<img src="img.jpg" alt="">
						<div class="details">
							<span>Giani Alvez</span>
							<p>This is test message</p>
						</div>
					</div>
					<div class="status-dot"><i class="fas fa-circle"></i></div>
				</a>
				<a href="#">
					<div class="content">
						<img src="img.jpg" alt="">
						<div class="details">
							<span>Giani Alvez</span>
							<p>This is test message</p>
						</div>
					</div>
					<div class="status-dot"><i class="fas fa-circle"></i></div>
				</a>
				<a href="#">
					<div class="content">
						<img src="img.jpg" alt="">
						<div class="details">
							<span>Giani Alvez</span>
							<p>This is test message</p>
						</div>
					</div>
					<div class="status-dot"><i class="fas fa-circle"></i></div>
				</a>
			</div>
		</section>
	</div>

	<script src="javascript/users.js"></script>

</body>
</html>