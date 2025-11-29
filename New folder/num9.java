
/*
    Write a program that accepts three integers then sort them in ascending and descending order. If all
    numbers are equal, display “EQUAL VALUES”.
*/

import java.util.Arrays;
import java.util.Scanner;

public class num9 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int[] numbers = new int[3];

        System.out.print("Enter three numbers: ");
        for (int i = 0; i < 3; i++) {
            numbers[i] = input.nextInt();
        }

        Arrays.sort(numbers);

        if (numbers[0] == numbers[2]) {
            System.out.println("EQUAL VALUES");
        } else {

            System.out.print("Ascending Order: ");
            for (int number : numbers) {
                System.out.print(number + " ");
            }
            System.out.println();

            System.out.print("Descending Order: ");
            for (int i = 2; i >= 0; i--) {
                System.out.print(numbers[i] + " ");
            }
            System.out.println();
        }
    }
}