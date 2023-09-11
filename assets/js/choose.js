var selectElement = document.getElementById('pilihan');

selectElement.addEventListener('change', function() {
    var selectedValue = this.value;

    // Sembunyikan semua form input terlebih dahulu
    document.getElementById('formInput1').style.display = 'none';
    document.getElementById('formInput2').style.display = 'none';
    document.getElementById('formInput3').style.display = 'none';

    // Tampilkan form input yang sesuai dengan opsi yang dipilih
    if (selectedValue === '1') {
        document.getElementById('formInput1').style.display = 'block';
    } else if (selectedValue === '2') {
        document.getElementById('formInput2').style.display = 'block';
    } else if (selectedValue === '3') {
        document.getElementById('formInput3').style.display = 'block';
    }
});
