<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/qrcode.js"></script>
</head>
<body>

<form onsubmit="generate();return false;">
	<input type="text" id="qr" name="">
</form>

<div id="qrResult" style="height: 100px;width: 100px">
	
</div>

<script type="text/javascript">
	var qrcode=new QRCode(document.getElementById('qrResult'),{
		width:500,
		height:500
	});

function generate(){
	var message=document.getElementById('qr');
	if(!message.value){
		alert("Input a text");
		message.focus();
		return;
	}

	qrcode.makeCode(message.value);
}

</script>

<br>
<br>
<br>
<br>


<input type="file" id="file" name="file">

<p>Qr Content: <span id="content"></span></p>



<!--To Read QR Code-->
<script type="text/javascript" src="js/qrReader.js"></script>

</body>
</html>