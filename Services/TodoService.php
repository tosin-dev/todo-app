<?php
namespace App\Services;

include_once __DIR__ ."/../Models/Todo.php";
use PDO;
use PDOException;

use App\Models\Todo;

class TodoService
{
    private $conn;
    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function getTodos():array
    {
        $tasks = $this->getData("db");

        $todos=[];
        foreach($tasks as $task){
            $todoObject = new Todo($task["id"], $task["name"], $task["status"], $task["created_at"], $task["updated_at"], $task["completed_at"]);
            $todos[] = $todoObject;
        
        }
        return $todos;
    }

    private function getData(string $dataSource):array
    {
        if($dataSource=="php"){
            $tasks = include_once __DIR__ ."/../data.php";
        }elseif($dataSource=="json"){
            $json_data = file_get_contents(__DIR__."/../data.json");
            $tasks=json_decode($json_data, true);
        }elseif($dataSource=="csv"){
            $filestream = fopen(__DIR__."/../data.csv","r");
            $tasks=[];
            while ($taskIndexed = fgetcsv($filestream)){
                $task = [
                    "name" => $taskIndexed[0],
                    "status" => $taskIndexed[1],
                    "created_at" => $taskIndexed[2],
                    "updated_at" => $taskIndexed[3],
                    "completed_at" => $taskIndexed[4]
                ];
                $tasks[]=$task;
            };
        }elseif($dataSource=="db"){
            $sql = "SELECT id, name, status, created_at, updated_at, completed_at from todos";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $tasks;
    }
}



