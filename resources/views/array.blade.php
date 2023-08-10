<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 id="demo"></h1>
    {{-- // Define an array with string and number values --}}
    <script>
    let myArray = ["samosa", 50, "banana", 100, "pakora", 70];

        // Initialize a variable to keep track of the sum of numbers
        let total = 0;
        
        // Loop through the array, looking at every other element starting with the second one
        for (let i = 1; i < myArray.length; i += 2) {
          // Check if the current element is a number
          if (typeof myArray[i] === "number") {
            // Add the number to the running total
            total += myArray[i];
          }
        }
        console.log(total);
        // document.getElementByid('demo').innerHTML=total;
        document.getElementById("demo").innerHTML = total;
        </script>


/

</body>
</html>