<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>its controller calling from route to view</h1>

    
    <div>
        <div>
            <h1>Add two number using text box as input using javascript</h1>
        </div>
            Enter First Number : <br>
            <input type="text" id="Text1" name="TextBox1">
            <br>
            Enter Second Number : <br>
            <input type="text" id="Text2" name="TextBox2">
            <br>
            Result : <br>
            <input type="text" id="txtresult" name="TextBox3">
            <br>
         <input type="button" name="clickbtn" value="Display Result" onclick="add_number()">

        <script type="text/javascript">
            function add_number(){
            var first_number = parseInt(document.getElementsById("Text1").value);
            var second_number = parseInt(document.getElementsById("Text2").value);
            var result = first_number + second_number;
            document.getElementById("txtresult").innerHTML ="sum "+ result;    
            }

            
        </script>
</body>
</html>