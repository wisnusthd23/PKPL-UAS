<!-- Top News Start-->
<!-- <div class="top-news">
	<div class="container">
		<div class="row">
			<div class="col-md-6 tn-left">
				<div class="row tn-slider">
					<div class="col-md-6">
						<div class="tn-img">
							<img src="<?= base_url() ?>template/front-end/img/news-450x350-1.jpg" />
							<div class="tn-title">
								<a href="">Lorem ipsum dolor sit amet</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="tn-img">
							<img src="<?= base_url() ?>template/front-end/img/news-450x350-2.jpg" />
							<div class="tn-title">
								<a href="">Integer hendrerit elit eget purus sodales maximus</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 tn-right">
				<div class="row">
					<div class="col-md-6">
						<div class="tn-img">
							<img src="<?= base_url() ?>template/front-end/img/news-350x223-1.jpg" />
							<div class="tn-title">
								<a href="">Lorem ipsum dolor sit</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="tn-img">
							<img src="<?= base_url() ?>template/front-end/img/news-350x223-2.jpg" />
							<div class="tn-title">
								<a href="">Lorem ipsum dolor sit</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="tn-img">
							<img src="<?= base_url() ?>template/front-end/img/news-350x223-3.jpg" />
							<div class="tn-title">
								<a href="">Lorem ipsum dolor sit</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="tn-img">
							<img src="<?= base_url() ?>template/front-end/img/news-350x223-4.jpg" />
							<div class="tn-title">
								<a href="">Lorem ipsum dolor sit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!-- Top News End-->

<!-- Category News Start-->
<div class="cat-news">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Basketball</h2>
				<div class="row cn-slider">
					<?php foreach ($berita as $key => $value) { ?>
						<div class="col-md-6">
							<div class="cn-img">
								<img src="<?= base_url('gambar_berita/' . $value->gambar_berita) ?>" />
								<div class="cn-title">
									<a href="<?= base_url('home/detail_berita/' . $value->slug_berita) ?>"><?= substr(strip_tags($value->judul_berita), 0, 25) ?>...</a>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-md-6">
				<h2>MotoGP</h2>
				<div class="row cn-slider">
					<div class="col-md-6">
						<div class="cn-img">
							<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
							<div class="cn-title">
								<a href="">Stay Tuned</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="cn-img">
							<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
							<div class="cn-title">
								<a href="">Stay Tuned</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="cn-img">
							<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
							<div class="cn-title">
								<a href="">Stay Tuned</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Category News End-->

<!-- Category News Start-->
<div class="cat-news">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Football</h2>
				<div class="row cn-slider">
					<div class="col-md-6">
						<div class="cn-img">
							<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
							<div class="cn-title">
								<a href="">Stay Tuned</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="cn-img">
							<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
							<div class="cn-title">
								<a href="">Stay Tuned</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="cn-img">
							<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
							<div class="cn-title">
								<a href="">Stay Tuned</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h2>Badminton</h2>
				<div class="row cn-slider">
					<div class="col-md-6">
						<div class="cn-img">
							<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
							<div class="cn-title">
								<a href="">Stay Tuned</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="cn-img">
							<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
							<div class="cn-title">
								<a href="">Stay Tuned</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="cn-img">
							<img src="<?= base_url() ?>template/front-end/img/comingsoon.jpg" />
							<div class="cn-title">
								<a href="">Stay Tuned</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Category News End-->