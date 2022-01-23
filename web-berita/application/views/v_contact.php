<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
            <li class="breadcrumb-item active">Contact</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Contact Start -->
<div class="contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                    <strong>Pesan Anda!</strong> Sudah di Kami Terima, Terimakasih!
                </div>
                <div class="contact-form">
                    <form action="#" name="submit-to-google-sheet" class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea cols="30" rows="7" class="form-control" name="pesan" placeholder="Pesan"></textarea>
                        </div>
                        <div><button class="btn btn-kirim" type="submit">Send Message</button>
                            <button class="btn btn-primary btn-loading py-2 px-3 d-none" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Loading...
                            </button>

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info">
                    <h3>Get in Touch</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In condimentum quam ac mi viverra dictum. In efficitur ipsum diam, at dignissim lorem tempor in. Vivamus tempor hendrerit finibus.
                    </p>
                    <h4><i class="fa fa-map-marker"></i>123 News Street, NY, USA</h4>
                    <h4><i class="fa fa-envelope"></i>info@example.com</h4>
                    <h4><i class="fa fa-phone"></i>+123-456-7890</h4>
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->