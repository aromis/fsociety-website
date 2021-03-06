<?php

namespace Fsociety\Console;

use Fsociety\Console\Commands\ArgScreencap;
use Fsociety\Console\Commands\FetchEpisodeInformation;
use Fsociety\Console\Commands\UpdateArgLinks;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        FetchEpisodeInformation::class,
        ArgScreencap::class,
        UpdateArgLinks::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('fsociety:scrapeEpisodeInfo')->daily();
        $schedule->command('fsociety:updateArgLinks')->hourly();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
