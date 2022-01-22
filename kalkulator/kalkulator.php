<html>

<head>
    <title>kalkulator</title>
    <link rel="stylesheet" href="kalkulator.css">
</head>

<body>


    <?php
    if (isset($_POST['kirim'])) {
        $x1 = $_POST['bilangan_1'];
        $x2 = $_POST['bilangan_2'];
        $opt = $_POST['operasi'];
        switch ($opt) {
            case 'kali':
                $hasil = $x1 * $x2;
                break;
            case 'tambah':
                $hasil = $x1 + $x2;
                break;

            case 'kurang':
                $hasil = $x1 - $x2;
                break;
            case 'bagi':
                $hasil = $x1 / $x2;
                break;
        }
    }
    ?>

    <div class="container">
        <h1 align="center">Kalkulator</h1>
        <em>https://sites.google.com/view/
            deepleo</em>
        <form action="kalkulator.php" method="post">

            <input type="text" name="bilangan_1" autocomplete="off" class="bil">
            <br>

            <input type="text" name="bilangan_2" autocomplete="off" class="bil">
            <br>

            <div class="subcon">
                <select name="operasi" class="opsi">
                    <option value="kali">X</option>
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="bagi">/</option>
                </select>

                <input type="submit" value="=" name="kirim" class="kirim">
            </div>


        </form>

        <?php if (isset($_POST['kirim'])) {; ?>
            <input type="text" value=<?php echo  $hasil  ?> class="bil_hasil">
        <?php } else {; ?>
            <input type="text" value="0" class="bil_hasil">
        <?php }; ?>

        <footer style="margin-top:10px;">&copy;Deepleo@2022</footer>
    </div>
</body>

</html>