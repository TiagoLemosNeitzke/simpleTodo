<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendTaskNotificationToDoToday extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a notification to the user to remind them of the task they have to do today.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Sending notification to users...');

        \App\Models\User::query()
            ->whereHas('tasks', fn($query) => $query->where('deadline', \Illuminate\Support\Facades\Date::today()))
            ->each(fn($user) => $user->notify(new \App\Notifications\TaskNotification()));

        $this->info('All done!');
    }
}
