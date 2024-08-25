<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold Calculator-Pae</title>
    <style>
body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 800px;
    background: linear-gradient(pink,rgb(156, 60, 156));
    font-family: Georgia, 'Times New Roman', Times, serif;
}
.cal-container {
    background:rgba(0,0,0,0.1);
    width:400px;
    padding: 25px;
    box-shadow: 10px 10px 30px 10px rgba(0,0,0,0.1);
    border-radius: 20px;
    backdrop-filter: blur(10px);
}

.back-button {
    position: absolute;
    top: 10px;
    left: 10px;
    padding: 10px;
    background-color: rgb(150, 37, 150);
    border: none;
    border-radius: 5px;
    color: white;
    font-size: medium;
    cursor: pointer;
    transition: background-color 0.2s ease-in;
    width: 10%;
}
.back-button:hover {
    background-color: rgb(130, 20, 130);
}

h1 {
    text-align: center;
    color: rgb(255, 255, 255);
}

label {
    display: block;
    color: rgb(255, 255, 255);
    font-weight: bold;
}

input  {
    width: 400px;
    padding: 10px;
    box-sizing: border-box;
    margin-top: 5px;
    border: none;
    border-radius: 10px;
    box-shadow: inset 5px 0 12px rgba(0,0,0,0.1) ;
    background-color: rgb(250, 242, 234);
    transform: perspective(600px) translateZ(2px);
    transition: transfrom 0.3s ease;
}

input:focus {
    outline: none;
    transform: perspective(600px) translateZ(8px);
}

button {
    width: 100%;
    padding: 15px;
    background-color:rgb(156, 60, 156);
    border-radius: 11px;
    color:whitesmoke ;
    margin-top: 25px;
    border: none;
    font-size: larger;
    transition: background-color 0.2s ease-in,transform 0.3s ease-out;
}

button:hover {
    background-color:rgb(150, 37, 150) ;
    transform: scale(1.05);
}

.result-container {
    margin-top: 30px;
    color: white;
}

.result-container h2 {
    text-align: center;
    color: white;
}

span {
    font-weight: bold;
    color: white;
}

@media(max-width: 800px) {
    .cal-container {
        width: 75%;
    }
}

@media(max-width:800px) {
    input {
        width:100%;
    }
}
    </style>
</head>
<body>
<?php
    $pae = null;   
    $sale_price = null;
    $current_price = null;
    $gold_price = 0;
    $hand_price = 0;
    $pae_to_gram =0;

    if (isset($_POST["pae"]) && isset($_POST["sale_price"]) && isset($_POST["current_price"])) {
        $pae = $_POST["pae"];
        $sale_price = $_POST["sale_price"];
        $current_price = $_POST["current_price"];

        $pae_to_gram = $pae * 1.0205;
        $pae_to_kyat_tharr = $pae / 16; 
        $gold_price = $pae_to_kyat_tharr * $current_price;
        $hand_price = $sale_price - $gold_price;
        
        $pae_to_gram = number_format($pae_to_gram,2);
        $gold_price = number_format($gold_price, 0);
        $hand_price = number_format($hand_price, 0);

    }
?>  
<a href="index.php" class="back-button">Back</a>
<div class="cal-container">
    <h1>Gold Calculator(Pae)</h1>
    <form action="pae.php" method="post">
        <div>
            <label for="weightInpae">
                Weight in pae
            </label>
            <input type="number" name="pae" id="weightInpae" value="<?php echo $pae; ?>" required>
        </div>
        <div>
            <label for="saleprice">
                Sale Price
            </label>
            <input type="number" name="sale_price" id="saleprice" value="<?php echo $sale_price; ?>" required>
        </div>
        <div>
            <label for="currentgoldprice">
                Current Gold Price
            </label>
            <input type="number" name="current_price" id="currentgoldprice" value="<?php echo $current_price; ?>" required>
        </div>
        <button type="submit">Calculate</button>
    </form>
    <div class="result-container">
        <h2>Results</h2>
        <p>‌‌ရွှေအလေးချိန် = <?php echo $pae_to_gram; ?>ဂရမ်</p>
        <p>ရွှေတန်ဖိုး = <?php echo $gold_price; ?> ကျပ်</p>
        <p>လက်ခ = <?php echo $hand_price; ?> ကျပ်</p>
    </div>
</div>
</body>
</html>