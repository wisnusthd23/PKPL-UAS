<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
	<div class="container">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">News</a></li>
			<li class="breadcrumb-item active">News details</li>
		</ul>
	</div>
</div>
<!-- Breadcrumb End -->

<!-- Single News Start-->
<div class="single-news">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="sn-container">
					<div class="sn-img">
						<img src="<?= base_url('gambar_berita/' . $berita->gambar_berita) ?>" />
					</div>
					<div class="sn-content">
						<h1 class="sn-title"><?= $berita->judul_berita ?></h1>
						<p>
							<?= $berita->isi_berita ?>
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="sidebar">
					<!-- <div class="sidebar-widget">
						<h2 class="sw-title">In This Category</h2>
						<div class="news-list">
							<div class="nl-item">
								<div class="nl-img">
									<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
								</div>
								<div class="nl-title">
									<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
								</div>
							</div>
							<div class="nl-item">
								<div class="nl-img">
									<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
								</div>
								<div class="nl-title">
									<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
								</div>
							</div>
							<div class="nl-item">
								<div class="nl-img">
									<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
								</div>
								<div class="nl-title">
									<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
								</div>
							</div>
							<div class="nl-item">
								<div class="nl-img">
									<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
								</div>
								<div class="nl-title">
									<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
								</div>
							</div>
							<div class="nl-item">
								<div class="nl-img">
									<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
								</div>
								<div class="nl-title">
									<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
								</div>
							</div>
						</div>
					</div> -->

					<div class="sidebar-widget">
						<div class="tab-news">
							<ul class="nav nav-pills nav-justified">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="pill" href="#basketball">Basketball</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="pill" href="#motogp">MotoGP</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="pill" href="#football">Football</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="pill" href="#badminton">Badminton</a>
								</li>
							</ul>

							<div class="tab-content">
								<div id="basketball" class="container tab-pane active">
									<?php foreach ($beritaa as $key => $value) { ?>
										<div class="tn-news">
											<div class="tn-img">
												<img src="<?= base_url('gambar_berita/' . $value->gambar_berita) ?>" />
											</div>
											<div class="tn-title">
												<a href="<?= base_url('home/detail_berita/' . $value->slug_berita) ?>"><?= substr(strip_tags($value->judul_berita), 0, 25) ?>...</a>
											</div>
										</div>
									<?php } ?>
								</div>
								<div id="motogp" class="container tab-pane fade">
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
								</div>
								<div id="football" class="container tab-pane fade">
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
								</div>
								<div id="football" class="container tab-pane fade">
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
								</div>
								<div id="badminton" class="container tab-pane fade">
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
									<div class="tn-news">
										<div class="tn-img">
											<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
										</div>
										<div class="tn-title">
											<a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Single News End-->


<div class="container">

	<div id="disqus_thread"></div>
	<script>
		/**
		 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
		 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
		/*
		var disqus_config = function () {
		this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
		this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
		};
		*/
		(function() { // DON'T EDIT BELOW THIS LINE
			var d = document,
				s = d.createElement('script');
			s.src = 'https://web-berita-sport.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
		})();
	</script>
	<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>