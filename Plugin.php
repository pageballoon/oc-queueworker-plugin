<?php namespace Nocio\QueueWorker;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerSchedule($schedule)
    {
       $schedule->command('queue:work --once')->everyMinute();
    }
}
