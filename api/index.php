<?php
     if (isset($_GET['unit'])) {
        $unit = $_GET['unit'];
        if ($unit === 'gram') {
            header("Location:gram.php");
            exit;
        } else if ($unit === 'pae') {
            header("Location:pae.php");
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold Calculator - Home</title>
    <style>
body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(rgb(156, 60, 156), pink);
    font-family: Georgia, 'Times New Roman', Times, serif;
}
.home-container {
    text-align: center;
    padding: 20px;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    height:220px;
}
h1 {
    color: rgb(156, 60, 156);
}
.button {
    margin: 10px;
    padding: 15px 30px;
    background-color: rgb(156, 60, 156);
    color: white;
    border: none;
    border-radius: 10px;
    font-size: large;
    cursor: pointer;
    transition: background-color 0.2s ease-in,transform 0.3s ease-out;

}
.button:hover {
    background-color: rgb(130, 45, 130);
    transform: scale(1.05);
}        
    </style>
</head>
<body>
    <div class="home-container">
        <h1>Gold Calculator</h1>
        <p>Please choose the unit of measurement:</p>
        <form method="get" action="">
            <button class="button" name="unit" value="gram">Gram</button>
            <button class="button" name="unit" value="pae">Pae</button>
        </form>
    </div>


</body>
</html>