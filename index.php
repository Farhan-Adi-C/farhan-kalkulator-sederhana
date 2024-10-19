<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-100">
    <div class="w-1/3 h-auto border-slate-700 border-2 mx-auto mt-12 bg-slate-100 rounded-sm shadow-xl overflow-hidden">
    <form class=""   action="" method="get"> 
        <div class="">  
            <h1 class="text-3xl font-semibold text-center mb-8 mt-4">Kalkulator Sederhana</h1>
      
                <input class="block w-11/12 h-12 mx-auto border-slate-400 border-2 rounded-md my-4" type="number" name="number1" placeholder="  angka pertama" required>
                <div class="flex justify-between items-center w-1/2 ml-6">
                    <p class="text-base font-medium">Pilih operasi</p>
                    <select class="w-20 h-10 border-slate-500 border-[1.5px] text-center font-extrabold text-xl text-red-800 rounded-md" name="operasi" id="operasi" required>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                        <option value="%">%</option>
                    </select>
                </div>
                <input class="block w-11/12 h-12 mx-auto border-slate-400 border-2 rounded-md my-4" type="number" name="number2" placeholder="  angka kedua" required >
            <button type="submit" class="px-28 py-1 my-4 bg-blue-700 text-white mx-auto block hover:bg-blue-800 rounded-md">Hitung</button>

            <?php
            $hasil = 0;
            if (isset($_GET['number1'], $_GET['number2'], $_GET['operasi'])) {
                $number1 = $_GET['number1'];
                $number2 = $_GET['number2'];
                $operasi = $_GET['operasi'];

                  switch ($operasi) {
                        case '+':
                            $hasil = $number1 + $number2;
                            break;
                        case '-':
                            $hasil = $number1 - $number2;
                            break;
                        case '*':
                            $hasil = $number1 * $number2;
                            break;
                        case '/':
                            $hasil = $number2 != 0 ? $number1 / $number2 : 'Tidak dapat membagi dengan nol';
                            break;
                        case '%':
                            $hasil = $number1 % $number2;
                            break;
                    }
                }
            ?>
    
        </div>
    </form>

    <form action="" method="get">
        <button class="px-28 py-1 my-4 bg-green-700 text-white mx-auto block hover:bg-green-800 rounded-md" type="submit">refresh</button>
    </form>

    <div class="flex items-center justify-center">
        <p class="text-center mt-2 mb-5 text-lg items-center"> Hasil: <span class="text-red-500 font-bold text-3xl mx-2"><?php echo $hasil ?></span></p>
    </div>
</div>
</body>
</html>
