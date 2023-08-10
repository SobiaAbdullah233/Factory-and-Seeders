<!DOCTYPE html>
<html>
  <head>
    <title>JavaScript Array Example</title>
  </head>
  <body>
    <label for="item1">Item 1:</label>
    <input type="text" id="item1" />
    <br />
    <label for="item2">Item 2:</label>
    <input type="text" id="item2" />
    <br />
    <button onclick="addItem()">Add Item</button>
    <br />
    <div id="output"></div>
    <div id="output1"></div>
    <script>
      let items1 = [];
      let items2 = [];
      function addItem() {
        const item1 = document.getElementById("item1").value;
        const item2 = document.getElementById("item2").value;
         document.getElementById("item1").value="";
         document.getElementById("item2").value="";

        items1.push(item1);
        items2.push(item2);

        document.getElementById("output").innerHTML = "Product: " + items1;
        document.getElementById("output1").innerHTML = "Price: " + items2;
      }
    </script>
  </body>
</html>
