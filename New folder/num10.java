
/*
    Write a program that enters an amount ranging from 1-999 then evaluates the possible PH bill of 500,
    200, 100, 50, and 20, or coins of 10, 5, and 1 that could comprise of the amount.
*/

import java.util.Scanner;

public class num10 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Enter amount value: ");
        int amount = input.nextInt();

        if (amount < 1 || amount > 999) {
            System.out.println("Invalid amount. Please enter a value between 1 and 999.");
        }

        int count500 = 0;
        int count200 = 0;
        int count100 = 0;
        int count50 = 0;
        int count20 = 0;
        int count10 = 0;
        int count5 = 0;
        int count1 = 0;

        int remainingAmount = amount;

        while (remainingAmount > 0) {
            switch (remainingAmount / 500) {
                case 1:
                    remainingAmount -= 500;
                    count500 += 1;
                    break;
            }
            switch (remainingAmount / 200) {
                case 1:
                    remainingAmount -= 200;
                    count200 += 1;
                    break;
            }
            switch (remainingAmount / 100) {
                case 1:
                    remainingAmount -= 100;
                    count100 += 1;
                    break;
            }
            switch (remainingAmount / 50) {
                case 1:
                    remainingAmount -= 50;
                    count50 += 1;
                    break;
            }
            switch (remainingAmount / 20) {
                case 1:
                    remainingAmount -= 20;
                    count20 += 1;
                    break;
            }
            switch (remainingAmount / 10) {
                case 1:
                    remainingAmount -= 10;
                    count10 += 1;
                    break;
            }
            switch (remainingAmount / 5) {
                case 1:
                    remainingAmount -= 5;
                    count5 += 1;
                    break;
            }
            if (remainingAmount >= 1) {
                count1 += remainingAmount;
                remainingAmount -= remainingAmount;
            }
            System.out.println("500 = " + count500);
            System.out.println("200 = " + count200);
            System.out.println("100 = " + count100);
            System.out.println("50 = " + count50);
            System.out.println("20 = " + count20);
            System.out.println("10 = " + count10);
            System.out.println("5 = " + count5);
            System.out.println("1 = " + count1);
            break;
        }
    }
}
