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
				'className'  => 'Badge.Badge',
				'associationForeignKey' => 'badge_id',
				'with'       => 'Badge.BadgeObject',
				'foreignKey' => 'object_id',
				'joinTable'  => 'badges_objects',
				'conditions' => 'object = "Tourist"',
				'fields' => '',
				'order' => ''
			);
	}
	public function afterSave($model){

		$model->clearBadges();
		$model->addBadges();
		
	}
	
	public function afterFind($model, $data){
		$data[0][$model->name]['badge_plugin'] = "afterFind is active";
		foreach ($data as $key => $value) {
			if(!empty($value['Badge']))
				$data[$key][$model->name]['badges'] = 
					Set::Combine($value['Badge'],'{n}.id','{n}.id');
					
		}
		return $data;

	}
	
	/**
	 * clearBadges
	 * clear all badges
	 *
	 * @param Model
	 * @return void
	 * @author gasp
	 */
	public function clearBadges($model){
		$model->Badge->BadgeObject->deleteAll(array(
			'object'    => $model->name,
			'object_id' => $model->id
		));
	}
	
	/**
	 * addBadges
	 * add Badges
	 *
	 * @param Model
	 * @return void
	 * @author gasp
	 */
	public function addBadges($model){
		$object_name = $model->name; // i.e. 'Tourist'
		if(isset($model->data[$object_name]['badges'])){
			
			$badges = $model->data[$object_name]['badges'];
			foreach ($badges as $badge_id) {
				$model->Badge->BadgeObject->create();
				$model->Badge->BadgeObject->save(array(
					'badge_id'  => $badge_id,
					'object_id' => $model->id,
					'object'    => $object_name
				));
			}
		}
	}
	
}

