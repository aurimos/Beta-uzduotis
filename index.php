<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>beta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container-fluid bg-1 text-center">
<span class="header">
  <h3 class="margin">Poilsis</h3>
  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, modi? Quae, perferendis. Vel minima eligendi minus ipsam praesentium? Odio eaque et minus, mollitia reprehenderit saepe architecto neque facilis, hic officia dolores accusamus non provident expedita ex sint, quidem vel vitae?</p>
</span>
</div>
<section>
<div class="sidenav">
    <button class="dropdown-btn">Miestas
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <?php
        $cities = $mysqli->query("SELECT * FROM cities");
        $cities = mysqli_fetch_all($cities, MYSQLI_ASSOC);
        foreach ($cities as $city) {?>
        <a href="index.php?city=<?php echo $city['city']; ?>"><?php echo $city['city']; ?></a>
        <?php }?>
    </div>
    <button class="dropdown-btn">Nakvynės trukmė
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <?php
        $stay_duration = $mysqli->query("SELECT * FROM stay_duration");
        $stay_duration = mysqli_fetch_all($stay_duration, MYSQLI_ASSOC);
        foreach ($stay_duration as $duration) {?>
            <a href="index.php?duration=<?php echo $duration['days']; ?>"><?php echo $duration['days']; ?></a>
        <?php }?>
    </div>
    <button class="dropdown-btn">Asmenų skaičius
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <?php
        $customer_count = $mysqli->query("SELECT * FROM customer_count");
        $customer_count = mysqli_fetch_all($customer_count, MYSQLI_ASSOC);
        foreach ($customer_count as $customer) {?>
            <a href="index.php?customer_count=<?php echo $customer['customer_count']; ?>"><?php echo $customer['customer_count']; ?></a>
        <?php }?>
    </div>
    <button class="dropdown-btn">Kaina
        <i class="fa fa-caret-down"></i>
    </button>
    <form action="index.php?nuo=<?php echo $_POST["nuo"] ?? null;?>&iki=<?php echo $_POST["iki"] ?? null;?>" method="post">
    <div class="form-group">
        <label style="color: black" for="nuo">Nuo:</label>
        <select class="form-control" id="nuo" name="nuo">
            <option>100</option>
            <option>150</option>
            <option>250</option>
            <option>350</option>
            <option>500</option>
        </select>
    </div>
    <div class="form-group">
        <label style="color: black" for="iki">Iki:</label>
        <select class="form-control" id="iki" name="iki">
            <option>150</option>
            <option>250</option>
            <option>350</option>
            <option>450</option>
            <option>550</option>
        </select>
    </div>
        <button style="color: black" type="submit">Pasirinkti</button>
    </form>
</div>
    <div class="offers">
        <?php foreach ($result as $res) { ?>
        <div class="offer">
            <img src="<?php echo $res['offer_image']; ?>" width="250px" height="150px">
            <div class="wrapper">
                <b><p class="offer_name"><?php echo $res['offer_name']; ?></p></b>
                <p class="location"><?php echo $res['offer_city']; ?></p>
                <div class="wrapper2">
                    <div class="price_wrapper">
                        <p><b>Kaina</b></p>
                        <p class="price"><?php echo $res['offer_price']; ?>Eur</p>
                    </div>
                    <div class="term_wrapper">
                        <ul>
                            <li>
                                Asmenų skaičius: <?php echo $res['customer_count']; ?>
                            </li>
                            <li>
                                Trukmė: <?php echo $res['stay_duration']; ?>
                            </li>
                            <li>
                                Galioja iki: <?php echo $res['validation_period']; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
