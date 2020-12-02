<?php
$str1 = '';
$file1 = fopen('PHP/data/text1.txt', 'r');
flock($file1, LOCK_EX);
if ($file1) {
    while ($line1 = fgets($file1)) {
        $str1 .= "<p>{$line1}</p>";
    }
}
flock($file1, LOCK_UN);
fclose($file1);
$str2 = '';
$file2 = fopen('PHP/data/text2.txt', 'r');
flock($file2, LOCK_EX);
if ($file2) {
    while ($line2 = fgets($file2)) {
        $str2 .= "<p>{$line2}</p>";
    }
}
flock($file2, LOCK_UN);
fclose($file2);
$str3 = '';
$file3 = fopen('PHP/data/text3.txt', 'r');
flock($file3, LOCK_EX);
if ($file3) {
    while ($line3 = fgets($file3)) {
        $str3 .= "<p>{$line3}</p>";
    }
}
flock($file3, LOCK_UN);
fclose($file3);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP01</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="ui">
        <div class="category">
            <button class="c1" id="c1"></button>
            <button class="c2" id="c2"></button>
            <button class="c3" id="c3"></button>
        </div>
        <div class="text-box">
            <div class="tb1 tb">
                <div class="output">
                    <?= $str1 ?>
                </div>
                <form action="PHP/text1.php" method="POST">
                    <textarea name="text1" id="" cols="30" rows="10"></textarea>
                    <button>送信</button>
                </form>
            </div>
            <div class="tb2 tb">
                <div class="output">
                    <?= $str2 ?>
                </div>
                <form action="PHP/text2.php" method="POST">
                    <textarea name="text2" id="" cols="30" rows="10"></textarea>
                    <button>送信</button>
                </form>
            </div>
            <div class="tb3 tb">
                <div class="output">
                    <?= $str3 ?>
                </div>
                <form action="PHP/text3.php" method="POST">
                    <textarea name="text3" id="" cols="30" rows="10"></textarea>
                    <button>送信</button>
                </form>
            </div>
        </div>
    </div>
    <script src="jquery.js"></script>
    <script>
        $('.tb1').show();
        $('.tb2').hide();
        $('.tb3').hide();

        $('#c1').on('click', function() {
            $('.tb1').show();
            $('.tb2').hide();
            $('.tb3').hide();
        });
        $('#c2').on('click', function() {
            $('.tb1').hide();
            $('.tb2').show();
            $('.tb3').hide();
        });
        $('#c3').on('click', function() {
            $('.tb1').hide();
            $('.tb2').hide();
            $('.tb3').show();
        });
    </script>
</body>

</html>