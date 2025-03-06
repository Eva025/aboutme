<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>張綺庭簡介</title>
	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:blue; font-size:60px;}
		h2 {color:#33ff33; font-size:40px;}
	</style>

<script>
		function change1() {
  			document.getElementById("pic").src = "mountain.jpg";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h2text").innerText = "Chi-Ting Chang";
		}
	</script>

</head>
<body>
	<?php echo date("Y-m-d") ?>
	
	<table width="70%">
		<tr>
			<td>
				<img src="cliff.jpg" width="110%" id="pic" onmouseover="change1()" onmouseout="change2()"></img>
			</td>

			<td>
				<h1>張綺庭</h1>
				<h2 id="h2text">Chi-Ting Chang</h2>
			</td>
		</tr>
	</table>


<table width="70%" border="1">
		<tr>
			<td>

	個人網頁：<a href="https://csim.pu.edu.tw/" target="_blank">https://csim.pu.edu.tw/</a><br>
	FB：<a href="https://www.facebook.com/?locale=zh_TW" target="_blank">https://www.facebook.com/?locale=zh_TW</a><br>
	Tel: <a href="tel:0972080256">0972080256</a><br>
	E-Mail:<a href="mailto:94.05.25jj@gmail.com">94.05.25jj@gmail.com</a><br>
			</td>


			<td>
大象席地而坐電影配樂<br>
	<audio controls>
		<source src="elephant.mp3" type="audio/mP3">
	</audio><br>
			</td>


			<td>
	不要去臺灣<br>
	<iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
			</td>



		</tr>
	</table>

	<table>
		<tr>
			<td>
				<iframe width="350" height="430" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/0ee89fe6-83b6-42b0-8fdd-fa6ffa3e94d6"></iframe>

			</td>
		<tr>
    </table>


</body>
</html>