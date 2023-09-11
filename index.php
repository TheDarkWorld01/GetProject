<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form Input</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form action="tampil" method="POST">
        <div class="card" style="width: 380px;">
            <label for="pilihan">Pilih opsi:</label>
            <select id="pilihan" class="form-select" aria-label="Default select example">
                <option selected>-- Opsi Pilihan --</option>
                <option value="1">Rp.1.500.000</option>
                <option value="2">Rp.2.500.000</option>
                <option value="3">custom</option>
            </select>

            <!-- Form input yang akan ditampilkan untuk setiap opsi -->
            <div id="formInput1" style="display:none;">
                <label for="inputData1">Masukkan data untuk Opsi 1:</label>
                <input type="text" id="inputData1" class="form-control">
            </div>

            <div id="formInput2" style="display:none;">
                <label for="inputData2">Masukkan data untuk Opsi 2:</label>
                <input type="text" id="inputData2" class="form-control">
            </div>

            <div id="formInput3" style="display:none;">
                <label for="inputData3">Masukkan data lembaga:</label>
                <input type="text" id="inputData3" class="form-control">
                <label for="inputData3">Masukkan sekolah:</label>
                <input type="text" id="inputData3" class="form-control">
            </div>
        </div><br>
        <input type="button" value="submit" name="submit" class="btn btn-primary">
    </form>
    <script src="assets/js/choose.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
