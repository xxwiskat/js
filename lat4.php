<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
    <style>
        body{
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <h1>Menghitung Luas segitiga</h1>

    <form>
        <div>
            Masukkan Nilai Alas:
            <input type="text" id="txAlas" name="txAlas" placeholder="Masukkan nilai alas" autocomplete="off">
        </div>
        <div>
            Masukkan Nilai Tinggi:
            <input type="text" id="txTinggi" name="txTinggi" placeholder="Masukkan nilai tinggi" autocomplete="off">
        </div>
        <div>
            <button type="button" id="btn">Kirim</button>
        </div>
        <div style="display: none;" id="result"></div>
    </form>

    <script>
        const btn= document.getElementById('btn');

        btn.addEventListener('click', function(){
            let alas= document.getElementById('txAlas').value;
            let tinggi= document.getElementById('txTinggi').value;

            let result= (alas * tinggi) / 2;

            // OUTPUT WITH ALERT
            // alert('Hasil perhitungan mencari Alas Segitiga\ndengan angka berikut:\nAlas= ' + alas + '\nTinggi= ' + tinggi + '\nHasilnya adalah= ' + result);

            const divRe= document.getElementById('result');
            const btn= document.getElementById('btn');

            // OUTPUT WITH DIV
            btn.style.display= "none";
            divRe.style.display= "block";
            divRe.style.color= "red";
            divRe.style.fontWeight= "bold";
            divRe.innerHTML= "Hasil perhitungan mencari luas segitiga dengan alas= " + alas + ", tinggi= " + tinggi + "<br>Hasilnya= " + result;
        });
    </script>
</body>
</html>