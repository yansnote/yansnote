<?php

namespace App\Listeners;

use App\Authors;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateAuthorByUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $model = new Authors();

        $model->pseudonym = $event->user->name;
        $model->slug = md5(microtime().rand());
        $model->users_id = $event->user->id;

        $model->save();

        dd('done!!');
    }
}
