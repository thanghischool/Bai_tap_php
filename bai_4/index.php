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
    $tb = '';
    $result = '';
    $rank = '';
    if (isset($_POST['hk1']) && isset($_POST['hk2'])) {
        function check($a, $b)
        {
            $GLOBALS['tb'] = ($a + $b) / 2;
            if ($GLOBALS['tb'] >= 5) {
                $GLOBALS['result'] = "Được lên lớp";
            } else {
                $GLOBALS['result'] = "Không được lên lớp";
            }
            if ($GLOBALS['tb'] >= 8) {
                $GLOBALS['rank'] = "Giỏi";
            } else if ($GLOBALS['tb'] >= 5 && $GLOBALS['tb'] < 8) {
                $GLOBALS['rank'] = "Trung bình";
            } else {
                $GLOBALS['rank'] = "Yếu";
            }
        }

        check($_POST['hk1'], $_POST['hk2']);
    }
    ?>
    <h1>Kết quả học tập</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="">Điểm HK1:</label>
        <input name="hk1" type="text" value="<?php echo isset($_POST['hk1']) ? $_POST['hk1'] : '' ?>"> <br>
        <label for="">Điểm HK2:</label>
        <input name="hk2" type="text" value="<?php echo isset($_POST['hk2']) ? $_POST['hk2'] : '' ?>"> <br>
        <label for="">Điểm trung bình</label>
        <p><?php echo isset($tb) ? $tb : '' ?></p> <br>
        <label for="">Kết quả</label>
        <p><?php echo isset($result) ? $result : '' ?></p> <br>
        <label for="">Xếp loại học lực</label>
        <p><?php echo isset($rank) ? $rank : '' ?></p>

        <input style="position:absolute; left:50%; bottom: 5%; transform: translate(-50%)" type="submit" value="Xem kết quả">
    </form>
</body>

</html>