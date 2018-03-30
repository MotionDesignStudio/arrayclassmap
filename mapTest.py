#!/usr/bin/env python3

"""

Iterate over a list or array to build a new list or array, using map as the iterator passing the value(s) to a class for computation without instantiating the class.  This is a direct violation of Law of Demeter.  I did this as an experiment to type less code in JavaScript when I discovered how to use this => .

"""

aNumList = [ 4, 9, 16, 25];

class doComputations ():
	
	def __init__ ( self, myValue ):
		self.myValue = myValue
		
	def addValue (self):
		return self.myValue + self.myValue 
		
	
print ( list ( map ( ( lambda aNums: doComputations ( aNums ).addValue ()  ) , aNumList) ) )