<?php

class Registration extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'head_delegate' => 'required',
		'email' => 'required'
	);
}