<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="css/index.css">
</head>
<body>
    <h1>Learning Of Ajax</h1>
    <button id="btn">click to see</button>
    <p id="demo_1"></p>
    <h4> List of customers </h4>
    <select name='select' onchange="showCostumer(this.value)">
    <option value="">Select your country</option>
        <option value="Nepal">Nepal</option>
        <option value="India" >India</option>
        <option value="America" >America</option>
    </select>
    <div id="demo_2"></div>


<script src="js/index.js"></script> 
</body>
</html>