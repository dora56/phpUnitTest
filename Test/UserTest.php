<?PHP
//テスト対象のクラス定義を読み込み
require_once __DIR__ .'/../lib/User.php';


class UserTest extends PHPUnit_Framework_TestCase {

    public function testConstruct() {
	
	    $user =new User('佐藤');
		$this->assertEquals('佐藤', $user->name);
	}
	
	public function testCreateMassage() {
	
	    $user = User('河合');
		$test = $user->createMassage();
		$expected = 'こんにちは河合さん';
		$this->assertEquals($expected,$test);
	}
}