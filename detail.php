<?php
$title = $_POST['title'];
$date = $_POST['date'];
$content = $_POST['content'];
?>

<body>
    <p>タイトル：<?php echo $title; ?></p>
    <p>日付：<?php echo $date; ?></p>
    <p>内容：<?php echo nl2br($content); ?></p>
    <input type="button" onclick="history.back()" value="戻る">
</body>

<h3>ファイル名</h3>

<?php echo $_GET[$file] ?>
