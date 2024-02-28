<!-- Custom styles for this template-->
<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

<style type="text/css">
    img[src=""] {
        display: none;
    }

    .pointer {
        cursor: pointer;
    }
</style>
<main id="main" style="padding-top: 30px;">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="<?= base_url('home'); ?>">Home</a></li>
                <li>PPDB</li>
            </ol>
            <h2>PPDB</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container" style="padding-left:3px;padding-right:3px">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h5 class="m-0 font-weight-bold text-success"><i class="fa fa-list-alt fa-fw"></i>
                                    <b>Form Pendaftaran</b>
                                    <div class="float-right">
                                        <a href="<?= base_url('ppdb/login') ?>"
                                            class="btn btn-block btn-sm btn-primary"><i
                                                class="bi bi-box-arrow-in-right"></i> Login</a>
                                    </div>
                                </h5>
                            </div>
                            <div class="card-body">
                                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                                <?= $this->session->flashdata('message') ?>

                                <?= form_open_multipart('ppdb'); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>NIK Orang tua / Wali</label>
                                            <input type="number" class="form-control" id="nik" name="nik"
                                                placeholder="Nomor Induk Kependudukan" value="<?= set_value('nik') ?>"
                                                require>
                                            <?= form_error('nik', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>NISN</label>
                                            <input type="text" class="form-control" id="nis" name="nis"
                                                placeholder="Nomor Induk siswa nasional" value="<?= set_value('nis') ?>"
                                                require>
                                            <?= form_error('nis', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>
                                        <div class="form-group form-box">
                                            <label>Password </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div onclick="myFunction()" class="input-group-text pointer"><i
                                                            id="icon" class="bi bi-eye"></i></div>
                                                </div>
                                                <input type="text" class="active form-control" id="password"
                                                    name="password" placeholder="Password"
                                                    value="<?= set_value('password') ?>" require>
                                            </div>
                                            <?= form_error('password', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="Nama Lengkap" value="<?= set_value('nama') ?>" require>
                                            <?= form_error('nama', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" id="email" name="email"
                                                placeholder="Email" value="<?= set_value('email') ?>" require>
                                            <?= form_error('email', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Nomor Hp ( WhatsApp Aktif ! )</label>
                                            <input type="number" class="form-control" id="no_hp" name="no_hp"
                                                placeholder="Nomor Hp" value="<?= set_value('no_hp') ?>" require>
                                            <?= form_error('no_hp', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="jk" class="col-form-label">Jenis Kelamin :</label>

                                            <select class="form-control" id="jk" name="jk">
                                                <option value="">- Jenis Kelamin -</option>
                                                <option value="Laki-laki" <?= set_select('jk', 'Laki-laki'); ?>>Laki-laki
                                                </option>
                                                <option value="Perempuan" <?= set_select('jk', 'Perempuan'); ?>>Perempuan
                                                </option>

                                            </select>
                                            <?= form_error('jk', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="ttl" name="ttl"
                                                value="<?= set_value('ttl') ?>">
                                            <?= form_error('ttl', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <select class="form-control" id="prov" name="prov">
                                                <option value="">- Pilih Provinsi -</option>
                                                <?php foreach ($prov as $v): ?>
                                                    <option value="<?= $v['id_prov'] ?>">
                                                        <?= $v['nama'] ?>
                                                    </option>
                                                <?php endforeach ?>
                                            </select>
                                            <?= form_error('prov', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Kota</label>
                                            <select class="form-control" id="kab" name="kab">
                                                <option value="">- Pilih provinsi dahulu -</option>
                                            </select>
                                            <?= form_error('kab', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea type="text" rows="4" class="form-control" id="alamat"
                                                name="alamat"
                                                placeholder="Alamat Lengkap"><?= set_value('alamat') ?></textarea>
                                            <?= form_error('alamat', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
                                                placeholder="Nama Orang Tua" value="<?= set_value('nama_ayah') ?>">
                                            <?= form_error('nama_ayah', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
                                                placeholder="Nama Orang Tua" value="<?= set_value('nama_ibu') ?>">
                                            <?= form_error('nama_ibu', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Wali</label>
                                            <input type="text" class="form-control" id="nama_wali" name="nama_wali"
                                                placeholder="Nama Wali" value="<?= set_value('nama_wali') ?>">
                                            <small class="text-info">* Kosongkan jika tidak ada.</small>
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Pekerjaan Ayah</label>
                                            <select class="form-control" id="pek_ayah" name="pek_ayah">
                                                <option value="">- Pekerjaan Ayah -</option>
                                                <option value="Wiraswasta" <?= set_select('pek_ayah', 'Wiraswasta'); ?>>
                                                    Wiraswasta</option>
                                                <option value="Pedagang" <?= set_select('pek_ayah', 'Pedagang'); ?>>
                                                    Pedagang</option>
                                                <option value="Buruh" <?= set_select('pek_ayah', 'Buruh'); ?>>Buruh
                                                </option>
                                                <option value="Pensiunan" <?= set_select('pek_ayah', 'Pensiunan'); ?>>
                                                    Pensiunan</option>
                                                <option value="Guru" <?= set_select('pek_ayah', 'Guru'); ?>>Guru</option>
                                                <option value="Honorer" <?= set_select('pek_ayah', 'Honorer'); ?>>Honorer
                                                </option>
                                                <option value="PNS" <?= set_select('pek_ayah', 'PNS'); ?>>PNS</option>
                                            </select>
                                            <?= form_error('pek_ayah', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Pekerjaan Ibu</label>
                                            <select class="form-control" id="pek_ibu" name="pek_ibu"
                                                value="<?= set_value('pek_ibu') ?>">
                                                <option value="">- Pekerjaan Ibu -</option>
                                                <option value="Ibu Rumah Tangga" <?= set_select('pek_ibu', 'Ibu Rumah Tangga'); ?>>Ibu Rumah Tangga</option>
                                                <option value="Wiraswasta" <?= set_select('pek_ibu', 'Wiraswasta'); ?>>
                                                    Wiraswasta</option>
                                                <option value="Pedagang" <?= set_select('pek_ibu', 'Pedagang'); ?>>
                                                    Pedagang</option>
                                                <option value="Buruh" <?= set_select('pek_ibu', 'Buruh'); ?>>Buruh
                                                </option>
                                                <option value="Pensiunan" <?= set_select('pek_ibu', 'Pensiunan'); ?>>
                                                    Pensiunan</option>
                                                <option value="Guru" <?= set_select('pek_ibu', 'Guru'); ?>>Guru</option>
                                                <option value="Honorer" <?= set_select('pek_ibu', 'Honorer'); ?>>Honorer
                                                </option>
                                                <option value="PNS" <?= set_select('pek_ibu', 'PNS'); ?>>PNS</option>
                                            </select>
                                            <?= form_error('pek_ibu', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Pekerjaan Wali</label>
                                            <select class="form-control" id="pek_wali" name="pek_wali">
                                                <option value="">- Pekerjaan Wali -</option>
                                                <option value="Tidak ada wali" <?= set_select('pek_wali', 'Tidak ada wali'); ?>>Tidak ada wali</option>
                                                <option value="Wiraswasta" <?= set_select('pek_wali', 'Wiraswasta'); ?>>
                                                    Wiraswasta</option>
                                                <option value="Pedagang" <?= set_select('pek_wali', 'Pedagang'); ?>>
                                                    Pedagang</option>
                                                <option value="Buruh" <?= set_select('pek_wali', 'Buruh'); ?>>Buruh
                                                </option>
                                                <option value="Pensiunan" <?= set_select('pek_wali', 'Pensiunan'); ?>>
                                                    Pensiunan</option>
                                                <option value="Guru" <?= set_select('pek_wali', 'Guru'); ?>>Guru</option>
                                                <option value="Honorer" <?= set_select('pek_wali', 'Honorer'); ?>>Honorer
                                                </option>
                                                <option value="PNS" <?= set_select('pek_wali', 'PNS'); ?>>PNS</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Penghasilan Ortu / Wali</label>
                                            <select class="form-control" id="peng_ortu" name="peng_ortu">
                                                <option value="">- Penghasilan / Bulan -</option>
                                                <option value="< Rp.1.000.000" <?= set_select('peng_ortu', '< Rp.1.000.000'); ?>>
                                                    << Rp.1.000.000</option>
                                                <option value="Rp.1.000.000 - Rp.2.000.000" <?= set_select('peng_ortu', 'Rp.1.000.000 - Rp.2.000.000'); ?>>Rp.1.000.000 - Rp.2.000.000
                                                </option>
                                                <option value="Rp.2.000.000 - Rp.3.000.000" <?= set_select('peng_ortu', 'Rp.2.000.000 - Rp.3.000.000'); ?>>Rp.2.000.000 - Rp.3.000.000
                                                </option>
                                                <option value="Rp.3.000.000 - Rp.4.000.000" <?= set_select('peng_ortu', 'Rp.3.000.000 - Rp.4.000.000'); ?>>Rp.3.000.000 - Rp.4.000.000
                                                </option>
                                                <option value="Rp.4.000.000 - Rp.5.000.000" <?= set_select('peng_ortu', 'Rp.4.000.000 - Rp.5.000.000'); ?>>Rp.4.000.000 - Rp.5.000.000
                                                </option>
                                                <option value="Rp.5.000.000 >" <?= set_select('peng_ortu', 'Rp.5.000.000 >'); ?>>Rp.5.000.000 >></option>
                                            </select>
                                            <?= form_error('peng_ortu', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Nomor Telepon Ortu / Wali ( WhatsApp Aktif ! )</label>
                                            <input type="text" class="form-control" id="no_telp" name="no_telp"
                                                placeholder="Nomor Telepon" value="<?= set_value('no_telp') ?>">
                                            <?= form_error('no_telp', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Sekolah Asal</label>
                                            <input type="text" class="form-control" id="sekolah_asal"
                                                name="sekolah_asal" placeholder="Sekolah Asal"
                                                value="<?= set_value('sekolah_asal') ?>">
                                            <?= form_error('sekolah_asal', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Mendaftar ke Kelas</label>
                                            <!-- <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas" value="<?= set_value('kelas') ?>">
                                            <?= form_error('kelas', '<small class="text-danger pl-3">', ' </small>') ?> -->
                                            <select class="form-control" id="kelas" name="kelas">
                                                <option value="">- Daftar Kelas -</option>
                                                <option value="Kelas 7 (Tujuh)" <?= set_select('kelas', 'Kelas 7 (Tujuh)'); ?>> Kelas 7 (Tujuh)</option>
                                                <option value="Kelas 8 (Delapan) - Pindahan" <?= set_select('kelas', 'Kelas 8 (Delapan) - Pindahan'); ?>>Kelas 8 (Delapan) - Pindahan
                                                </option>
                                                <option value="Kelas 9 (Sembilan) - Pindahan" <?= set_select('kelas old', 'Kelas 9 (Sembilan) - Pindahan'); ?>>Kelas 9 (Sembilan) - Pindahan
                                                </option>
                                            </select>
                                            <?= form_error('kelas', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>



                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <img src="" width="100" height="85" id="preview" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-9">
                                                <input hidden type="file" name="img_siswa" class="file" accept="image/*"
                                                    id="imgInp">
                                                <div class="input-group my-3">
                                                    <input type="text" class="form-control" disabled
                                                        placeholder="Foto siswa ( 4 x 6 )" id="file">
                                                    <div class="input-group-append">
                                                        <button type="button"
                                                            class="browse btn btn-primary">Browse</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <img src="" width="100" height="85" id="preview1" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-9">
                                                <input hidden type="file" name="img_kk" class="file1" accept="image/*"
                                                    id="imgInp1">
                                                <div class="input-group my-3">
                                                    <input type="text" class="form-control" disabled
                                                        placeholder="Foto KK (Kartu keluarga)" id="file1">
                                                    <div class="input-group-append">
                                                        <button type="button"
                                                            class="browse1 btn btn-primary">Browse</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <img src="" width="100" height="85" id="preview5" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-9">
                                                <input hidden type="file" name="img_akta" class="file5" accept="image/*"
                                                    id="imgInp5">
                                                <div class="input-group my-3">
                                                    <input type="text" class="form-control" disabled
                                                        placeholder="Foto Akte Kelahiran" id="file5">
                                                    <div class="input-group-append">
                                                        <button type="button"
                                                            class="browse5 btn btn-primary">Browse</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <img src="" width="100" height="85" id="preview2" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-9">
                                                <input hidden type="file" name="img_ijazah" class="file2"
                                                    accept="image/*" id="imgInp2">
                                                <div class="input-group my-3">
                                                    <input type="text" class="form-control" disabled
                                                        placeholder="Foto Ijazah / Surat Keterangan lulus dari sekolah "
                                                        id="file2">
                                                    <div class="input-group-append">
                                                        <button type="button"
                                                            class="browse2 btn btn-primary">Browse</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <img src="" width="100" height="85" id="preview3" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-9">
                                                <input hidden type="file" name="img_ktp" class="file3" accept="image/*"
                                                    id="imgInp3">
                                                <div class="input-group my-3">
                                                    <input type="text" class="form-control" disabled
                                                        placeholder="Foto KTP Orang tua" id="file3">
                                                    <div class="input-group-append">
                                                        <button type="button"
                                                            class="browse3 btn btn-primary">Browse</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <img src="" width="100" height="85" id="preview4" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-9">
                                                <input hidden type="file" name="img_bukti_bayar" class="file4"
                                                    accept="image/*" id="imgInp4">
                                                <div class="input-group my-3">
                                                    <input type="text" class="form-control" disabled
                                                        placeholder="Foto Bukti Pembayaran" id="file4">
                                                    <div class="input-group-append">
                                                        <button type="button"
                                                            class="browse4 btn btn-primary">Browse</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <hr class="sidebar-divider">
                                        <hr class="sidebar-divider">


                                        <div class="form-group">
                                            <label>Tahun Masuk</label>
                                            <select class="form-control" id="thn_msk" name="thn_msk">
                                                <option value="">- Pilih Periode -</option>
                                                <?php foreach ($thn_msk as $row): ?>
                                                    <option value="<?= $row['id'] ?>">
                                                        <?= $row['period_start'] ?>/
                                                        <?= $row['period_end'] ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= form_error('thn_msk', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>

                                        <div class="form-group">
                                            <div class="card shadow mb-4">
                                                <div class="card-header py-3">
                                                    <h6 class="m-0 font-weight-bold text-primary"><i
                                                            class="fa fa-university fa-fw"></i> Penempatan</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Pendidikan</label>
                                                                <select class="form-control" id="pendidikan"
                                                                    name="pendidikan">
                                                                    <option value="">- Pilih pendidikan -</option>
                                                                    <?php foreach ($pendidikan as $row): ?>
                                                                        <option value="<?= $row['id'] ?>">
                                                                            <?= $row['nama'] ?>
                                                                        </option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                                <?= form_error('pendidikan', '<small class="text-danger pl-3">', ' </small>') ?>
                                                            </div>
                                                        </div>
                                                        <div id="jurus" class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Kejuruan</label>
                                                                <select class="form-control" id="jurusan"
                                                                    name="jurusan">
                                                                    <option value="">- Pilih Jurusan -</option>
                                                                </select>
                                                                <?= form_error('jurusan', '<small class="text-danger pl-3">', ' </small>') ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="pt-3 form-group row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn-block btn btn-success">Kirim
                                            Pendaftaran</button>
                                    </div>
                                    <div class="col-md-12 text-center mt-5">
                                        <p>Sudah mendaftar? <a href="<?= base_url('ppdb/login') ?>">Login</a> ke
                                            dashboard.</p>
                                    </div>
                                </div>

                                <?php form_close() ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.container-fluid -->


        </div>
    </section>

</main><!-- End #main -->

<script type="text/javascript">
    var input = document.getElementById('password'),
        icon = document.getElementById('icon');

    icon.onclick = function () {

        if (input.className == 'active form-control') {
            input.setAttribute('type', 'text');
            icon.className = 'bi bi-eye';
            input.className = 'form-control';

        } else {
            input.setAttribute('type', 'password');
            icon.className = 'bi bi-eye-slash';
            input.className = 'active form-control';
        }

    }
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#jurus").hide();
        $('#prov').change(function () {
            $.ajax({
                type: 'POST',
                url: '<?= site_url('get/get_kota'); ?>',
                data: {
                    prov: this.value
                },
                cache: false,
                success: function (response) {
                    $('#kab').html(response);
                }
            });
        });
        $('#pendidikan').change(function () {
            $.ajax({
                type: 'POST',
                url: '<?= site_url('get/get_majors'); ?>',
                data: {
                    pendidikan: this.value
                },
                cache: false,
                success: function (response) {
                    $('#jurusan').html(response);
                }
            });
            $.ajax({
                type: 'POST',
                url: '<?= site_url('get/get_id_majors'); ?>',
                data: {
                    pendidikan: this.value
                },
                cache: false,
                success: function (response) {
                    if (response == 1) {
                        $("#jurus").show();
                    } else if (response == 0) {
                        $("#jurus").hide();
                    }
                }
            });
        });
    });
</script>


<script type="text/javascript">
    $(document).on("click", ".browse", function () {
        var file = $(this).parents().find(".file");
        file.trigger("click");
    });

    $(document).on("click", ".browse1", function () {
        var file = $(this).parents().find(".file1");
        file.trigger("click");
    });

    $(document).on("click", ".browse2", function () {
        var file = $(this).parents().find(".file2");
        file.trigger("click");
    });

    $(document).on("click", ".browse3", function () {
        var file = $(this).parents().find(".file3");
        file.trigger("click");
    });
    $(document).on("click", ".browse4", function () {
        var file = $(this).parents().find(".file4");
        file.trigger("click");
    });
    $(document).on("click", ".browse5", function () {
        var file = $(this).parents().find(".file5");
        file.trigger("click");
    });


    $('#imgInp').change(function (e) {
        var fileName = e.target.files[0].name;
        $("#file").val(fileName);

        var reader = new FileReader();
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    $('#imgInp1').change(function (e) {
        var fileName = e.target.files[0].name;
        $("#file1").val(fileName);

        var reader = new FileReader();
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview1").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    $('#imgInp2').change(function (e) {
        var fileName = e.target.files[0].name;
        $("#file2").val(fileName);

        var reader = new FileReader();
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview2").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    $('#imgInp3').change(function (e) {
        var fileName = e.target.files[0].name;
        $("#file3").val(fileName);

        var reader = new FileReader();
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview3").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
    $('#imgInp4').change(function (e) {
        var fileName = e.target.files[0].name;
        $("#file4").val(fileName);

        var reader = new FileReader();
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview4").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
    $('#imgInp5').change(function (e) {
        var fileName = e.target.files[0].name;
        $("#file5").val(fileName);

        var reader = new FileReader();
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview5").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
</script>