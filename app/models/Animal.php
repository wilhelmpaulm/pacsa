<?php

class Animal extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'name' => 'required'
	);
}