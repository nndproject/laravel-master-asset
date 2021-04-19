<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ScheduleMeeting extends Model
{

    use Notifiable;
    // protected $connection   = 'mysql';
    protected $table        = 'schedule_meeting';
    /* protected $primaryKey   = 'kode_alat';
    protected $keyType      = 'string'; 

    public $incrementing = false;
    public $timestamps = false; */

    protected $fillable = [
    	'type_instansi',
    	'instansi',
        'cp',
        'phone',
        'category',
        'schedule',
        'location',
        'audient',
        'description',
        'post_by'
    ];

    /* public function routeNotificationForTelegram()
    {
        return '-321143573';
    } */
 
}
