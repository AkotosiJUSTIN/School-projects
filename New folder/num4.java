
/*
    Create a program that will accept a grade value then displays its corresponding numeric value.
    Legend:
    90 – 100 = A
    75 to below 90 = B
    50 to below 75 = C
    Below 50 = F
    Below 0 or above 100 = OUT OF RANGE
*/

import java.util.Scanner;

public class num4 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Enter Grade Value: ");
        double grade = input.nextDouble();

        if (grade >= 90 && grade <= 100) {
            System.out.println("Numeric Value: A");
        } else if (grade >= 75 && grade < 90) {
            System.out.println("Numeric Value: B");
        } else if (grade >= 50 && grade < 75) {
            System.out.println("Numeric Value: C");
        } else if (grade >= 1 && grade < 50) {
            System.out.println("Numeric Value: F");
        } else {
            System.out.println("OUT OF RANGE");
        }
    }
}