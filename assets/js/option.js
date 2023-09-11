var optionElement = document.getElementById('optionSelect');

optionElement.addEventListener('change', function() {
    var selectedValue = this.value;

    // Sembunyikan semua form input terlebih dahulu
    document.getElementById('select1').style.display = 'none';
    document.getElementById('select2').style.display = 'none';
    document.getElementById('select3').style.display = 'none';

    // Tampilkan form input yang sesuai dengan opsi yang dipilih
    if (selectedValue === 'yayasan') {
        document.getElementById('select1').style.display = 'block';
    } else if (selectedValue === 'sekolah') {
        document.getElementById('select2').style.display = 'block';
    } else if (selectedValue === 'custom') {
        document.getElementById('select3').style.display = 'block';
    }
});
