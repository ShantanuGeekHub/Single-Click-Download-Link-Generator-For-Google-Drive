<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://img-premium.flaticon.com/png/128/4063/premium/4063869.png?token=exp=1626790031~hmac=a5037c8f10af4cb80128fd818e6cf7e2">
    <title>Single Click Download</title>
</head>
<body>

    <h1 class="heading">Single Click Download Link Generator</h1>

    <span class="searchBox">
        <form action="index.php" method="POST">
        <input class="searchText" type="text" name="search" placeholder="Paste your drive link here">
        <br><input type="submit" id="searchButton"></form>
    </span>

    <?php
        $userInput = $_POST['search'];
        for($i=32; $i<=64; $i++){
            $key[] = $userInput[$i];
        }
        $link1 = "https://drive.google.com/uc?export=download&id=";
    ?>
    <!-- "Your one click download link : "+"<php echo $link1; for($k=0; $k<33; $k++){ echo $key[$k]; } ?>" -->
    
    <div class="link">
        <label for="" id="link1">Your one click download link : <?php echo $link1; for($k=0; $k<33; $k++){ echo $key[$k]; } ?></label>
    </div>


    

</body>
</html>