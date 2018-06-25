<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
   public static function GetCategory( $id_categoria)
    {
		return (Category::where('id', '=', $id_categoria )->get());
	}
}
