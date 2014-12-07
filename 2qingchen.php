<?php 
$contentStr = '魂淡！为什么不按我说的格式写！竟敢调戏纸条君！'; //返回消息内容

//----------妈妈呀我要开始蛇精病了---------------------//
$keyword=isset($_REQUEST["text"])?trim($_REQUEST["text"]):"请输入内容！";
		$keyword1 = substr($keyword,0,1);
		//此处预留解析发送来的数据$keyword
		if(strcmp($keyword1, "s")==0) {
			
			$keyword2 = explode("s",$keyword);
			mysql_connect('10.0.16.16:4066','12667RH5','8ec5x9Fh504y');//先登录mysql
			mysql_select_db('chadlia96m_mysql_uf45508p');//再use
			mysql_query("CREATE TABLE IF NOT EXISTS `nova` (  `id` int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,  `hus` varchar(12) NOT NULL,  `wife` varchar(12) NOT NULL)"); //再创建第二个表——nova
			$goodnews = mysql_query(" SELECT * FROM `nova` WHERE `hus` = '$keyword2[2]' AND `wife` = '$keyword2[1]' LIMIT 2 ");
			//select
			$row = mysql_num_rows($goodnews);
			if($row==0){
				mysql_query(" INSERT INTO `nova` ( `hus`, `wife`) VALUES ( '$keyword2[1]', '$keyword2[2]')");
				$contentStr="好哒，纸条君已经将你秘密的告白记到本本上啦，敬候佳音吧~";//没成
				}else{
					$contentStr="哇，纸条君拿出小本本一查，发现$keyword2[2]也在暗恋着你哟~快去跟他缔结成为恋人的契约吧~";//成了~~~~
					mysql_query(" INSERT INTO `nova` ( `hus`, `wife`) VALUES ( '$keyword2[1]', '$keyword2[2]')");
					}
		}
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>暗恋小纸条</title>
<style>
html, body {
	width: 100%;
	height: 100%;
	margin: 0;
	padding: 0;
	font-size: 18px;
	font-family: Verdana, Geneva, sans-serif;
}
.wrapper {
	width: 100%;
	height: 100%;
	background: #00aeff;
}
.title {
	heigh: 45px;
	line-height: 45px;
	color: #efefee;
	font-size: 35px;
	text-align: center;
	background: #ca7d1e;
	-moz-box-shadow: 0 0 10px 1px #232222;
	-ms-box-shadow: 0 0 10px 1px #232222;
	-webkit-box-shadow: 0 0 10px 1px #232222;
	box-shadow: 0 0 10px 1px #232222;
}
.text {
	margin: 15px 10px;
	text-indent: 2em;
	padding: 10px;
	background: rgba(210,220,190,0.5);
	border-radius: 10px;
	font-size: 20px;
}
textarea {
	font-family: Verdana, Geneva, sans-serif;
	width: 80%;
	display: block;
	margin: auto;
	resize: none;
	font-size: 24px;
	border:solid 1px rgba(150,130,170,.5);
}
.submit {
	font-family: Verdana, Geneva, sans-serif;
	display: block;
	width: 250px;
	height: 40px;
	cursor: pointer;
	border-radius: 3px;
	background: #224555;
	margin: 10px auto;
	line-height: 30px;
	text-align: center;
	color: #fff;
	font-size: 25px;
	border: none;
	
}
</style>
</head>

<body>
<div class="wrapper">
  <div class="title">暗恋小纸条</div>
  <div class="text">
    <?php
	echo $contentStr;
?>
  </div>
</div>
</body>
</html>
