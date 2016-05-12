<?php
App::uses('AppModel', 'Model');
App::uses('CakeEmail', 'Network/Email');
/**
 * User Model
 *
 * @property Property $Property
 */
class User extends AppModel {

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Property' => array(
			'className' => 'Property',
			'foreignKey' => 'property_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function afterSave($created, $options = array()) {
		if($created) {
			$property = $this->Property->find('first', [
				'conditions' => [
					'slug' => $this->data[$this->alias]['game_slug']
				]
			]);

			if(!empty($property)) {
				$Email = new CakeEmail();
				$Email->from(array('bot@beta.sebb.dk' => 'Sebb beta testing'));
				$Email->to($property['Property']['email']);
				$Email->subject($property['Property']['name'] . ' has a new beta tester');
				$Email->send('Hi,

'.$this->data[$this->alias]['name'].' just signed up for '.$property['Property']['name'].' with email '.$this->data[$this->alias]['email'].'.

With regards,
Sebb beta testing
');				
			}


		}
	}
}
