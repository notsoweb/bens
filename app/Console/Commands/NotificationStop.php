<?php namespace App\Console\Commands;
/**
 * @copyright Copyright (c) 2023 Notsoweb (https://notsoweb.com) - All rights reserved.
 */

use App\Events\GlobalNotification;
use Illuminate\Console\Command;

/**
 * Lanza notificaciones a usuarios en linea
 * 
 * La notificación es única y no persistente.
 * 
 * @author Moisés de Jesús Cortés Castellanos <ing.moisesdejesuscortesc@notsoweb.com>
 * 
 * @version 1.0.0
 */
class NotificationStop extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notification:stop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Detener servicio';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo shell_exec('pm2 stop ' . config('broadcasting.connections.pusher.key'));
        
        return Command::SUCCESS;
    }
}
