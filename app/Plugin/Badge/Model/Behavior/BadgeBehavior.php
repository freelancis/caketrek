<?php
/**
* based on Taxonomyehavior
* @source http://www.grafikart.fr/tutoriels/cakephp/taxonomy-plugin-284 0:13:20
* 
* @author gasp
*/
class BadgeBehavior extends ModelBehavior{
	
	function setup($model,$options= array()){
		/**
		 * HBTM associations
		 *
		 * @var array
		 */
			$model->hasAndBelongsToMany['Badge'] = array(
				'associationForeignKey' => 'badge_id',
				'with' => 'Badge.BadgeObject',
				'foreignKey' => 'object_id',
				'joinTable' => 'badges_objects',
				'conditions' => 'object = "Tourist"',
				'fields' => '',
				'order' => ''
			);
	}
}

