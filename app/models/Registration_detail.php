<?php

class Registration_detail extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'registration_no' => 'required',
		'name' => 'required',
		'email' => 'required'
	);
}