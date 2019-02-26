<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'manufacturers';

    /**
     * Get the series for the manufacturer.
     */

    public function series()
    {
        return $this->hasMany('App\Series');
    }
}
