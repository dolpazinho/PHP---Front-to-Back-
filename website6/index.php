
<!Doctype html>
<html>
<head>
    <title> PHP & Ajax</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
    <script>
        function showSuggestion(str){
            if (str.length == 0){
                document.getElementById('output').innerHTML = '';
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function (){
                    if (this.readystate == 4 && this.status == 200){
                        document.getElementById('output').innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "suggest.php?q="+str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php" >Search / users Suggestions</a>
        </div>
    </div>
</nav>
<div class="container">
    <form>
        Search Users: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
    </form>
    <p>Suggestions: <span id="output" style="font-weight: bold"></span></p>
</div>

</body>
</html>