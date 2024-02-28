<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">
          <?= $home['judul'] ?>
        </h1>
        <h2 data-aos="fade-up" data-aos-delay="50">
          <?= $home['isi'] ?>
        </h2>
        <div data-aos="fade-up" data-aos-delay="50">
          <div class="text-center text-lg-start">
            <a href="<?= base_url($home['link']); ?>"
              class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>
                <?= $home['tombol'] ?>
              </span>
              <i class="bi bi-arrow-right"></i>
            </a>
            <div>
              <a href="<?= base_url('ppdb/login') ?>"
                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                Login Siswa Baru<i class="bi bi-box-arrow-in-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img mt-5" data-aos="zoom-out" data-aos-delay="50">
        <img  src="<?= base_url('assets/'); ?>img/<?= $home['img'] ?>" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <p>Alur Pendaftaran</p><br>
      <h2>Terdapat beberapa step pendaftaran yang harus dipenuhi agar semua rangkaian pendaftaran hingga seleksi berjalan
      dengan lancar</h2>
    </header>
    
    <div class="row">

      <div class="col-lg-6">
        <img src="<?= base_url('assets/'); ?>img/brosur2.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
        <div class="row align-self-center gy-4">

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>1. Pendaftaran Online atau Offline</h3><br>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>2. Melakukan Pembayaran Pendaftaran</h3>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>3. Melengkapi Berkas dan Administrasi</h3>
            </div>
          </div>
          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>4. Mengisi Formulir</h3>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>5. Menentukan Jadwal Tes</h3>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>6. Melaksanakan Tes</h3>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>7. Pengumuman Tes</h3>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>8. Daftar Ulang</h3>
            </div>
          </div>

        </div>
      </div>

    </div> <!-- / row -->

  </div>

</section><!-- End Features Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2></h2>
      <p>Persyaratan Pendaftaran</p>
    </header>

    <div class="row">

      <div class="col-lg-6">
        <!-- <img src="<?= base_url('assets/'); ?>img/<?= $home['img'] ?>" class="img-fluid" alt=""> -->
        <img src="<?= base_url('assets/'); ?>img/brosur1.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
        <div class="row align-self-center gy-4">

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>Foto Copy Akte Lahir - 1 Lembar</h3><br>
            </div>
          </div>
          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>Foto Copy Kartu Tanda Anak (KTA) - 1 Lembar</h3><br>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>Foto Copy KK 1 Lembar</h3>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>Foto Copy Legalisir Ijazah / Surat Tanda Kelulusan (Jika Ijazah Belum Keluar) 1 Lembar</h3>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>Bukti Pembayaran (ASLI)</h3>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>Foto Copy KIP/PKH/DTKS (Menunjukan aslinya) (Jalur Afirmasi)</h3>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>Foto 3x4 2 Lembar</h3>
            </div>
          </div>

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>Dilampirkan dalam satu MAP berwarna Hijau</h3>
            </div>
          </div>

        </div>
      </div>

    </div> <!-- / row -->

  </div>

</section><!-- End Features Section -->

<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="50">
          <div class="content">
            <h3>Tentang Kami</h3>
            <h2>
              <?= $web['nama'] ?>
            </h2>
            <p>
              <?= $web['deskripsi'] ?>
            </p>
            <div class="text-center text-lg-start">
              <a href="<?= base_url('about') ?>"
                class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Selengkapnya</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="50">
          <img style="height: 400px;width: 650px;" src="<?= base_url('assets/'); ?>img/<?= $about['img'] ?>"
            class="img-fluid" alt="">
        </div>

      </div>
    </div>

  </section><!-- End About Section -->

  <!-- ======= Values Section ======= -->
  <section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2></h2>
        <p>Keunggulan Sekolah</p>
        <p>Kenapa Harus Sekolah Kami ?</p>
      </header>

      <div class="row">

        <?php foreach ($tagline as $tag): ?>

          <div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-delay="50">
              <img src="<?= base_url('assets/'); ?>img/<?= $tag['img'] ?>" class="img-fluid" alt="">
              <h3>
                <?= $tag['nama'] ?>
              </h3>
              <p>
                <?= $tag['deskripsi'] ?>
              </p>
            </div>
          </div>

        <?php endforeach ?>

      </div>

    </div>

  </section><!-- End Values Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-people" style="color: #bb0852;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="<?= $sum_siswa ?>" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Total siswa</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-person-circle"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="<?= $sum_karyawan ?>" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Guru & Pegawai</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-bank2" style="color: #ee6c20;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="<?= $sum_pendidikan ?>"
                data-purecounter-duration="1" class="purecounter"></span>
              <p>Pendidikan</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-journal-text" style="color: #15be56;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="<?= $sum_kelas ?>" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Kelas</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Jadwal Section ======= -->
  <section id="services" class="services">
    <div class="container aos-init aos-animate" data-aos="fade-up">
      <header class="section-header">
        <p>JADWAL PENDAFTARAN</p>
      </header>

      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
          <div class="service-box blue">
            <i class="ri-discuss-line icon"></i>
            <h3>Gelombang 1</h3>
            <strong>
              <p>Jalur Prestasi 1</p>
            </strong>
            <p style="font-size: 12px">Akademik /Non Akademik / Tahfidz Qur'an</p>
            <p>02 Mei s/d 31 Juni 2023</p>
            <strong>
              <p>Jalur Reguler 1</p>
            </strong>
            <p style="font-size: 12px">ZONASI /AFIRMASI</p>
            <p>02 Mei s/d 31 Juni 2023</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
          <div class="service-box blue">
            <i class="ri-discuss-line icon"></i>
            <h3>Gelombang 2</h3>
            <strong>
              <p>Jalur Prestasi 2</p>
            </strong>
            <p style="font-size: 12px">Akademik /Non Akademik / Tahfidz Qur'an</p>
            <p>1 Juni s/d 30 Juni 2023</p>
            <strong>
              <p>Jalur Reguler 2</p>
            </strong>
            <p style="font-size: 12px">ZONASI /AFIRMASI</p>
            <p>1 Juni s/d 30 Juni 2023</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
          <div class="service-box blue">
            <i class="ri-discuss-line icon"></i>
            <h3>Gelombang 3<span>**</span></h3>
            <strong>
              <p>Jalur Reguler 3</p>
            </strong>
            <p style="font-size: 12px">ZONASI /AFIRMASI</p>
            <p>20 Juni s/d 08 Juli 2023</p>
            <br>
            <br>
            <p><strong><span>**</span>Jika Kuota Masih Ada</strong></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Jadwal Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2></h2>
        <p>Ciri Khas Sekolah</p>
      </header>

      <div class="row">

        <div class="col-lg-6">
          <img src="<?= base_url('assets/'); ?>img/features.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
          <div class="row align-self-center gy-4">

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Sistem Pendidikan Terpadu</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Spirit But Modern</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Sistem Pembelajaran Terbaru</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Area Pendidikan yang Luas dan Kondusif</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Full Development Of Personality</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="50">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Pencetak Hafidz dan Hafidzah</h3>
              </div>
            </div>

          </div>
        </div>

      </div> <!-- / row -->

    </div>

  </section><!-- End Features Section -->

  <!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <p>Artikel</p>
    </header>

    <div class="row">

      <?php foreach ($acara as $d): ?>

        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img style="height: 250px;width: 450px;"
                src="<?= base_url('assets/'); ?>img/blog/<?= $d['img'] ?>" class="img-fluid" alt=""></div>
            <span class="post-date">
              <?= $d['tgl'] ?>
            </span>
            <h3 class="post-title">
              <?= $d['judul'] ?>
            </h3>
            <a href="<?= base_url('detail_acara?id=' . $d['id']); ?>"
              class="readmore stretched-link mt-auto"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

      <?php endforeach ?>

    </div>

  </div>

</section><!-- End Recent Blog Posts Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2></h2>
        <p>Galeri</p>
      </header>

      <div class="row" data-aos="fade-up" data-aos-delay="50">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Terbaru</li>
            <?php foreach ($kategori as $k): ?>
              <li data-filter=".<?= $k['uniq'] ?>">
                <?= $k['nama'] ?>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
      </div>

      <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="50">

        <?php foreach ($gallery as $g): ?>
          <?php $kat = $this->db->get_where('kategori_gallery', ['id' => $g['id_kat']])->row_array(); ?>

          <div class="col-lg-4 col-md-6 portfolio-item <?= $kat['uniq'] ?>">
            <div class="portfolio-wrap">
              <img style="height: 300px;width: 400px;" src="<?= base_url('assets/'); ?>img/gallery/<?= $g['img'] ?>"
                class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>
                  <?= $g['nama'] ?>
                </h4>
                <p>
                  <?= $kat['nama'] ?>
                </p>
                <div class="portfolio-links">
                  <a href="<?= base_url('assets/'); ?>img/gallery/<?= $g['img'] ?>" data-gallery="portfolioGallery"
                    class="portfokio-lightbox" title="<?= $g['nama'] ?>"><i class="bi bi-plus"></i></a>
                  <a href="<?= base_url('detail_gallery?id=' . $g['id']); ?>" title="Lihat Detail"><i
                      class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        <?php endforeach ?>

      </div>

      <div class="portfolio-pagination text-center pt-5">
        <a href="<?= base_url('gallery') ?>"
          class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
          <span>Selengkapnya</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>

    </div>
  </section><!-- End Portfolio Section -->






</main><!-- End #main -->