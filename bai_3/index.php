<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    if (isset($_POST['dai']) && isset($_POST['rong'])) {
        $a = $_POST['dai'];
        $b = $_POST['rong'];
        $c = $a * $b;
    }
    ?>

    <h1>DIỆN TÍCH HÌNH CHỮ NHẬT</h1>

    <form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label for="">Chiều dài:</label>
        <input name="dai" type="text" value="<?php echo isset($_POST['dai']) ? $_POST['dai'] : ''; ?>">
        <label for="">Chiều rộng:</label>
        <input name="rong" type="text" value="<?php echo isset($_POST['rong']) ? $_POST['rong'] : ''; ?>"> <br>
        <label for="">Diện tích:</label>
        <p style="display: inline-block"><?php if (isset($c)) {
                                                echo $c;
                                            } ?></p> <br>

        <input type="submit" value="Tính">
    </form>


</body>

</html>