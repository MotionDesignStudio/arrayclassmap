#!/usr/bin/env ruby

aNumList = Array.new ( [ 4, 9, 16, 25] )

# In ruby, all constants including class names must begin with a capital letter. myBaseClass would be interpreted as an undefined local variable. https://stackoverflow.com/questions/6486443/nameerror-in-ruby

class DoComputations
    
  def self.addValue ( myValue )
    myValue + myValue
  end
  
end

puts aNumList.map { | aNums | DoComputations.addValue( aNums )  }