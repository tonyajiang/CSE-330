<!DOCTYPE HTML>
<head>
        <title>Calculator</title>
</head>
<body>
        <h1>Calculator</h1>
        <br/>
        <form name = "input" action = "htmlFormActionGet.php" method = "get">
         First number: <input type = "text" name = "num1"/>
         Second number: <input type = "text" name = "num2"/>
        <br/>
        <br/>
         <input type="radio" name="operation" value="add" id="addinput"/><label for = "addinput">Add</label>
         <input type="radio" name="operation" value="subtract" id="subtractinput"/><label for="subtractinput">Subtract</label>
         <input type="radio" name="operation" value="multiply" id="multiplyinput"/><label for="multiplyinput">Multiply</label>
         <input type="radio" name="operation" value="divide" id="divideinput"/><label for="divideinput">Divide</label>
        <br/>
        <br/>
         <input type="submit" value="Calculate"/>
        </form>

</body>
</html>
