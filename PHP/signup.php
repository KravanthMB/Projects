<?php
$servername = "localhost"; 
$username = "csdb29";
$password = "csdb29"; 
$dbname = "csdb29";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM worlds WHERE email = ?");
    $stmt->bind_param("s", $email);
    $email = $_POST['email'];
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $message = "Email is already registered!";
    } else {
        $stmt = $conn->prepare("INSERT INTO worlds(name, email, password, repeatpassword) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $password, $repeatpassword);

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repeatpassword = $_POST['repeatpassword'];

        if ($stmt->execute()) {
            $message = "Signup successful!";
        } else {
            $message = "Signup failed!";
        }

        $stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - World Disasters</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  color: #fff;
  margin: 0;
  padding: 0;
  line-height: 1.6;
  background: #333;
  background-image: url('sakura.gif');
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: scroll;
}
* {box-sizing: border-box}

input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

.container {
  padding: 16px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
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
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1 class="mb-0">World Disasters</h1>
        </div>
    </header>
    <div class="imgcontainer">
        <img src="login.jpg" alt="Avatar" class="avatar">
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Sign Up</h2>
                <?php
                if (!empty($message)) {
                    echo "<div class='alert alert-info'>" . htmlspecialchars($message) . "</div>";
                }
                ?>
                <form method="post">
                    <div class="mb-3">
                      <label for="name" style="color:black">Name:</label>
                        <input type="text" class="form-control"  name="name" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                    <label for="email" style="color:black">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                    <label for="password" style="color:black" >Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                    <label for="repeatpassword" style="color:black">RepeatPassword:</label>
                        <input type="password" class="form-control" name="repeatpassword" placeholder="Repeat Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </form>
                <div class="text-center mt-3">
                    <a href="login.php" class="btn btn-warning">Already have an account? Login</a>
                </div>
                <div class="text-center mt-3">
                    <button onclick="window.location.href='index.php'" class="btn btn-info">Homepage</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white py-3 mt-5">
        <div class="container">
            <p class="mb-0">&copy; <?php echo date("Y"); ?> WORLD DISASTERS. All rights reserved. Designed by GARRISON.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
