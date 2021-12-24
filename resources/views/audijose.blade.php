<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejemplo Campo de texto con reconocimiento de voz</title>
<style>
#page {
    width: 980px;
    margin: 0 auto;
}
#header {
    height: 100px;
	border:1px solid #CCCCCC;
	margin-bottom:10px;
	text-align:center;
}
#content {
    width: 100%;
    float: left;
}

#search_input {
    width: 80%;
    height: 40px;
    font-size: 16px;
    padding: 5px;
}

#footer {
    border: 1px solid #CCCCCC;
    float: left;
    height: 50px;
    margin-top: 10px;
    padding: 10px;
    width: 960px;
}
@media screen and (max-width: 980px) {

    #page { width: 100%; }
    #content { width: 100%; }
}

@media screen and (max-width: 700px) {

    #content, #footer {
        width: auto;
        float: none;
	height:auto;
    }
	
    #header h1 {
            font-size:small;
    }
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function() {
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es";
 
    $('#search_input').click(function(event) {
        recognition.start();
    });

    recognition.onresult = function (event) {
        finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#search_input').val(finalResult);
            }
        }
    };
});
</script>
</head>

<body>
<div id="page">
    <div id="header">
    	<h1>Ejemplo Campo de texto con reconocimiento de voz</h1>
    </div>
    <div id="content">
   	<div id="search2" class="open">
          
        
<input type="search" value="" id="search_input" placeholder="Escribe aquí..." />
           
        </div>
    </div>

</div>
</body>
</html>