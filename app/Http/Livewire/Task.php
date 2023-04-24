<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Date;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class Task extends Component
{
    use WithPagination;

    public ?string $name = null;
    public ?string $short_description = null;
    public  $deadline = null;
    public string $filter = 'all';

    public function render()
    {
        if($this->filter === 'today')
        {
            return view('livewire.task', [
                'tasks' => \App\Models\Task::query()
                    ->when($this->filter === 'today', fn($query) => $query->where('deadline', Date::today()))
                    ->orderBy('deadline', 'desc')
                    ->paginate(10),
            ]);

        }

        if($this->filter === 'expired') {
            return view('livewire.task', [
                'tasks' => \App\Models\Task::query()
                    ->when($this->filter === 'expired', fn($query) => $query->where('deadline', '<=', Date::yesterday()))
                    ->orderBy('deadline', 'desc')
                    ->paginate(10),
            ]);
        }

        return view('livewire.task',[
            'tasks' => \App\Models\Task::query()->where('user_id', auth()->user()->id)->orderBy('deadline', 'desc')
                ->paginate(10),
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
            'deadline' => $this->deadline,
        ]);

        $this->name = null;
        $this->short_description = null;
        $this->deadline = null;
        $this->render();
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
