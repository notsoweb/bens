<?php namespace App\Observers;

use App\Http\Traits\ReportAction;
use App\Models\User;

class UserObserver
{
    use ReportAction;

    /**
     * Objeto del evento
     */
    protected $event = 'users';
    
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $this->reportCreate($this->event, $user->fillableToArray(), __("{$this->event}.created", [
            'user' => $user->fullName
        ]));
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user nnnnnnnn
     * @return void
     */
    public function updated(User $user)
    {
        $changes = $user->getChanges();

        if(in_array('remember_token', array_keys($changes)) && count($changes) == 1) {
            return false;
        }

        $this->reportUpdate($this->event, $user->getContrastChanges(), __("{$this->event}.updated", [
            'user' => $user->fullName
        ]));
        
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        $this->reportDestroy($this->event, $user->fillableToArray(),  __("{$this->event}.deleted", [
            'user' => $user->fullName
        ]));
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        $this->reportUpdate($this->event, $user->fillableToArray(),  __("{$this->event}.restored", [
            'user' => $user->fullName
        ]));
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        $this->reportDestroy($this->event, $user->fillableToArray(),  __("{$this->event}.forceDeleted", [
            'user' => $user->fullName
        ]));
    }
}
