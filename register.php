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
                        <a href="home" class="btn btn-sm btn-primary"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="kirim" method="POST" class="row g-3">
                            <div class="col-md-6">
                                <label for="nama" class="form-label">Nama PIC</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                            <div class="col-md-6">
                                <label for="Email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="Email">
                            </div>
                            <div class="col-md-6">
                                <label for="no" class="form-label">Nomor HP</label>
                                <input type="text" class="form-control" name="hp" id="no">
                            </div>
                            <div class="col-md-6">
                                <label for="lembaga" class="form-label">Nama Lembaga</label>
                                <input type="text" class="form-control" name="lembaga" id="lembaga">
                            </div>
                            <div class="col-md-6">
                                <label for="alamat" class="form-label">Alamat Lembaga</label>
                                <input type="text" class="form-control" name="alamat" id="alamat">
                            </div>
                            <div class="col-md-6">
                                <label for="provinsi" class="form-label">Provinsi</label>
                                <input type="text" class="form-control" name="provinsi" id="pro">
                            </div>
                            <div class="col-md-6">
                                <label for="kota" class="form-label">Kota/Kabupaten</label>
                                <input type="text" class="form-control" name="kota" id="kota">
                            </div>
                            <div class="col-md-6">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" name="kecamatan" id="kecamatan">
                            </div>
                            <div class="col-md-6">
                                <label for="tgl" class="form-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" name="tgmulai" id="tgl">
                            </div>
                            <div class="col-md-6">
                                <label for="tgl" class="form-label">Tanggal Selesai</label>
                                <input type="date" class="form-control" name="tgselesai" id="tgl">
                            </div>
                            <div class="col-md-6">
                                <label for="peserta" class="form-label">Jumlah peserta</label>
                                <input type="text" class="form-control" name="peserta" id="peserta">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Informasi Biaya/Tagihan yang harus dibayarkan</label>
                                <select id="firstSelect" class="form-select">
                                    <option selected>-- Opsi Pilihan --</option>
                                    <option value="a">PAKET A -- Rp.2.500.000</option>
                                    <option value="b">PAKET B -- Rp.3.000.000</option>
                                    <option value="c">PAKET C -- Rp.5.000.000</option>
                                </select>
                            </div>
                            <div class="col-12" id="secondSelectContainer" style="display:none;">
                                
                            </div>
                            <div class="col-12" id="thirdSelectContainer" style="display:none;">
                                
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-primary">KIRIM</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/select.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>