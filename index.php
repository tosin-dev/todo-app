<?php
include_once __DIR__ ."/Services/TodoService.php";
$conn = include_once __DIR__ ."/db.php";


use App\Services\TodoService;

$todoService = new TodoService($conn);
$todos= $todoService->getTodos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container">
    <h2 class="mb-3">To-Do List</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Task Name</th>
                    <th>Status</th>
                    <th>Date Created</th>
                    <th>Date Completed</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($todos as $todo) { 
                        $badgeType = $todo->getBadgeType();
                        echo "<tr>
                            <td>".$todo->getName()."</td>  
                            <td><span class='badge bg-". $badgeType."'>".$todo->getStatus()."</span></td>
                            <td>".$todo->getCreatedDate()."</td>
                            <td>".$todo->getCompletedDate()."</td>
                        </tr>";
                    }
                ?>
            </tbody>   
        </table>
    </div>
</body>
</html>