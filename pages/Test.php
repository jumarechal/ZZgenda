<?php
class ConnectionTest extends PHPUnit_Framework_TestCase{
    public function setUp(){
        require_once 'fonction.php';
        require_once 'lang.php';
    }

    public function testFile(){
      $ad = "ok" ;
      $this->assertTrue(1==1);
      $this->assertTrue(lecture(OpenFile('../assets/db/database.txt'),"jeflagel","coucou",$ad)==1 );
      $this->assertFalse(lecture(OpenFile('../assets/db/database.txt'),"jeflagel","aurevoir",$ad)==1 );
      $pass = "Test" ;
      $this->assertTrue(password_verify("$pass", Chiffrement($pass)));

    }

}
?>