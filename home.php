<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Register</title>
  <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="description" content="">
  <meta name="keywords" content="">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="./">
        <h1 class="txt">SecurityXploit7</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register">Register</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="mt-2">
    <div class="container">
      <div class="content">
        <div class="card">
          <div class="card-header">
            <p class="turu"> DATA NUR HIDAYAH </p>
          </div>
          <div class="card-body">
            <?php 
              if(isset($_GET['alert'])){
                  if($_GET['alert'] == "sukses"){
                      echo "
                      <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Berhasil!Data telah ditambahkan</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>
                      ";
                  }else if($_GET['alert'] == "gagal"){
                      echo "
                      <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Gagal hapus data</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>
                      ";
                  }
                  if($_GET['alert'] == "sukses_hapus"){
                      echo "
                      <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Berhasil!Data telah dihapus</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>
                      ";
                  }else if($_GET['alert'] == "gagal_hapus"){
                      echo "
                      <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Gagal hapus data</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>
                      ";
                  }
              }
             ?>
            <table class="table table-sm table-striped table-bordered">
              <thead style="text-align: center;font-size: 10px;">
                <tr>
                  <th>NO</th>
                  <th>NAMA</th>
                  <th>EMAIL</th>
                  <th>NO HP</th>
                  <th>NAMA LEMBAGA</th>
                  <th>ALAMAT LEMBAGA</th>
                  <th>PROVINSI</th>
                  <th>KOTA/KAB</th>
                  <th>KECAMATAN</th>
                  <th>TANGGAL PELAKSANAAN</th>
                  <th>MATERI YAYASAN</th>
                  <th>UNIT SEKOLAH</th>
                  <th>JUMLAH PESERTA</th>
                  <th>INFORMASI TAGIHAN</th>
                  <th>KONFIRMASI WA</th>
                  <th>OPSI</th>
                </tr>
              </thead>
                  <?php 
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($conn,"SELECT * FROM user ORDER BY id ASC");
                    while($row = mysqli_fetch_array($data)){
                  ?>
              <tbody style="text-align: center;font-size: 10px;">
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row['nama'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['no_hp'];?></td>
                  <td><?php echo $row['lembaga'];?></td>
                  <td><?php echo $row['alamat'];?></td>
                  <td><?php echo $row['provinsi'];?></td>
                  <td><?php echo $row['kota'];?></td>
                  <td><?php echo $row['kecamatan'];?></td>
                  <td><?php echo date('d-m-Y', strtotime($row['tgpelaksanaan']));?></td>
                  <td><?php echo $row['materi'];?></td>
                  <td><?php echo $row['sekolah'];?></td>
                  <td><?php echo $row['jmlpeserta'];?></td>
                  <td><?php echo $row['tagihan'];?></td>
                  <td><?php echo $row['wa'];?></td>
                  <td style="text-align:center;">
                      <a href="edit?id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>EDIT</a>
                      <a href="delete?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>DELETE</a>
                  </td>
                </tr>
              </tbody>
              <?php }?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>