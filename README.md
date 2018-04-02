# Queue worker plugin

OctoberCMS plugin that keeps queue jobs running using the cron scheduler. 

It schedules the following command:

``$schedule->command('queue:work')->everyMinute()->withoutOverlapping();``
