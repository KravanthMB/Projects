<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Disasters</title>
    <style>
        h1 { text-align: center; }
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
            vertical-align: middle;
        }
        nav {
            background: #444;
            color: #fff;
            padding: 0.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav-buttons a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin-left: 10px;
            border-radius: 5px;
            border: 1px solid #fff;
        }
        .nav-buttons a:hover {
            background-color: rgba(255, 255, 255, 0.3);
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
        a:link {
            color: black;
            background-color: transparent;
            text-decoration: none;
        }
        a:hover {
            color: blue;
            background-color: transparent;
            text-decoration: underline;
        }
        a:active {
            color: red;
            background-color: transparent;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>World Disasters</h1>
    </header>
    <nav>
        <a href="index.php">
            <img src="home.jpg" width="40px" alt="HOME">
        </a>
        <div class="nav-buttons">
            <a href="signup.php">Signup</a>
            <a href="login.php">Login</a>
        </div>
    </nav>
    <div id="Disasters" class="section">
        <h1>Disasters</h1>
        <p>A Disaster is a serious problem that happens over a period of time and causes harm to people, things, economies, or the environment that the affected community or society cannot handle it on its own. In theory, natural disasters are those caused by natural hazards, whereas human-made disasters are those caused by human hazards. However, in modern times, the divide between natural, human-made or human-accelerated disasters is more and more difficult to draw. In fact, all disasters can be seen as human-made, due to human failure to introduce appropriate emergency management measures.</p>
    </div>
    <div id="Natural Disasters" class="section">
        <h1>Natural Disasters</h1>
        <p>A Natural Disaster is the highly harmful impact on a society or community following a natural hazard event. Examples of natural hazard events include floods, droughts, earthquakes, tropical cyclones, volcanic activity, wildfires. A natural disaster can cause loss of life or damage property, and typically leaves economic damage in its wake. The severity of the damage depends on the population's disaster preparedness and on the existing infrastructure. Scholars have been saying that the term natural disaster is unsuitable and should be abandoned. Instead, the simpler term disaster could be used, while also specifying the category (or type) of hazard. A disaster is a result of a natural or human-made hazard impacting a vulnerable community. It is the combination of the hazard along with exposure of a vulnerable society that results in a disaster.</p>
    </div>
    <div id="Man-made Disasters" class="section">
        <h1>Man-made Disasters</h1>
        <p>Man-made disasters are extreme hazardous events caused by human actions or neglect. They can be intentional or unintentional, resulting in significant loss of life and property.</p>
    </div>
    <footer>
        <div class="container">
            <p>&copy; WORLD DISASTERS. All rights reserved. Designed by GARRISON</p>
            <a href="#">Privacy Policy.</a>
            <a href="#">Terms of Service.</a>
        </div>
    </footer>
</body>
</html>
