<?php


CLASS StudentTest extends PHPUnit\Framework\TestCase {
    
    public function testGetFirtstName () {
        
        $s = new Student("John", "Doe", 5);
        $this->assertEquals("John", $s->getFirstName());
        $this->assertNotEquals("Doe", $s->getFirstName());
        $this->assertNotEquals(5, $s->getFirstName());
    }
    
    public function testSetGetFirstName() {
        $s = new Student("John", "Doe", 5);
        $this->assertEquals("John", $s->getFirstName());
        $s->setFirstname("Bobby");
        $this->assertEquals("Bobby", $s->getFirstName());
        $this->assertNotEquals("John", $s->getFirstName());
    }
    
    public function testCredits() {
        $s = new Student("John", "Doe", 5);
        $this->assertEquals(5, $s->getCredits());
        $s->setCredits(20);
        $this->assertEquals(20, $s->getCredits(20));
        $this->assertNotEquals(5, $s->getCredits(5));
        $this->assertEquals("Freshman", $s->classStanding($s->getCredits()));
        $s->setCredits(59);
        $this->assertEquals("Sophomore", $s->classStanding($s->getCredits()));
        $s->setCredits(89);
        $this->assertEquals("Junior", $s->classStanding($s->getCredits()));
        $s->setCredits(100);
        $this->assertEquals("Senior", $s->classStanding($s->getCredits()));
}   


}

?>