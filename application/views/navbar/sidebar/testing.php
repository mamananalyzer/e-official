<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/qrcode.js"></script>
</head>
<body>

<form onsubmit="generate();return false;">
    <input type="text" id="qr" name="qr">
    <button type="submit">Generate QR Code and Save</button>
</form>

<div id="qrResult" style="height: 100px;width: 100px"></div>

<script type="text/javascript">
    var qrcode = new QRCode(document.getElementById('qrResult'), {
        width: 180,
        height: 180
    });

    function generate() {
        var message = document.getElementById('qr');
        if (!message.value) {
            alert("Input a text");
            message.focus();
            return;
        }

        var qrData = message.value;

        // Use AJAX to send the QR code data to the CodeIgniter controller
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "<?php echo site_url('your_controller/save_qr_code'); ?>", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Handle the response from the server if needed
                console.log(xhr.responseText);
            }
        };

        // Send the QR code data as a parameter named 'qrData'
        xhr.send("qrData=" + encodeURIComponent(qrData));
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