<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>我的選台器</title>
</head>
<body>
<h2>何敏煌的精選第四台</h2>
<hr>
<?php
	
	$tags = "<iframe width='560' height='315' src='https://www.youtube.com/embed/^^^^' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


	//以下是標準的二維陣列宣告方式
	$data = array(
		array("TVBS新聞 55 頻道 24 小時直播", "TVBS", 	"A4FbB8UhNRs"), //不能是分號
		array("三立LIVE新聞HD直播", "三立新聞", "4ZVUmEUFwaY"),
		array("民視新聞直播", "民視新聞", "XxJKnDLYZz4"),
		array("CTI中天新聞24小時HD新聞直播", "中天新聞", "wUPPkSANpyo"),
		array("EBC 東森新聞 51 頻道 24 小時線上直播", "東森新聞", "RaIJ767Bj_M"),
		array("台視新聞台HD 24 小時線上直播", "台視新聞", "NbjI0cARzjQ")
	);  // 結束二維陣列定義的地方，這裡才要用分號結束
	
	//以下的迴圈，負責產生按鈕列
	foreach($data as $tv) {
		echo "<button>" . 
			 "<a href='test03.php?v=" . 
			 $tv[2] . 
			 "&title=" . $tv[0] . 
			 "'>" .
			 $tv[1] . 
			 "</a></button>";
	}
	echo "<hr>";
	//下面要用來處理影片的播放器，用內嵌的方式，但是要置換影片id
	$v = $_GET["v"]; // 從網址取得v
	$title = $_GET["title"]; //從網址取得title

	if ($v==NULL) {
		$v = "wUPPkSANpyo";
		$title = "CTI中天新聞24小時HD新聞直播";
	}
	
	//以下進行字串的替換工作
	echo "<h2>$title</h2>";
	echo str_replace("^^^^", $v, $tags);

?>
<hr>
~~版權沒有，歡迎拷貝~~
<hr>
</body>
</html>