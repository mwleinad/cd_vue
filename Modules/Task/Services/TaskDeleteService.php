<?php

namespace Modules\Task\Services;

use Modules\Task\Models\Task;
use Modules\Task\Repositories\Interfaces\TaskRepositoryInterface;

/**
 * Class TaskDeleteService
 * @package Modules\Task\Services
 */
class TaskDeleteService {
    /**
     * @var TaskRepositoryInterface
     */
    private $taskRepo;

    /**
     * TaskDeleteService constructor.
     * @param TaskRepositoryInterface $taskRepo
     */
    public function __construct(TaskRepositoryInterface $taskRepo) {
        $this->taskRepo = $taskRepo;
    }

    /**
     * @param array $data
     * @return Task|null
     */
    public function delete($id) : ?bool {
        return $this->taskRepo->deleteWhere("id","=",$id);
    }
}
