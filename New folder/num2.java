
/* Write a program that would compute the following output.
    Enter three numbers:
    4
    2
    9
    The sum of 4, 2, and 9 is: 15
*/

import java.util.Scanner;

public class num2 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Enter three numbers: ");

        int num1 = input.nextInt();
        int num2 = input.nextInt();
        int num3 = input.nextInt();

        int sum = num1 + num2 + num3;

        System.out.println("The sum of " + num1 + ", " + num2 + ", and " + num3 + " is: " + sum);

    }
}