<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Task extends Component
{
    use WithPagination;

    public ?string $name = null;
    public ?string $short_description = null;

    public function render()
    {
        return view('livewire.task',[
            'tasks' => \App\Models\Task::paginate(),
        ]);
    }

    public function create()
    {
        $this->validate([
            'name' => 'required',
            'short_description' => 'required',
        ]);

        \App\Models\Task::create([
            'name' => $this->name,
            'short_description' => $this->short_description,
            'user_id' => auth()->user()->id,
        ]);

        $this->name = null;
        $this->short_description = null;
    }

    public function delete($id)
    {
        \App\Models\Task::find($id)->delete();
        $this->emitSelf('taskDeleted');
    }
    public function setTaskStatus($id)
    {
        $task = \App\Models\Task::find($id);
        $task->status = $task->status + 1;
        $task->save();
    }
}
