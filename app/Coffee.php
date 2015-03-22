<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Coffee extends Model {

	protected $table = 'coffees';

    protected $fillable = ['size', 'win', 'prize', 'user_id'];

}
