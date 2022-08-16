<?php 

$Config = new class {
	public function __get( $key ) {
		return $this->{$key} ?? null;
	}
};

$Config->sitename = 'Ucscode';