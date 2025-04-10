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
        <button class="btnTsak  w-100 mt-5">
          Add Task <span class="ms-1">➕</span>
        </button>
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
                    <button class="btn">Sign out ➔</button>
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
                    <input class="form-check-input me-2" type="checkbox" >
                    Buy monthly groceries
                </div>
                <div class="task-card d-flex align-items-center">
                    <input class="form-check-input me-2" type="checkbox" >
                    Pick up the kids
                </div>
    
                </form>
            </div>
          
        </div>


      </div>

    </div>
  </div>
</body>
</html>


