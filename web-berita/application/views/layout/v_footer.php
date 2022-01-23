 <!-- Footer Start -->
 <div class="footer">
 	<div class="container">
 		<div class="row">
 			<div class="col-lg-6 col-md-6">
 				<div class="footer-widget">
 					<h3 class="title">Get in Touch</h3>
 					<div class="contact-info">
 						<p><i class="fa fa-map-marker"></i>Jalan Pandeyan, Kampung Wisata Pandeyan, Pandeyan, Umbulharjo, DIY</p>
 						<p><i class="fa fa-envelope"></i>valentinowisnu46@gmail.com</p>
 						<p><i class="fa fa-phone"></i>083117957134</p>
 						<div class="social">
 							<a href="https://twitter.com/Wisnuinu_23"><i class="fab fa-twitter"></i></a>
 							<a href="https://web.facebook.com/profile.php?id=100010394822710"><i class="fab fa-facebook-f"></i></a>
 							<a href="https://www.instagram.com/king__w23/"><i class="fab fa-instagram"></i></a>
 							<a href="https://www.youtube.com/channel/UCJFi0ztWQN6SmLxgI85_yKw"><i class="fab fa-youtube"></i></a>
 						</div>
 					</div>
 				</div>
 			</div>

 			<div class="col-lg-6 col-md-6">
 				<div class="footer-widget">
 					<h3 class="title">Newsletter</h3>
 					<div class="newsletter">
 						<p>
 							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu
 						</p>
 						<form>
 							<input class="form-control" type="email" placeholder="Your email here">
 							<button class="btn">Submit</button>
 						</form>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <!-- Footer End -->

 <!-- Footer Menu Start -->
 <div class="footer-menu">
 	<div class="container">
 		<div class="f-menu">
 			<a href="">Terms of use</a>
 			<a href="">Privacy policy</a>
 			<a href="">Cookies</a>
 			<a href="">Accessibility help</a>
 			<a href="">Advertise with us</a>
 			<a href="">Contact us</a>
 		</div>
 	</div>
 </div>
 <!-- Footer Menu End -->

 <!-- Footer Bottom Start -->
 <div class="footer-bottom">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-6 copyright">
 				<p>Copyright &copy; <a href="">News Sport</a>. All Rights Reserved</p>
 			</div>

 			<div class="col-md-6 template-by">
 			</div>
 		</div>
 	</div>
 </div>
 <!-- Footer Bottom End -->

 <!-- Back to Top -->
 <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
 <script>
 	const scriptURL = 'https://script.google.com/macros/s/AKfycbzlpFNRe2jIrzkHwiHbBQOe63b6F2CX7QeaG8JSX6bie-uzAH71_V6yoeUOR7D5x6S8og/exec'
 	const form = document.forms['submit-to-google-sheet']
 	const btnKirim = document.querySelector('.btn-kirim');
 	const btnLoading = document.querySelector('.btn-loading');
 	const myAlert = document.querySelector('.my-alert');

 	form.addEventListener('submit', e => {
 		e.preventDefault();
 		btnLoading.classList.toggle('d-none');
 		btnKirim.classList.toggle('d-none');
 		fetch(scriptURL, {
 				method: 'POST',
 				body: new FormData(form)
 			})
 			.then(response => {
 				btnLoading.classList.toggle('d-none');
 				btnKirim.classList.toggle('d-none');
 				myAlert.classList.toggle('d-none');
 				form.reset();
 				console.log('Success!', response)
 			})
 			.catch(error => console.error('Error!', error.message));
 	})
 </script>
 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
 <script src="<?= base_url() ?>template/front-end/lib/easing/easing.min.js"></script>
 <script src="<?= base_url() ?>template/front-end/lib/slick/slick.min.js"></script>

 <!-- Template Javascript -->
 <script src="<?= base_url() ?>template/front-end/js/main.js"></script>
 </body>

 </html>