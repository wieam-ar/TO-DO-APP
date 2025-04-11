<?php
include 'connection.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['username'], $_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql2="SELECT * FROM users WHERE username=:username && password =:password";
    $stmt2=$pdo->prepare($sql2);
    $stmt2->execute([':username' => $username , ':password' =>$password ]);

    if ($stmt2->rowCount() > 0) {
        $message = "Ce compte existe déjà. Veuillez vous connecter.";
    } else {
        $sql = "INSERT INTO users(username, password) VALUES (:username, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':username' => $username, ':password' => $password]);
        header("Location: dashboard.php");
        exit;
    }
   
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>dashbord</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 centrage" style="  display: flex; justify-content:center;">
        
                <div class="form-box" >
                <h1>To-Do App</h1>
                <p >Start orgnaizing your life day by day</p>
                <form  method="POST">
                        <?php if (!empty($message)): ?>
                    <div id="message" style="
                        background-color: #f8d7da;
                        color: #721c24;
                        padding: 10px;
                        border-radius: 5px;
                        font-size: 14px;
                        text-align: center;
                        margin-bottom: 15px;
                    ">
                        <?= $message ?>
                    </div>
                    <script>
                        setTimeout(() => {
                            const msg = document.getElementById('message');
                            if (msg) msg.style.display = 'none';
                        }, 5000);
                    </script>
                <?php endif; ?>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <button type="submit" class="btn btn-sign text-light">Sign up</button>
                </form>
                </div>
               
            </div>
        </div>
    </div>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</body>
</html>