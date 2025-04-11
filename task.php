<?php
include 'connection.php';
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['title'] , $_POST['description'],$_POST['save'])){
    $description=$_POST['description'];
    $title=$_POST['title'];
    $save=$_POST['save'];

if(isset($_POST['save'])){

    $sql3="INSERT INTO task (title,description) VALUES(:title,:description)";
    $stmt3=$pdo->prepare($sql3);
    $stmt3->execute(["title" => $title , "description"=>$description]);
    header("Location : task.php");

}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="completed.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>dashbord</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">

</head>

<body>
  <div class="container-fluid">
    <div class="row">
      
      <!-- Sidebar -->
      <div class="col-md-2 sidebar">
        <h4  style="color:#BA5112;">To-Do App</h4>
        <button class="btnTsak w-100 mt-5" data-bs-toggle="modal" data-bs-target="#task">
        Add Task <span class="ms-1">➕</span>
        </button>

                <div class="modal fade" id="task" tabindex="-1" aria-labelledby="todoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow">
                <div class="modal-body">
                <form action="" method="post">
                <input type="text" class="form-control mb-3" id="title" placeholder="Add title">
                <textarea class="form-control mb-4" rows="3" id="description" placeholder="Add description"></textarea>
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-cancel"  data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-save" type="submit">Save</button>
                </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        <nav class="nav flex-column mt-5">
        <a class="nav-link active" href="dashboard.php">Dashboard</a>
          <a class="nav-link" href="active.php">Active</a>
          <a class="nav-link" href="completed.php">Completed</a>
        </nav>
      </div>

      <!-- Main Content -->
      <div class="col-md-10 p-3">
            <div class="dashbord d-flex justify-content-between ">
                <h2>Completed Tasks</h2>
                <div class="text-end">
                    <a href="signup.php" class="btn button ">Sign out ➔</a>
                </div>
            </div>
        <!-- Tasks Section -->
        <div class="d-flex justify-content-between align-items-center mb-2">
          <h5 class="mt-3">Today's Completed Tasks</h5>
          <div>
            <small class="text-muted">Monday, 18 December 2023</small>
          </div>
        </div>
        

        <!-- Task List -->
        <div class="mb-4 tara ">
            <div class="glob2">
                <form action="" method="post">
                    <div class="task-card d-flex align-items-center">
                    <input class="form-check-input me-2" type="checkbox" name="task2" id="tasks">
                    <label for="task2"><?= htmlspecialchars($title) ?></label>
                    
                </div>
                <div class="task-card d-flex align-items-center">
                    <input class="form-check-input me-2" type="checkbox" >
                   
                </div>
    
                </form>
            </div>
          
        </div>


      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


