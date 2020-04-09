<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script>
    function mostrarSugerido(str){
        
        if(str.lenght == 0){
            document.getElementById('output').innerHTML ='';

        } else{
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                
                    document.getElementById('output').innerHTML = this.responseText;

                }

            }
            xmlhttp.open("GET", "suggest.php?q="+str,true);
            xmlhttp.send();

        }


    }
    
    </script>
</head>
<body>
<div class="container">
<h1>Buscar Usuario</h1>
<form >
    Buscar Usuario: <input type="text" class="form-control" onkeyup="mostrarSugerido(this.value)">
</form>
<p>Sugerencias: <span id="output" style="font-weight:bold"></span></p>

</div>
    
</body>
</html>