#!/opt/rakudo-pkg/bin/perl6

my @aNumlist = <4 9 16 25>;

class DoComputations {
	method addValue( Int $myValue ) {
		return $myValue + $myValue;
	}
}

my @newArray = @aNumlist.map( { DoComputations.addValue( $_ ) });

say @newArray;
