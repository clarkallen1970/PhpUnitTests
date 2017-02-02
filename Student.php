<?php
   class Student {
      protected $fistname;
      protected $lastname;
      protected $credits;            

    public function __construct($firstname,$lastname,$credits){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->credits = $credits;
    }
  
	function getFirstName(){
        return $this->firstname;
    } 
    
	function getLastName(){
        return $this->lastname;
    }     
    
	function getCredits(){    
        return $this->credits;
    }    
       
	function setFirstname($firstname){
				$this->firstname = $firstname;
    }
     
	function setLastname($lastname){
				$this->lastname = $lastname;
	} 
		
	function setCredits($credits){
				$this->credits = $credits;
	} 		  
       
	function classStanding($credits){

        if ($credits < 30) {
            return "Freshman";
        } elseif ($credits < "60") {
            return "Sophomore";
        } elseif ($credits < "90") {
            return "Junior";            
        } else {
            return "Senior";
        }
	}        
       
   }
?>