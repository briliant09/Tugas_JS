function transaksi() {
    let forms = document.getElementById('frm');
    let nama = forms.nama.value;
    let produk = forms.produk.value;
    let jumlah = parseInt(forms.jumlah.value);

    let hargaSatuan = 0;
    let diskon = 0;
    let ppn = 0;
    let hargaKotor = 0;
    let hargaBayar = 0;

    // menentukan Harga Produk
    switch (produk) {
        case "TV":
            hargaSatuan = 2000000;
            break;
        case "AC":
            hargaSatuan = 3000000;
            break;
        case "Kulkas":
            hargaSatuan = 4000000;
            break;
        default:
            alert("Produk tidak valid");
            return;
    }

    hargaKotor = hargaSatuan * jumlah; // Hitung Harga Kotor

    // Menghitung diskon
    if (produk === "Kulkas" && jumlah >= 3) {
        diskon = 0.3 * hargaKotor;
    } else if (produk === "AC" && jumlah >= 3) {
        diskon = 0.2 * hargaKotor;
    } else {
        diskon = 0.1 * hargaKotor;
    }

    // Menghitung PPN
    ppn = 0.1 * (hargaKotor - diskon);

    // Menghitung harga bayar
    hargaBayar = (hargaKotor - diskon) + ppn;

    // Membuat data string untuk ditampilkan
    let data = `Hasil Transaksi
    <br> Nama : ${nama}
    <br> Produk : ${produk}
    <br> Jumlah : ${jumlah}
    <br> Harga Satuan : ${hargaSatuan.toLocaleString()}
    <br> Diskon : ${diskon.toLocaleString()}
    <br> PPN : ${ppn.toLocaleString()}
    <br> Harga Kotor : ${hargaKotor.toLocaleString()}
    <br> Harga Bayar : ${hargaBayar.toLocaleString()}`;

    // Menampilkan hasil
    document.getElementById("hasiltransaksi").innerHTML = data;
}
