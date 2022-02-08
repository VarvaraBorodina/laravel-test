<?php

namespace App\Console;

use App\Console\Commands\SendEmailCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
       // $schedule->command('command:email')->everyMinute();
    //    $schedule->command('command:email 1 --hello')->everyMinute();
        $schedule->command(SendEmailCommand::class, ['2', '--hello'])->dailyAt('23:34')->timezone('Europe/Minsk');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
