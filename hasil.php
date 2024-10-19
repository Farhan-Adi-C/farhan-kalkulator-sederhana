<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        select, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input{
            width: 95%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
            font-size: 1.5em;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="number" name="angka1" id="angka1" required placeholder="Masukkan angka pertama">
        <input type="number" name="angka2" id="angka2" required placeholder="Masukkan angka kedua">
        <select name="operator" id="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>

<?php
    $angka1 = isset($_GET['angka1']) ? $_GET['angka1'] : 0;
    $angka2 = isset($_GET['angka2']) ? $_GET['angka2'] : 0;
    $operator = isset($_GET['operator']) ? $_GET['operator'] : '+';

    echo '<div class="result">' . $angka1 . ' ' . $operator . ' ' . $angka2 . ' = ' . eval('return ' . $angka1 . $operator . $angka2 . ';') . '</div>';
  ?>