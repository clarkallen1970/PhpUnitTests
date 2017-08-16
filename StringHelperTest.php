<?php

class StringHelperTest extends PHPUnit\Framework\TestCase {
    
    public function test_is_valid_email_format($email){
        
         //we don't have an email class, so we can't create 
         //a new instance of it.
         //GJR $email= new email("john@msn.com");
        //GJR $this->assertEquals("john@msn.com", filter_var($this->$email, FILTER_VALIDATE_EMAIL));
        
        //should be
        $this->assertTrue("john@msn.com", StringHelper::is_valid_email_format("john@msn.com"));
        
         //GJR $email= new email("john2msn.com");
         //GJR $this->assertEquals("john2msn.com", filter_var($this->$email, FILTER_VALIDATE_EMAIL));
         
         //should be
         $this->assertFalse("john2msn.com", filter_var($this->$email, FILTER_VALIDATE_EMAIL));
    }    


        public function test_space_to_underscore($string) {
            $string = new string ("Hi     friends, my name is Jonas!");
            //GJR $this->assertContains(test_space_to_underscore($this->$string));
            
            //should be:
            $this->assertEquals("Hi________friends,_my_name_is_Jonas!", StringTest::test_space_to_underscore($this->$string));
        }
        
        
        public function test_get_current_day_by_name(){
            $date= new date("l");
            $this->assertNan($this->$date);
        }
};
        
        
     
      

       
        ?>