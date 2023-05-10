<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 3</title>
</head>
<body>
    
    <form>
        <div>
            Nama Lengkap
            <input type="text" id="txNama" name="txNama" placeholder="Nama Lengkap" autocomplete="off">
        </div>
        <div>
            <button type="submit" id="btn">Check Nama</button>
        </div>
    </form>

    <script>
        const btn= document.getElementById('btn');

        btn.addEventListener('click', function(){
            let nm= document.getElementById("txNama").value;
            alert('Halowww ' + nm + '🤍')
        });
    </script>

</body>
</html>