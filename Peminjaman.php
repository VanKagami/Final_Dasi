<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Peminjaman</title>
  </head>
  <body > 
    <section id="about">      
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2><u>Tentang Form Peminjaman</u></h2>
            <h3><a href="Calendar.php">Kembali ke Jadwal</a></h3>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-4">
            <p><i><strong>Peminjaman Ruangan atau Aula Kelurahan Bahu.</strong></i></p>
            <p><i><strong>Keterangan</strong></i> :</strong> &nbsp;&nbsp; Formulir ini masih butuh diverifikasi oleh pihak Kelurahan Bahu sebagai pengesahan surat peminjaman</p>
          </div>
        </div>
      </div>
    </section>
    <!--  -->
    <section id="contact">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2><u>Formulir Data Diri</u></h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6"> 
            <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
              <strong>Pesan Anda Sudah Terkirim!!</strong>&nbsp;&nbsp; Surat Peminjaman Anda akan segera dibuat.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form name="K3-Dasi">
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" placeholder="Mohon diisi nama anda!!" required>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" aria-describedby="alamat" name="alamat"  placeholder="Mohon diisi alamat anda!!" required>
              </div>
              <div class="mb-3">
                <label for="peminjaman" class="form-label">Peminjaman</label>
                <input type="text" class="form-control" id="peminjaman" aria-describedby="peminjaman" name="peminjaman" placeholder="Mohon diisi peminjaman anda!!" required>
              </div>
              <div class="mb-3">
                <label for="haritgl" class="form-label">Hari dan Tanggal</label>
                <input type="text" class="form-control" id="haritgl" aria-describedby="haritgl" name="hari"  placeholder="Mohon diisi hari dan tanggal !!" required>
              </div>
              <div class="mb-3">
                <label for="waktu" class="form-label">Waktu</label>
                <input type="text" class="form-control" id="waktu" aria-describedby="waktu" name="waktu" placeholder="Mohon diisi waktu !!" required>
              </div>
              <div class="mb-3">
                <label for="jenisacara" class="form-label">Jenis Acara</label>
                <input type="text" class="form-control" id="jenisacara" aria-describedby="jenisacara" name="acara" placeholder="Mohon diisi jenis acara !!" required>
              </div>
              <div class="mb-3">
                <label for="notelp" class="form-label">No Telp</label>
                <input type="text" class="form-control" id="notelp" aria-describedby="notelp" name="telp" placeholder="Mohon diisi nomor telepon !!" required>
              </div>
              <button type="kirim" class="btn btn-primary btn-kirim">Kirim</button>
              <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="bg-primary text-white text-center pb-2 mt-5">
      <p>Dibuat oleh Kelompok 3 Desain dan Analisis Sistem Informasi</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/Peminjaman.js"></script>

  </body>
</html>