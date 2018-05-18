# arrayclassmap

Iterate over a list or array to build a new list or array, using map as the iterator passing the value(s) to a class for computation without instantiating the class.  This is a direct violation of Law of Demeter.  I did this as an experiment to type less code in JavaScript when I discovered how to use this => .  This is replicated with multiple languages.


USAGE:

	JavaScript Example :
	
	Open mapTest.html in a browser to view the output of mapTest.js .  mapTest.js contains the script.
	
	Python Example :	
	
	# ./mapTest.py
	
	PHP Example :	
	
	install :

	# apt install php7.2-cli

	usage I :
	
	Remove the "#!/usr/bin/php7.2" at the top if you execute like below.
	# php -f mapTest.php 

	usage II :
	
	Make the file executable.
	# chmod 0755 mapTest.php
	
	Add this line without the quotes "#!/usr/bin/php7.2" it is called sha-bang, hashbang, pound-bang, or hash-pling to the first line of any php file you want to execute commandline like a bash script.  It must match the version of php installed.  You might have multiple.
	
	Exceute like this.
	
	# ./mapTest.php 
	
		
	Ruby Example :
	
	# ./mapTest.rb
	
	Java Example :
	
	-  Compile 
	# javac doComputations.java
	
	-  Run
	# java doComputations
	
	Perl Example :
	
	# ./mapTest.pl
