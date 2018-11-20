package numbers;

/**
 * Show INFINITY and NaN
 * @author Ian F. Darwin, http://www.darwinsys.com/
 * @version $Id: InfNaN.java,v 1.5 2004/09/08 20:12:46 ian Exp $
 */
public class InfNaN {
	//+
	public static void main(String[] argv) {
		double d = 123;
		double e = 0;
		if (d/e == Double.POSITIVE_INFINITY)
			System.out.println("Check for POSITIVE_INFINITY works");
		double s = Math.sqrt(-1);
		if (s == Double.NaN)
			System.out.println("Comparison with NaN incorrectly returns true");
		if (Double.isNaN(s))
			System.out.println("Double.isNaN() correctly returns true");
	}
	//-
}