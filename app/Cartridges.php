<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartridges extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'cartridges';

    /**
     * Get the series for the manufacturer.
     */

    public function series()
    {
        return $this->hasMany('App\Series');
    }
}
