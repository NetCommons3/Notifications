<?php
/**
 * Notification::ping()のテスト
 *
 * @property Notification $Notification
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsModelTestCase', 'NetCommons.TestSuite');

/**
 * Notification::ping()のテスト
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Notifications\Test\Case\Model
 */
class NotificationPingTest extends NetCommonsModelTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.notifications.notification',
	);

/**
 * Plugin name
 *
 * @var array
 */
	public $plugin = 'notifications';

/**
 * Model name
 *
 * @var array
 */
	protected $_modelName = 'Notification';

/**
 * Method name
 *
 * @var array
 */
	protected $_methodName = 'ping';

/**
 * Notification::NOTIFICATION_PING_URL(www.netcommons.org)によるテスト
 *
 * @return void
 */
	public function testPing() {
		$model = $this->_modelName;
		$method = $this->_methodName;

		//テスト実行
		$result = $this->$model->$method();

		//チェック
		$this->assertTrue($result);
	}

/**
 * 接続先がない場合のテスト
 *
 * @return void
 */
	public function testPingFailure() {
		$model = $this->_modelName;
		$method = $this->_methodName;

		//テスト実行
		$result = $this->$model->$method('localhost2');

		//チェック
		$this->assertFalse($result);
	}

}
