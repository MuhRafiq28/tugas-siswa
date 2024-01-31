<?php
  include'config.php';
    $id_pendaftaran ='';
    $nama ='';
    $tanggal_lahir ='';
    $jenis_kelamin ='';
    $agama = '';
    $alamat = '';
    $desa_kelurahan= '';
    $kecamatan = '';
    $kabupaten = '';
    $provinsi = '';
    $kode_pos = ''; 
    $no_telepon = '';
    $email = '';
    $sekolah_asal = '';
  if(isset($_GET['edit'])){
    $id_pendaftaran = $_GET['edit'];
    $sql = "SELECT * FROM pendaftaran WHERE id_pendaftaran='$id_pendaftaran';";
    $query = mysqli_query($db,$sql);
    $result = mysqli_fetch_assoc($query);
    $nama = $result['nama'];
    $tanggal_lahir = $result['tanggal_lahir'];
    $jenis_kelamin = $result['jenis_kelamin'];
    $agama = $result['agama'];
    $alamat = $result['alamat'];
    $desa_kelurahan= $result['desa_kelurahan'];
    $kecamatan = $result['kecamatan'];
    $kabupaten = $result['kabupaten'];
    $provinsi = $result['provinsi'];
    $kode_pos = $result['kode_pos'];
    $no_telepon = $result['no_telepon'];
    $email = $result['email'];
    $sekolah_asal = $result['sekolah_asal'];
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 123 Jadi Anime</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMK Negeri 123 Jadi Anime</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index1.php">Home</a>
        <a class="nav-link" href="kelola-siswa.php">Pendaftaran</a>
        <a class="nav-link" href="index.php">Data Guru</a>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-4">
<h2>Formulir Pendaftaran Siswa SMK Negeri 123 Jadi Anime </h2><br>
<form action="proses-siswa.php" method="POST">
  <input type="hidden" value="<?php echo $id_pendaftaran;?>" name="id_pendaftaran">
<div class="mb-3">
  <label for="nama" class="form-label">Nama: </label>
  <input type="text" class ="form-control" name="nama" value="<?php echo $nama;?> "placeholder="nama lengkap" />
</div>
<div class="mb-3">
  <label for="tanggal_lahir" class="form-label">Tanggal Lahir: </label>
  <input type="date" class ="form-control" name="tanggal_lahir" value="<?php echo $tanggal_lahir;?>"  placeholder="tanggal lahir" />
</div>
<div class="mb-3">
<div class="form-check">
<label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($jenis_kelamin == 'laki-laki'){echo "checked";}?> value="laki-laki">
  <label class="form-check-label" for="laki-laki">Laki-Laki</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($jenis_kelamin == 'perempuan'){echo "checked";}?> value="perempuan">
  <label class="form-check-label" for="laki-laki">Perempuan</label>
</div>
</div>
<div class="mb-3">
    <label for="agama" class="form-label">Agama: </label>
            <select name="agama" class="form-control">
                <option <?php if($agama == 'Islam'){echo "selected";}?> value="Islam">Islam</option>
                <option <?php if($agama == 'Kristen'){echo "selected";}?> value="Kristen">Kristen</option>
                <option <?php if($agama == 'Hindu'){echo "selected";}?> value="Hindu">Hindu</option>
                <option <?php if($agama == 'Budha'){echo "selected";}?> value="Budha">Budha</option>
                <option <?php if($agama == 'Konghucu'){echo "selected";}?> value="Konghucu">Konghucu</option>
            </select>
</div>
<div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <textarea class="form-control" name="alamat" rows="3"><?php echo $alamat;?></textarea>
</div>
<div class="mb-3">
  <label for="desa" class="form-label">Desa: </label>
  <input type="text" class ="form-control" name="desa_kelurahan" value="<?php echo $desa_kelurahan;?>" placeholder="desa" />
</div>
<div class="mb-3">
  <label for="kecamatan" class="form-label">Kecamatan: </label>
  <input type="text" class ="form-control" name="kecamatan" value="<?php echo $kecamatan;?>" placeholder="kecamatan" />
</div>
<div class="mb-3">
    <label for="kota" class="form-label">Kabupaten: </label>
            <select name="kabupaten" class="form-control">
                <option>Kota Bandung</option>
                <option>Kabupaten Bandung</option>
                <option>Cimahi</option>
                <option>Bandung Barat</option>
                <option>Sumedang</option>
            </select>
</div>
<div class="mb-3">
    <label for="provinsi" class="form-label">Provinsi: </label>
            <select name="provinsi" class="form-control">
                <option <?php if($provinsi == 'Banten'){echo "selected";}?> value="Banten">Banten</option>
                <option <?php if($provinsi == 'Jawa Barat'){echo "selected";}?> value="Jawa Barat">Jawa Barat</option>
                <option <?php if($provinsi == 'DKI Jakarta'){echo "selected";}?> value="DKI Jakarta">DKI Jakarta</option>
                <option <?php if($provinsi == 'DI Yogyakarta'){echo "selected";}?> value="DI Yogyakarta">DI Yogyakarta</option>
                <option <?php if($provinsi == 'Jawa Tengah'){echo "selected";}?> value="Jawa Tengah">Jawa Tengah</option>
                <option <?php if($provinsi == 'Jawa Timur'){echo "selected";}?> value="Jawa Timur">Jawa Timur</option>
            </select>
</div>
<div class="mb-3">
    <label for="kode_pos" class="form-label">Kode Pos: </label>
    <input type="text" class ="form-control" name="kode_pos" value="<?php echo $kode_pos;?>" placeholder="kode pos" />
</div>
<div class="mb-3">
    <label for="no_tel" class="form-label">No Telepon: </label>
    <input type="text" class ="form-control" name="no_telepon" value="<?php echo $no_telepon;?>" placeholder="no telepon" />
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email: </label>
    <input type="email" class ="form-control" name="email" value="<?php echo $email;?>" placeholder="email" />
</div>
<div class="mb-3">
    <label for="sekolah_asal" class="form-label">Sekolah Asal: </label>
    <input type="text" class ="form-control" name="sekolah_asal" value="<?php echo $sekolah_asal;?>" placeholder="nama sekolah" />
</div>
<div class="mb-3">
  <div class="col">
    <?php
    if(isset($_GET['edit'])){
      ?>
      <button type="submit" name="aksi" value="edit" class="btn btn-primary">
        Simpan Perubahan
    </button>
    <?php
    }else{
      ?>
      <button type="submit" name="aksi" value="add" class="btn btn-primary">
        Daftar
    </button>
    <?php
    }
    ?>
   <a href="index-siswa.php" type="button" class="btn btn-danger">Batal</a>
  </div>
</div>
    </form>
</div>
    </body>
</html>