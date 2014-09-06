<?php

class Book extends Eloquent {
	
	public function user(){
		return $this->belongsTo('User');
	}
}