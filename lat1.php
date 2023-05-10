<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <div id="pesan">
        pesan singkat
    </div>

    <button type="submit" class="btn">Klik tombol ini</button>
    <div class="secret" style="display: none;">Congrats</div>
    
    <script src="script.js"></script>
    <script>
        document.write("<div>menulis dengan JavaScript</div>");
        document.getElementById("pesan").innerHTML= "mengganti tulisan pesan singkat";

        // merubah warna tulisan
        document.getElementById("pesan").style.color= "darkred";

        const btn= document.querySelector(".btn");
        const divSecret= document.querySelector(".secret");
        
        btn.addEventListener('click', function(){
            btn.style.display= "none";
            divSecret.style.display= 'block';
        });
    </script>


</body>
</html>