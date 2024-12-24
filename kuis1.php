<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitung Diskon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-size: 1.2em;
            color: #555;
        }
        input[type="number"] {
            width: 70%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 1em;
        }
        button {
            background-color: #00008B;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }
        button:hover {
            background-color: #AEC6CF;
        }
        .result {
            margin-top: 20px;
            font-size: 1.1em;
            color: #333;
        }
        .result span {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Penghitung Diskon</h1>
        
        <form method="POST" action="">
            <label for="jumlah_bayar">Masukkan jumlah bayar:</label>
            <input type="number" id="jumlah_bayar" name="jumlah_bayar" step="0.01" required>
            <button type="submit">Hitung Diskon</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            function hitung_diskon($jumlah_bayar) {
                if ($jumlah_bayar >= 500000) {
                    return 50; 
                } elseif ($jumlah_bayar >= 100000) {
                    return 10; 
                } elseif ($jumlah_bayar >= 50000) {
                    return 5;  
                } else {
                    return 0;  
                }
            }

            $jumlah_bayar = (float)$_POST['jumlah_bayar'];

            $diskon = hitung_diskon($jumlah_bayar);

            $harga_setelah_diskon = $jumlah_bayar - ($jumlah_bayar * $diskon / 100);

            echo "<div class='result'>";
            echo "<p>Jumlah bayar: <span>Rp. " . number_format($jumlah_bayar, 2, ",", ".") . "</span></p>";
            echo "<p>Diskon: <span>" . $diskon . "%</span></p>";
            echo "<p>Harga setelah diskon: <span>Rp. " . number_format($harga_setelah_diskon, 2, ",", ".") . "</span></p>";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>