<!-- Nav Bar Start -->
<div class="nav-bar">
	<div class="container">
		<nav class="navbar navbar-expand-md bg-dark navbar-dark">
			<a href="#" class="navbar-brand">MENU</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
				<div class="navbar-nav mr-auto">
					<a href="<?= base_url() ?>" class="nav-item nav-link active">Home</a>
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kategori</a>
						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">Sub Item 1</a>
							<a href="#" class="dropdown-item">Sub Item 2</a>
						</div>
					</div>
					<a href="<?= base_url('home/contact') ?>" class="nav-item nav-link">Contact Us</a>
				</div>
				<div class="social ml-auto">
					<a href="https://twitter.com/Wisnuinu_23"><i class="fab fa-twitter"></i></a>
					<a href="https://web.facebook.com/profile.php?id=100010394822710"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.instagram.com/king__w23/"><i class="fab fa-instagram"></i></a>
					<a href="https://www.youtube.com/channel/UCJFi0ztWQN6SmLxgI85_yKw"><i class="fab fa-youtube"></i></a>
				</div>
			</div>
		</nav>
	</div>
</div>
<!-- Nav Bar End -->