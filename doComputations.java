import java.util.*;

public class doComputations {
		
	public static void main ( String[] args ){

		ArrayList<Integer> aNumList = new ArrayList<>( Arrays.asList ( 4, 9, 16, 25 ) ) ;
	
		// Send the ArrayList for proccessing
		System.out.printf ( "%s\n", addValue ( aNumList ) );
	}
	
	private static ArrayList<Integer> addValue ( ArrayList<Integer> myaNumList ){

		//  This list will store the added vakues
		ArrayList<Integer> aNumList2 = new ArrayList<Integer>() ;
		
		// Add to the list
		myaNumList.forEach ( ( item ) ->{
			final Integer temp = item;
			final Integer mySum = temp + temp;
			aNumList2.add ( mySum );
		});
		
		return aNumList2;

	}
	
}