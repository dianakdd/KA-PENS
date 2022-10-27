<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Ticketing Kereta Api</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/unicons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/util.css">
	  <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/tooplate-style.css">
    
<!--


-->
  </head>
  <body>
    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light" style="">
        <div class="container my-2">
            <a class="navbar-brand" href="index.html">K<i class="iconify" data-icon="bx:bxs-train" style="color: #ffc200; margin-top: -2px;""></i> PENS</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link"><span class="iconify mx-2 " style="margin-top: -5px;" data-icon="ant-design:home-outlined" style="color: #ffc200;"></span><span data-hover="Home">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#tiket" class="nav-link"><span class="iconify mx-2 " style="margin-top: -5px;" data-icon="carbon:train-ticket" style="color: #ffc200;"></span><span data-hover="Beli Tiket" class="iconify">Beli Tiket</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#jadwal" class="nav-link"><span class="iconify mx-2" style="margin-top: -4px;" data-icon="akar-icons:schedule" style="color: #ffc200;"></span><span data-hover="Jadwal Keberangkatan">Jadwal Keberangkatan</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link"><span class="iconify mx-2" style="margin-top: -4px;" data-icon="carbon:user-service-desk" style="color: #ffc200;"></span><span data-hover="Layanan Kontak">Layanan Kontak</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                    <div class="ml-lg-4">
                      <div class="color-mode d-lg-flex justify-content-center align-items-center">
                        <i class="color-mode-icon"></i>
                        Color mode
                      </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" style="margin-bottom: 8rem;"id="about">
        <div class="container" style="padding-bottom: 20px;">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <small class="small-text" style="margin-left: -10px;">Kereta Api Politeknik Elektronika Negeri Surabaya</small>
                        <h1 class="animated animated-text">
                            <span class="mr-1">Selamat Datang </span>
                              <div class="animated-info" >
                                    <span class="animated-item">Tuan</span>
                                    <span class="animated-item">Nyonya</span>
                                    <span class="animated-item">Kak</span>
                              </div>
                        </h1>

                        <p style="margin-bottom: 30px;">Kami siap melayani dan membantu anda sepenuh hati, jika memerlukan bantuan silahkan menuju halaman Layanan Kontak. Terima kasih</p>
                        
                        <div class="custom-btn-group mt-1">
                          <a href="#tiket" class="btn nav-link mr-lg-4 custom-btn" style="width: 17rem;" ><i class="iconify" data-icon="fontisto:train-ticket" data-width="30" style="margin-right: 12px;" ></i>Pemesanan Tiket</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="images/kereta1.png" class="img-fluid" alt="svg image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="project py-3" style="" id="tiket">
    <h2 class="mb-4" style= "text-align:center; margin: -30px;">Pembelian Tiket</h2>
    <div class="container" style="padding-left: 12rem;">
        <div class="row">
          <div class="col-lg-9 col-12">
            <div class="contact-form">
              <form action="" method="get">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="nik" placeholder="NIK" id="nik">
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" id="name">
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="tel" class="form-control" name="notelp" placeholder="No. Telepon" id="notelp">
                  </div>

                  <div class="col-lg-6 col-12">
                    <select type="rute" class="form-control" name="rute" placeholder="Rute" id="rute">
                        <option>Rute</option>
                        <option>Surabaya - Malang</option>
                        <option>Surabaya - Semarang</option>
                        <option>Surabaya - Yogyakarta</option>
                        <option>Surabaya - Bandung</option>
                        <option>Surabaya - Jakarta</option>
                    </select>
                  </div>

                  <div class="col-lg-6 col-12">
                        <input class="form-control" type="datetime-local" id="tgl" name="tgl">
                  </div>



                  <div class="col-lg-12 col-14" >
                      <p class="" style= "text-align:left; margin-bottom:7px;">Harga Tiket :</p>
                  </div>

                  <div class="col-lg-1 col-1" >
                      <p class="" style= "text-align:left; margin-right: -40px; margin-top: -3px;">Rp<p>
                  </div>

                  <div class="col-lg-2 col-3 ">
                      <a class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="harga" id="harga" value="option1">
                        <label class="form-check-label" for="harga"> 25.000</label>
                      </a>
                  </div>

                  <div class="col-lg-2 col-3 ml-auto">
                      <a class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="harga" id="harga" value="option2">
                        <label class="form-check-label" for="harga"> 50.000</label>
                      </a>
                  </div>

                  <div class="col-lg-2 col-4 ml-auto">
                  <a class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="harga" id="harga" value="option3">
                        <label class="form-check-label" for="harga"> 75.000</label>
                      </a>
                  </div>

                  <div class="col-lg-2 col-4 ml-auto">
                  <a class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="harga" id="harga" value="option4">
                        <label class="form-check-label" for="harga"> 100.000</label>
                      </a>
                  </div>

                  <div class="col-12">
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12 pt-4 pb-5">
                    <input type="submit" class="form-control submit-btn" value="Pesan">
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>



    <!-- FEATURES -->
    <section class="project py-2 pt" id="jadwal">
    <h3 class="mb-4" style= "text-align:center; margin: -30px;">Jadwal Keberangkatan</h2>
        <div class="container">
        <div class="table100 ver5 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Rute</th>
									<th class="cell100 column2">ID Kereta</th>
									<th class="cell100 column3">Waktu Keberangkatan</th>
									<th class="cell100 column4">Nama Kereta</th>
									<th class="cell100 column5">Jumlah Gerbong</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">Surabaya - Jakarta</td>
									<td class="cell100 column2">001</td>
									<td class="cell100 column3">6:00 - 18:00</td>
									<td class="cell100 column4">Aaron Chapman</td>
									<td class="cell100 column5">8</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Surabaya - Jakarta</td>
									<td class="cell100 column2">002</td>
									<td class="cell100 column3">9:00 - 21:00</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">12</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Surabaya - Jakarta</td>
									<td class="cell100 column2">003</td>
									<td class="cell100 column3">12:00 - 24:00</td>
									<td class="cell100 column4">Aaron Chapman</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Surabaya - Jakarta</td>
									<td class="cell100 column2">004</td>
									<td class="cell100 column3">15:00 - 03:00</td>
									<td class="cell100 column4">Donna Wilson</td>
									<td class="cell100 column5">9</td>
								</tr>

                <tr class="row100 body">
									<td class="cell100 column1">Surabaya - Yogyakarta</td>
									<td class="cell100 column2">002</td>
									<td class="cell100 column3">9:00 - 15:00</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">12</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Surabaya - Yogyakarta</td>
									<td class="cell100 column2">003</td>
									<td class="cell100 column3">12:00 - 18:00</td>
									<td class="cell100 column4">Aaron Chapman</td>
									<td class="cell100 column5">10</td>

                <tr class="row100 body">
									<td class="cell100 column1">Surabaya - Bandung</td>
									<td class="cell100 column2">001</td>
									<td class="cell100 column3">6:00 - 15:00</td>
									<td class="cell100 column4">Aaron Chapman</td>
									<td class="cell100 column5">8</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Surabaya - Bandung</td>
									<td class="cell100 column2">002</td>
									<td class="cell100 column3">9:00 - 18:00</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">12</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Surabaya - Bandung</td>
									<td class="cell100 column2">003</td>
									<td class="cell100 column3">12:00 - 21:00</td>
									<td class="cell100 column4">Aaron Chapman</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Surabaya - Bandung</td>
									<td class="cell100 column2">004</td>
									<td class="cell100 column3">15:00 - 00:00 </td>
									<td class="cell100 column4">Donna Wilson</td>
									<td class="cell100 column5">9</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-5 mr-lg-5 col-12">
            <div class="google-map w-100">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.692024002483!2d112.791567014658!3d-7.275841773518232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa10ea2ae883%3A0xbe22c55d60ef09c7!2sPoliteknik%20Elektronika%20Negeri%20Surabaya!5e0!3m2!1sid!2sid!4v1639934672157!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="contact-info d-flex justify-content-between align-items-center py-2 px-lg-5">

                <ul class="social-links">
                     <li><a href="https://www.instagram.com/penseepis/" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram">PENSEEPIS</a></li>
                     <li><a href="https://www.youtube.com/c/PENSTV" class="uil uil-youtube" data-toggle="tooltip" data-placement="left" title="Youtube">PENSEEPIS</a></li>
                     <li><a class="navbar-brand" style="margin-left:5px;" href="index.html">K<i class="iconify" data-icon="bx:bxs-train" style="color: #ffc200;" ></i> PENS</a></li>
                </ul>
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4">Apakah terjadi kendala?Silahkan mengisi formulir berikut</h2>

              <form action="" method="get">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" id="name">
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                  </div>

                  <div class="col-12">
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <input type="submit" class="form-control submit-btn" value="Send Button">
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- FOOTER -->
     <footer class="footer py-5">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12">                                
                        <p class="copyright-text text-center">Copyright &copy; 2021 Politeknik Elektronika Negeri Surabaya</p>
                        <p class="copyright-text text-center">Created by <a rel="follow" href="https://www.instagram.com/dianakddd/">Diana,</a> <a rel="follow" href="https://www.instagram.com/____habil/">Habil &</a> <a rel="follow" href="https://www.instagram.com/tirtapir11114/">Tirta</a></p>
                    </div>
                    
               </div>
          </div>
     </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </body>
</html>