function Gempa(lokasi, skala) {
    this.lokasi = lokasi;
    this.skala = skala;

    this.dampak = function() {
        var dampak = "";
        if (this.skala >= 0 && this.skala <= 2) {
            dampak = "Tidak terasa";
        } else if (this.skala > 2 && this.skala <= 4) {
            dampak = "Bangunan retak-retak";
        } else if (this.skala > 4 && this.skala <= 6) {
            dampak = "Bangunan roboh";
        } else {
            dampak = "Bangunan roboh dan berpotensi tsunami";
        }

        return dampak;
    };
}

var dataGempa = [];

function inputGempa() {
    var lokasi = document.getElementById("lokasi").value;
    var skala = parseFloat(document.getElementById("skala").value);

    var gempa = new Gempa(lokasi, skala);
    dataGempa.push(gempa);

    tambahkandata(gempa);
    document.getElementById("lokasi").value = "";
    document.getElementById("skala").value = "";
}

function tambahkandata(gempa) {
    var data = document.getElementById("dataGempa");
    var li = document.createElement("li");
    li.innerHTML = "Lokasi Gempa : " + gempa.lokasi + "<br>Skala Gempa : " + gempa.skala + "<br>Dampak gempa : " + gempa.dampak();
    data.appendChild(li);
}
