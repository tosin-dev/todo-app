<?php
declare(strict_types=1);
namespace App\Models;

class Todo{
    public const STATUS_PENDING = "Pending";
    public const STATUS_COMPLETED =  "Completed";
    public const STATUS_IN_PROGRESS = "In progress";
    private int $id;
    private string $name;
    private string $status;
    private string $created_at;
    private string $updated_at;
    private ?string $completed_at = null;

    public function __construct(int $id, string $name, string $status, string $created_at, string $updated_at, ?string $completed_at = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->completed_at = $completed_at;
    }

    public function getId():int{
        return $this->id;
    }
    public function getName(): string{
        return $this->name;
    }

    public function getCreatedDate(): string{
        return $this->created_at;
    }

    public function getUpdate(): string{
        return $this->updated_at;
    }

    public function getCompletedDate(): ?string{
        return $this->completed_at;
    }
    public function getStatus(): string{
        return ucfirst(strtolower($this->status));
    }

    public function getBadgeType():string{
        $badgeType = "info";
        if ($this->getStatus()==Todo::STATUS_COMPLETED){
            $badgeType = 'success';
        }elseif ($this->getStatus()==Todo::STATUS_IN_PROGRESS){
            $badgeType = 'primary';
        } elseif($this->getStatus()==Todo::STATUS_PENDING) {
            $badgeType = 'warning';
        }
        return $badgeType;
    }
}
