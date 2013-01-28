<?php

/**
 * Badge Model
 *
 */
class Badge extends AppModel{
	public $recursive = -1;
	public $hasMany = array('BadgeObject'=>array(
		'className' =>'Badge.BadgeObject',
		'dependant' => true
	));
}
