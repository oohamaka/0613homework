<?php

// ファイル一覧を取得する
function getFileList() {
  $dataPath = dirname(__FILE__) . "/data/";
  $files = glob($dataPath."*");//.dataディレクトリ内の全てのファイルパスを取得
  $fileList = [];//ファイル名とファイルパスが入る配列の作成
  foreach($files as $file){//foreachで繰り返しglob処理を行っている。
      $fileList[] = pathinfo($file, PATHINFO_FILENAME);
      //foreachで$fileに格納されたファイル名を$fileListという配列に格納。
  }
  return $fileList;
}

function getDataPath() {
  $dataPath = dirname(__FILE__) . "/data/";
  return $dataPath;
}
