<?php
require_once('functions.php');

$fileList = getFileList();
$filePath = getDataPath() . $_GET['id'] . ".txt";
$content = file_get_contents($filePath);
$data = json_decode($content, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>タイトル：<?php echo $data['title']; ?></p>
    <p>日付：<?php echo $data['date']; ?></p>
    <p>内容：<?php echo nl2br($data['content']); ?></p>
    <input type="button" onclick="history.back()" value="戻る">

    <h3>ファイル名</h3>
    <?php foreach($fileList as $file):?>
        <a href= "detail.php?id=<?php echo $file; ?>"><?php echo $file ?></a><br>
    <?php endforeach; ?>

</body>
</html>
