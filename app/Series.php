<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'series';

    /**
     * Get the manufacturer for the serie.
     */

    public function manufacturer()
    {
        return $this->belongsTo('App\Manufacturers');
    }

    /**
     * Get the models for the manufacturer series.
     */

    public function models()
    {
        return $this->hasMany('App\Models');
    }    
}
