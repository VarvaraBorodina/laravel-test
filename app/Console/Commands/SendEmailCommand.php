<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use PHPUnit\Exception;

class SendEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:email {userId} {text} {--H|hello}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $userId = $this->argument('userId');
        $user = User::find($userId);

        if ($user == null) {
            $this->error("User not found!");
        } else {
            $text = $this->argument('text');
            $hello = $this->option('hello');

            \Illuminate\Support\Facades\Mail::to($user->email)
                ->send(new \App\Mail\BingoMail($text, $user->name, $hello));
        }

        return Command::SUCCESS;
    }
}
