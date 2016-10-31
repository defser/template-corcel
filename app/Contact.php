<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $table = 'contacts'; // add the table name contacts in our case

	// Fillable data in table : Use the column name in which data will be fillable
    protected $fillable = array('name', 'email', 'phone', 'message');
}
