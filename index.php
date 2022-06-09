<?php
get_header();
?>

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

      <?php 
        $slider = new WP_Query(array(
          'post_type' => 'slider',
          'post_per_page' => -1
        ));

        if($slider->have_posts()) :
          while($slider->have_posts( )) : $slider->the_post();
      ?>

        <div class="carousel-item active" style="background-image: url(<?php the_field('image_slider'); ?>)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"><?php the_title(); ?></h2>
              <p class="animate__animated animate__fadeInUp"><?php the_field('subtitle'); ?></p>
            </div>
          </div>
        </div>

      <?php
          endwhile;
        endif;
      wp_reset_postdata( );
      ?>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="logo-me-auto"><a href="#services"><img src="assets/img/baru/Bungalow.jpg" style="width: auto;height: auto;" alt="" class="img-fluid"></a></i></div>
              <h4 class="title"><a href="#services">Bungalow</a></h4>
              <p class="description"> Bagi anda yang ingin menikmati suasana alam bakau, kami menyediakan bungalow yang nyaman untuk menginap bersama orang-orang yang anda kasihi dengan luas 6m x 6m yang memiliki view pantai dan bakau, membuat liburan anda semakin berkesan.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="logo-me-auto"><a href="#"><img src="assets/img/baru/Resto.jpg" style="width: auto;height: auto;" alt="" class="img-fluid"></a></i></div>
              <h4 class="title"><a href="#">Rest-0-Tent</a></h4>
              <p class="description"> Restoran Pantai Rest-O-tent dengan menu & fasilitas yang lengkap, berdiri di atas pantai dan di kelilingi oleh hutan bakau, yang membuat suasana makan bersama orang yang di kasihi menjadi lebih seru dan nikmat.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="logo-me-auto"><a href="#"><img src="assets/img/baru/mbb.jpg" style="width: auto;height: auto;" alt="" class="img-fluid"></a></i></div>
              <h4 class="title"><a href="#">Majengan Bakau Beach</a></h4>
              <p class="description"> Majengan Bakau Beach (MBB) adalah tempat permainan di BJBR yang telah disediakan bagi anak-anak dan bagi wisata dewasa. Terdapat banyak sekali wahana permainan, mulai dari Fantasy Land, Kolam renang, Danau buatan, dan masih banyak lagi.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= ada yang baru nih ======= -->
    <?php
      $konten = new WP_Query(array(
        'post_type' => 'page',
        'page_id' => 34
      ));
      if($konten->have_post( )):
        while($konten->have_post( )) : $konten->the_post();
    ?>
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Ada Yang Baru Nih...</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <h4><img src="assets/img/posting/post-1.jpg" class="img-fluid" alt=""></h4>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Seafood Combo</h3>
            <p class="fst-italic">
              <?php the_field('subtitle_konten')?>
            </p>
            <a class="btn btn-outline-primary" href="https://wa.me/6281233484883">Info lebih lanjut</a>
            <p>
              Kabar baik bagi kalian para pecinta seafood. Resto-0-Tent BJBR punya menu andalan baru yang pastinya siap memanjakan lidah kalian.
              Dengan konsep Resto-0-tent kami yang cukup luas dengan 4 Kubah megah di atasnya dimana angin berhembus dengan bebas dan cuaca terik lautan, memungkinkan kamu makan dengan santai dan nyaman bersama kerabat.
              Tunggu apalagi? Yuk coba dan nikmati kelezatan nya!
            </p>
            
          </div>
        </div>

      </div>
    </section>
    <?php
          endwhile;
        endif;
        wp_reset_postdata( );
    ?>
    <!-- ada yang baru nih -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Pertanyaan yang sering di tanyakan</h2>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item">
            <h4>BJBR buka mulai jam berapa?</h4>
            <p>Kita buka tiap hari mulai jam 08.00-21.00 WIB.🥰 </p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <h4>Berapa sih tiket masuknya?</h4>
            <p>Harga tiket BJBR mulai dari</p>
            <p>Weekday = 30 k</p>
            <p>Weekend = 50 k</p>
            <p>Libur nasional = 60 k</p>
            <p>Kami tunggu kedatangannya yaa 🤗</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <h4> Pengen tau apa aja sih yang ada di BJBR?</h4>
            <p>Mau tau apa wahana apa aja sih yang ada di BJBR? Yuk kunjungi sosial media kita lainnya.</p>
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Our Clients Section ======= --><!---->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Beberapa wahana di BJBR</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/wahana/alunan-cahaya.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/wahana/burung.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/wahana/dalem-beejay.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/wahana/gembok-cinta.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/wahana/kolam.JPG" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/wahana/musholla.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/wahana/sepeda-gantung.JPG" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Our Clients Section -->

    <!-- ======= Services Section ======= --><!--
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="">Sed Perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="bx bx-slideshow"></i>
              </div>
              <h4><a href="">Dele Cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bx bx-arch"></i>
              </div>
              <h4><a href="">Divera Don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section> --><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h4><img src="<?php echo get_theme_file_uri('assets/img/traveloka-logo.png') ?>" class="img-fluid" alt="" height="100px" width="100px"></h4>
            <h3>Ingin menginap di BJBR?</h3>
            <p> Kini kamu bisa memesan Bungalow melalui Traveloka loh. Yuk cek ketersediaan kamarnya.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://www.traveloka.com/id-id/hotel/indonesia/beejay-bakau-resort-3000010011792">Kunjungi Traveloka</a>
          </div>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Galery</h2>
          <p>Beberapa media yang dapat kami tampilkan untuk anda.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Bungalow</li>
              <li data-filter=".filter-card">Rest-0-Tent</li>
              <li data-filter=".filter-web">Wahana</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/galery/galery-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Hutan Bakau</h4>
                <p>menikmati rimbunnya hutan bakau</p>
                <div class="portfolio-links">
                  <a href="assets/img/galery/galery-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/galery/galery-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Menginap Bersama Keluarga</h4>
                <p>Serunya menginap di bungalow BJBR bersama keluarga</p>
                <div class="portfolio-links">
                  <a href="assets/img/galery/galery-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/galery/galery-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Berenang Bersama Keluarga</h4>
                <p>Serunya berenang bersama keluarga tercinta</p>
                <div class="portfolio-links">
                  <a href="assets/img/galery/galery-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/galery/galery-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Taman MBB</h4>
                <p>Suanana taman Majengan Bakau Beach</p>
                <div class="portfolio-links">
                  <a href="assets/img/galery/galery-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/galery/galery-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mushollah Nurul Bahar</h4>
                <p>Pemandangan mushollah nurul bahar di malam hari</p>
                <div class="portfolio-links">
                  <a href="assets/img/galery/galery-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/galery/galery-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kuda Cipta Wilaha</h4>
                <p>Patung kuda terbesar nomor 2 di asia</p>
                <div class="portfolio-links">
                  <a href="assets/img/galery/galery-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/galery/galery-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Jalan Jalan Sore</h4>
                <p>Bersepeda di cycling track sambil menikmati matahari terbenam</p>
                <div class="portfolio-links">
                  <a href="assets/img/galery/galery-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/galery/galery-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Rest-0-Tent</h4>
                <p>Menyantap hidangan seafood dengan keluarga sambil menikmati indahnya pantai</p>
                <div class="portfolio-links">
                  <a href="assets/img/galery/galery-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/galery/galery-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Seketeng Sewu</h4>
                <p>Jalan jalan di seketeng sewu serasa jalan jalan di jepang</p>
                <div class="portfolio-links">
                  <a href="assets/img/galery/galery-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-vid">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/cPgEbOoCTjc" title="YouTube video player" frameborder="100" frameborder="0" style="border:0; width: 100%; height: 233px;" allowfullscreen></iframe>
              <div class="portfolio-info">
                <h4>BeeJay Bakau Resort Probolinggo</h4>
                <p>Profil BeeJay Bakau Resort Probolinggo</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-vid2">
              <iframe width="360" height="200" src="https://www.youtube.com/embed/VFo4OU7LMTw" title="YouTube video player" frameborder="0" style="border:0; width: 100%; height: 233px;" allowfullscreen></iframe>
              <div class="portfolio-info">
                <h4>Wisata BJBR Probolinggo</h4>
                <p>Wisata Bakau, Maldives Jawa Timur</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-vid2">
              <iframe width="360" height="200" src="https://www.youtube.com/embed/V8bSbS2sDOo" title="YouTube video player" frameborder="0" style="border:0; width: 100%; height: 233px;" allowfullscreen></iframe>
              <div class="portfolio-info">
                <h4>Bold Riders</h4>
                <p>Bold Riders Ride Xperience Road To BJBR</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!--<section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" alt="">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> --><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Pelabuhan PPP Mayangan, Wisata Primadona, Mangunharjo, Mayangan, Mangunharjo, Kec. Mayangan, Kota Probolinggo, Jawa Timur 67217</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>beejaybakauresort@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>(0335) 5892001</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.5249653354563!2d113.22003431477772!3d-7.734003994425438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7adc501e9f509%3A0x18092ee5fa469dd!2sBeeJay%20Bakau%20Resort!5e0!3m2!1sen!2sid!4v1650625150862!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php
get_footer();
?>