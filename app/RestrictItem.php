<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class RestrictItem extends Model
{
    //
    protected $fillable = ['url','user_id','status'];

    public static function havetoRemove($str){

    	$results = RestrictItem::where('status','=', '1')->get();

    	foreach($results as $result){
    	 	if (strpos($str, $result->url) !== false) {
                 return true;
            }
    	}
    	return false;
    }

    public function getuser(){
        $this->belongsTo(User::class);
    }
}
