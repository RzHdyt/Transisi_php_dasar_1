<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
</head>

<body>
    <form method="GET">
        <div>
            <label>Masukan Kata</label> <br>
            <input name="nama" type="text" placeholder="Masukkan Kata">
        </div>

        <div>
            <button>Submit</button>
        </div>
    </form>

    <?php
    $nama = @$_GET['nama'];

    $lower = 0;
    for ($i = 0; $i < strlen($nama); $i++) {
        if (
            $nama[$i] >= 'a' && $nama[$i] <= 'z'
        )
            $lower++;
    }

    echo "$nama Mengandung $lower buah huruf kecil";
    ?>

</body>

</html>