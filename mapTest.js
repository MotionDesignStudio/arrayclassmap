/* 

Iterate over a list or array to build a new list or array, using map as the iterator passing the value(s) to a class for computation without instantiating the class.  This is a direct violation of Law of Demeter.  I did this as an experiment to type less code in JavaScript when I discovered how to use this => .

*/

var myNumbers = [
	10,
	20,
	30,
	40
];

var aNumList = [ 4, 9, 16, 25];


class doComputations {
	constructor ( myValue ) {
		this.myValue = myValue;
	}
	
	// Getter
	get addedValue () {
		return this.addValue();
	}
	
	addValue(){
		return this.myValue + this.myValue;
	}

}

console.log ( aNumList.map ( aNums => new doComputations ( aNums ).addedValue ) );

alert (  aNumList.map ( aNums => new doComputations ( aNums ).addedValue ) );
