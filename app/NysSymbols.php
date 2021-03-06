<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NysSymbols extends Model
{
    protected $table = 'nys_symbols';
    protected $primaryKey = 'symbol';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['symbol', 'name', 'exchange', 'currency'];
}
