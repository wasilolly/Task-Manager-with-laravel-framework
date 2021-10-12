<?php

namespace App\Models;

use App\Models\User;
use App\Models\Task;

trait TaskUserManager
{

    public function getAssignedUser()
    {
        $assignedUser = User::find($this->assigneduser_id);
        return $assignedUser->name;
    }

    public function getTaskCreatorUser()
    {
        $taskcreator =  User::find($this->taskcreator_id);
        return $taskcreator->name;
    }

    public function getTasksCreated()
    {
        $tasksCreated = Task::where('taskcreator_id', $this->id)->get();
        return $tasksCreated;
    }


    public function noOfTaskCreated()
    {
        return $this->getTasksCreated()->count();
    }

    public function getTasksAssigned()
    {
        $tasksAssigned = Task::where('assigneduser_id', $this->id);
        return $tasksAssigned;
    }

    public function noOfTaskAssigned()
    {
        return $this->getTasksAssigned()->count();
    }

    public function noOfTaskDue()
    {
        $due = Task::where('taskcreator_id', $this->id)
            ->where('completed', 0)
            ->orWhere('assigneduser_id', $this->id)
            ->count();
        return $due;
    }

    public function noOfTaskCompleted()
    {
        return $this->noOfTaskAssigned() + $this->noOfTaskCreated() - $this->noOfTaskDue();
    }
}
