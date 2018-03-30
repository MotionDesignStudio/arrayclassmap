#!/usr/bin/php7.2
<?php 

/* 

Iterate over a list or array to build a new list or array, using map as the iterator passing the value(s) to a class for computation without instantiating the class.  This is a direct violation of Law of Demeter.  I did this as an experiment to type less code in JavaScript when I discovered how to use this => .

install :

# apt install php7.2-cli

usage I :
	Remove the "#!/usr/bin/php7.2" at the top if you run like below.
# php -f mapTest.php 

usage II :
	
	Make the file executable.
	# chmod 0755 mapTest.php
	
	Add this line without the quotes "#!/usr/bin/php7.2" it is called sha-bang, hashbang, pound-bang, or hash-pling to the first line of any php file you want to execute commandline like a bash script.  It must match the version of php installed.  You might have multiple.
	
	Exceute like this.
	# ./mapTest.php 

*/



class doComputations {
	
	/*Because static methods are callable without an instance of the object created, the pseudo-variable $this is not available inside the method declared as static. ~ http://php.net/manual/en/language.oop5.static.php */
	
	public static function addValue ( $inComingValue ){
		$myValue = $inComingValue;
		return $myValue + $myValue;
	}
}

$aNumList = array ( 4, 9, 16, 25 );

# This gives the same output minus the class call.
#print_r ( array_map ( function ($sv) { return $sv + $sv; } , $aNumList ) );

print_r ( array_map ( function ($aNums) { return doComputations::addValue( $aNums ); } , $aNumList ) );

?>



