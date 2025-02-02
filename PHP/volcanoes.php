<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>World Disasters</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background: #333;
            background-image: url('twinklegif.gif');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: scroll;
        }
        header {
            background: #333;
            background-image: url('earthgif.gif');
            line-height: 3;
            background-size: cover;
            background-repeat: no-repeat;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }
        img {
            display: block;
            text-align: left;
        }
        nav {
            background: #444;
            color: #fff;
            padding: 0.5rem 0;
            text-align: left;
        }
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
}
        .dropdown {
            display: inline-block;
            position: relative;
        }
        .dropdown .dropbtn {
            background-color: #444;
            color: white;
            padding: 14px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .container {
            padding: 1rem;
        }
        .section {
            margin: 2rem 0;
        }
        footer {
            background: #444;
            padding: 0.5rem 0;
            color: #fff;
            text-align: center;
            left: 0;
            bottom: 0;
            height: 100px;
            width: 100%;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <header>
        <h1>World Disasters</h1>
    </header>
    <nav>
        <a href="index.php">
        <img src="home.jpg" width="40px" alt="HOME" class="center">
        </a>
        <div class="dropdown">
            <button class="dropbtn">Disasters</button>
            <div class="dropdown-content">
            <a href="earthquakes.php">Earthquakes</a>
                <a href="tsunamis.php">Tsunamis</a>
                <a href="volcanoes.php">Volcanoes</a>
                <a href="hurricanes.php">Hurricanes</a>
                <a href="whirlpools.php">Whirlpools</a>
                <a href="landslides.php">Landslides</a>
                <a href="avalanches.php">Avalanches</a>
                <a href="droughts.php">Droughts</a>
                <a href="floods.php">Floods</a>
                <a href="thunderstorms.php">Thunderstorms</a>
                <a href="tornadoes.php">Tornadoes</a>
                <a href="blizzards.php">Blizzards</a>
                <a href="wildfires.php">Wildfires</a>
            </div>
        </div>
    </nav>
    <div id="volcanoes" class="section">
        <h1>Volcanoes</h1>
        <p>A volcano is a rupture in the crust of a planetary-mass object, such as Earth, that allows hot lava, volcanic ash, and gases to escape from a magma chamber below the surface.On Earth, volcanoes are most often found where tectonic plates are diverging or converging, and because most of Earth's plate boundaries are underwater, most volcanoes are found underwater.</p>
    </div><img src="volcanoes.gif" alt="volcanoes" class="center">

    <div class="container mt-4">
        <h1>Records</h1>
        <p>The table give intel about certain events:</p>            
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Death toll</th>
              <th>Event</th>
              <th>Location</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>4,000</td>
              <td>Iran blizzard</td>
              <td>Iran</td>
              <td>1972</td>
            </tr>
            <tr>
              <td>3,000</td>
              <td>Carolean Death March</td>
              <td>Sweden</td>
              <td>1719</td>
            </tr>
            <tr>
              <td>926</td>
              <td>Afghanistan blizzard</td>
              <td>Afghanistan</td>
              <td>2008</td>
            </tr>
          </tbody>
        </table>
    </div>
    
    <footer>
        <div class="container">
            <p>&copy;WORLD DISASTERS. All rights reserved. Designed by GARRISON</p>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
        </div>
    </footer>
</body>
</html>
