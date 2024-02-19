<?php

include("./conexion.php");

?>

<!DOCTYPE html>
<html lang="ES">
<head>
	<title>INVENTARIO</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="https://cdn.jsdelivr.net/npm/dynamsoft-javascript-barcode@9.0.0/dist/dbr.js"></script>
</head>
<body>
	<div class="dce-video-container" id="videoContainer"></div>
	<div id="interactive" class="viewport"></div>
	<h1 id="title__main">INVENTARIO</h1>
	<div id="container__table">
		<table id="table">
			<thead>
				<tr>
					<th>id</th>
					<th>barras</th>
					<th>descripción</th>
					<th>cantidad</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>0</td>
					<td>203646621</td>
					<td>WINDA 174/65R14</td>
					<td>1587</td>
				</tr>
			</tbody>
		</table>
	</div>
	<script>
        Dynamsoft.DBR.BarcodeReader.license = "DLS2eyJoYW5kc2hha2VDb2RlIjoiMjAwMDAxLTE2NDk4Mjk3OTI2MzUiLCJvcmdhbml6YXRpb25JRCI6IjIwMDAwMSIsInNlc3Npb25QYXNzd29yZCI6IndTcGR6Vm05WDJrcEQ5YUoifQ==";
        let scanner = null;
        (async()=>{
            scanner = await Dynamsoft.DBR.BarcodeScanner.createInstance();
            scanner.onFrameRead = results => {console.log(results);};
            scanner.onUnduplicatedRead = (txt, result) => {};
            await scanner.show();
        })();
    </script>
    <script>
	    async function initBarcodeScanner() {
	        scanner = await Dynamsoft.DBR.BarcodeScanner.createInstance();
	        await scanner.setUIElement(document.getElementById('videoContainer'));
	    }
	</script>
	<script src="main.js"></script>
</body>
</html>
