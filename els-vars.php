<?php defined("ROOT_DIR") or die;

$Config = new class {
	public function __get( $key ) {
		return $this->{$key} ?? null;
	}
};

$Config->sitename = 'Ucscode';