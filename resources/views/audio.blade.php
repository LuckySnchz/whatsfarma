<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="example.css">
<title>La API de Reconocimiento de Voz en JavaScript: speechRecognition()</title>
<style>
button {
	color: #ffffff;
	background-color: #007fff;
	border-color: #007fff;
	display: block;
	margin: 0 auto;
	font-weight: normal;
	text-align: center;
	vertical-align: middle;
	cursor: pointer;
	background-image: none;
	border: 1px solid transparent;
	white-space: nowrap;
	padding: 10px 18px;
	font-size: 15px;
	line-height: 1.42857143;
	border-radius: 0;
}

textarea {
	display: block;
	margin: 10px;
	border: 1px solid #CCC;
	padding: 10px;
	width: 100%;
	min-height: 150px;
}
</style>
</head>
<body>
	<header>
		<h1>La API de Reconocimiento de Voz en JavaScript: speechRecognition()</h1>
	</header>
	<section>
		<div class="example">
			<textarea id="texto"></textarea>
			<button onclick="procesar()" id="procesar">Escuchar</button>
		</div>
	</section>
</body>
<script type="text/javascript">

	var recognition;
	var recognizing = false;
	if (!('webkitSpeechRecognition' in window)) {
		alert("¡API no soportada!");
	} else {

		recognition = new webkitSpeechRecognition();
		recognition.lang = "es-VE";
		recognition.continuous = true;
		recognition.interimResults = true;

		recognition.onstart = function() {
			recognizing = true;
			console.log("empezando a eschucar");
		}
		recognition.onresult = function(event) {

		 for (var i = event.resultIndex; i < event.results.length; i++) {
			if(event.results[i].isFinal)
				document.getElementById("texto").value += event.results[i][0].transcript;
		    }
			
			//texto
		}
		recognition.onerror = function(event) {
		}
		recognition.onend = function() {
			recognizing = false;
			document.getElementById("procesar").innerHTML = "Escuchar";
			console.log("terminó de eschucar, llegó a su fin");

		}

	}

	function procesar() {

		if (recognizing == false) {
			recognition.start();
			recognizing = true;
			document.getElementById("procesar").innerHTML = "Detener";
		} else {
			recognition.stop();
			recognizing = false;
			document.getElementById("procesar").innerHTML = "Escuchar";
		}
	}
</script>
</html>
