<?php
/**
 * Insert GroupUser Task
 *
 * @copyright    copyright 2012 Passbolt.com
 * @license      http://www.passbolt.com/license
 * @package      app.plugins.DataExtras.Console.Command.Task.GroupUserTask
 * @since        version 2.12.11
 */

require_once(APP_DIR . DS  . 'Plugin' . DS . 'DataExtras' . DS . 'Console' . DS . 'Command' . DS . 'Task' . DS . 'ModelTask.php');

App::uses('User', 'Model');
App::uses('Group', 'Model');
App::uses('GroupUser', 'Model');

class GroupUserTask extends ModelTask {

	public $model = 'GroupUser';
	
	protected function getData() {
//		$GroupTask = $this->Tasks->load('Data.Group');
//		$groups = $GroupTask::getAlias();
//		$UserTask = $this->Tasks->load('Data.User');
//		$users = $UserTask::getAlias();
//
//		$gu[] = array('GroupUser' => array(
//			'id' => '53865f1f-230c-448b-b911-2173c0a895dc',
//			'group_id' => $groups['man'],
//			'user_id' => $users['dar'],
//			'created' => '2012-12-17 13:39:25', 'modified' => '2012-07-04 13:39:25', 'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c', 'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
//		));
//		$gu[] = array('GroupUser' => array(
//			'id' => '53865f1f-2adc-4aa6-8005-2173c0a895dc',
//			'group_id' => $groups['acc'],
//			'user_id' => $users['aur'],
//			'created' => '2012-12-17 13:39:25', 'modified' => '2012-07-04 13:39:25', 'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c', 'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
//		));
//		$gu[] = array('GroupUser' => array(
//			'id' => '53865f1f-2dfc-45f7-85c7-2173c0a895dc',
//			'group_id' => $groups['hr'],
//			'user_id' => $users['ism'],
//			'created' => '2012-12-17 13:39:25', 'modified' => '2012-07-04 13:39:25', 'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c', 'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
//		));
//		$gu[] = array('GroupUser' => array(
//			'id' => '53865f1f-311c-4535-8a72-2173c0a895dc',
//			'group_id' => $groups['hr'],
//			'user_id' => $users['myr'],
//			'created' => '2012-12-17 13:39:25', 'modified' => '2012-07-04 13:39:25', 'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c', 'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
//		));
//		$gu[] = array('GroupUser' => array(
//			'id' => '53865f1f-33d8-4206-a198-2173c0a895dc',
//			'group_id' => $groups['dev'],
//			'user_id' => $users['rem'],
//			'created' => '2012-12-17 13:39:25', 'modified' => '2012-07-04 13:39:25', 'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c', 'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
//		));
//		$gu[] = array('GroupUser' => array(
//			'id' => '53865f1f-3694-4552-b45b-2173c0a895dc',
//			'group_id' => $groups['dev'],
//			'user_id' => $users['kev'],
//			'created' => '2012-12-17 13:39:25', 'modified' => '2012-07-04 13:39:25', 'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c', 'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
//		));
//		$gu[] = array('GroupUser' => array(
//			'id' => '53865f1f-3950-46a7-bce2-2173c0a895dc',
//			'group_id' => $groups['dev'],
//			'user_id' => $users['ced'],
//			'created' => '2012-12-17 13:39:25', 'modified' => '2012-07-04 13:39:25', 'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c', 'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
//		));
//		$gu[] = array('GroupUser' => array(
//			'id' => '53865f1f-3c0c-47c8-a8e6-2173c0a895dc',
//			'group_id' => $groups['dtl'],
//			'user_id' => $users['rem'],
//			'created' => '2012-12-17 13:39:25', 'modified' => '2012-07-04 13:39:25', 'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c', 'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
//		));
//		$gu[] = array('GroupUser' => array(
//			'id' => '53865f1f-3ec8-4c41-b813-2173c0a895dc',
//			'group_id' => $groups['dru'],
//			'user_id' => $users['kev'],
//			'created' => '2012-12-17 13:39:25', 'modified' => '2012-07-04 13:39:25', 'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c', 'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
//		));
//		$gu[] = array('GroupUser' => array(
//			'id' => '53865f1f-4184-4b03-b78e-2173c0a895dc',
//			'group_id' => $groups['dru'],
//			'user_id' => $users['ced'],
//			'created' => '2012-12-17 13:39:25', 'modified' => '2012-07-04 13:39:25', 'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c', 'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
//		));
//		$gu[] = array('GroupUser' => array(
//			'id' => '53865fa5-0624-49d5-a802-204fc0a895dc',
//			'group_id' => $groups['cak'],
//			'user_id' => $users['rem'],
//			'created' => '2012-12-17 13:39:25', 'modified' => '2012-07-04 13:39:25', 'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c', 'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
//		));
//		$gu[] = array('GroupUser' => array(
//			'id' => '53865fa5-0624-49d5-a802-215fc0a895dc',
//			'group_id' => $groups['cpa'],
//			'user_id' => $users['au1'],
//			'created' => '2012-12-17 13:39:25', 'modified' => '2012-07-04 13:39:25', 'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c', 'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
//		));
//		$gu[] = array('GroupUser' => array(
//			'id' => '53865fa5-1178-4480-b80f-204fc0a895dc',
//			'group_id' => $groups['cak'],
//			'user_id' => $users['fra'],
//			'created' => '2012-12-17 13:39:25', 'modified' => '2012-07-04 13:39:25', 'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c', 'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
//		));
//		// $gu[] = array('GroupUser' => array(
//			// 'id' => 'bbd5a042-c5cd-11e1-a345-080027046c4c',
//			// 'group_id' => $groups['tlj'],
//			// 'user_id' => $users['ras'],
//			// 'created' => '2012-12-17 13:39:25', 'modified' => '2012-07-04 13:39:25', 'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c', 'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
//		// ));
//		// $gu[] = array('GroupUser' => array(
//			// 'id' => 'bbd5a042-c5cd-11e1-a345-080027046c4c',
//			// 'group_id' => $groups['tlj'],
//			// 'user_id' => $users['ala'],
//			// 'created' => '2012-12-17 13:39:25', 'modified' => '2012-07-04 13:39:25', 'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c', 'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
//		// ));
////		$gu[] = array('GroupUser' => array(
////			'id' => 'bbd5a042-c5cd-11e1-a345-080027046c4c',
////			'group_id' => $groups[''],
////			'user_id' => $users[''],
////			'created' => '2012-12-17 13:39:25', 'modified' => '2012-07-04 13:39:25', 'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c', 'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
////		));
		$gu = array();
		return $gu;
	}
}