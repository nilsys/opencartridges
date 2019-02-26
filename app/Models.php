<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'models';

    /**
     * Get the series for the manufacturer.
     */

    public function series()
    {
        return $this->belongsTo('App\Series');
    }
}
