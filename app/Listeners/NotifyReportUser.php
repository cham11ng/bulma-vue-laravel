<?php

namespace App\Listeners;

use App\Events\Reported;
use App\Notifications\ReportNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class NotifyReportUser
{
    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Reported  $event
     * @return void
     */
    public function handle(Reported $event)
    {
        Auth::user()->notify(
            new ReportNotification($event->report)
        );
    }
}
