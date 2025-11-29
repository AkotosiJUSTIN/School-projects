
/*
Write a program that will for the SUM and AVERAGE of four numbers using only two (2) variables.
*/

import java.util.Scanner;

public class num1 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int sumCount = 0;
        System.out.print("Enter four numbers: ");
        for (int i = 0; i < 4; i++) {
            sumCount += input.nextInt();
        }

        double average = (double) sumCount / 4;

        System.out.println("TOTAL: " + sumCount);
        System.out.println("AVERAGE: " + average);
    }
}