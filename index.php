<?php
    require_once('functions.php');

    $data = $_POST;
    
    $date= $_POST['date'];
    $content = $_POST['content'];
    $dataPath = getDataPath();
    //入力データを.txtファイルとして保存
    if(!empty($data)){   
        $title=$_POST['title'];
        //$fileName = hash("md5", $data["body"]).date('Ymd') . ".txt"; //ランダム値をファイル名に入れるとき
        $fileName = date('Ymd') . $title .  ".txt";
        $file = $dataPath . $fileName;
        $current = json_encode($data);
        // 結果をファイルに書き出します
        file_put_contents($file, $current);
    }

    // ファイルの中身を取得
    if($_GET["id"]){ 
        $filePath = $dataPath . $_GET['id'] . ".txt";
        $txtString = file_get_contents($filePath);
        $contents = json_decode($txtString,true); 
    }else{
        $contents = [];
    }
    $date = date('Y,m,d');

    $fileList = getFileList();
?>

<!--detail.php（自分自身）にタイトル、日付、内容を送信-->
<html>
    <head>
    <link rel="http://localhost:8888/Applications/MAMP/htdocs/0613homework/stylesheet.css" src="stylesheet">
    </head>
<body>

<form action="detail.php" method="POST" >
title:<input name="title" type="text"><br>
date:<input name="date" value="date"><br>
content:<br>
<textarea style="width:1200px; height:600px;" name="content"></textarea><br>
<input type="submit" value="送信">
</form>


<?php foreach($fileList as $file):?>
<a href= "detail.php?id=<?php echo $file ?>" id="<?php echo $file; ?>"><?php echo $file ?><br></a>
<?php endforeach; ?>
</body>
</html>
<p><?php var_dump($contents);?></p>




<?php var_dump($_GET['id']);
$_GET['id'];
?>

<!--
<?php var_dump($_GET['id']);
$_GET['id'];
?> 

<?php var_dump($_GET['id']);
$_GET['id'];
?> 
-->


<?php
//$msg = null;

//$filepath = dirname(__FILE__) . "/data/";
//if(isset($_FILES['title'])&& is_uploaded_file($_FILES['title']['tmp_name'])){
  //  $old_name = $_FILES['title']['tmp_name'];
  //  $new_name = $_FILES['title']['name'];
  //  if (move_uploaded_file($old_name, $new_name )){
   //     $msg = 'アップロードしました';
  //  }else{
  //      $msg = 'アップロードできませんでした。';
  //  }
//}
//var_dump($msg);

//入力したデータをjsonファイルとして保存
 

    //$filepath = dirname(__FILE__) . "/data/"; //dataディレクトリのpathを取得
    //$file = file_get_contents($filepath . $_GET['filename']);
    //$jsonfile = json_decode($file,true);
    //var_dump($jsonfile);
    //var_dump($_GET);
