<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <!-- buttons to add some functionality -->
        <form>
            <input type="button" onclick="mostrar()" value="mostrar musicas!">
            <input type="button" onclick="esconder()" value="esconder musicas!">
        </form>
        <!-- display -->
        <div id="resultado"></div>
        <script>
            // show php list, get it from HTTPRequest and display with javascript
            function mostrar(){
                var xmlHttp = new XMLHttpRequest();

                xmlHttp.open("GET", "lista.php", false);
                xmlHttp.send(null);

                var resultado = document.getElementById("resultado");
                resultado.innerHTML = xmlHttp.responseText;
            }

            //to hide the display, simply empty the div
            function esconder() {
                var resultado = document.getElementById("resultado");
                resultado.innerHTML = "";
            }
        </script>
    </body>
</html>
