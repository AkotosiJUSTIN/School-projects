
/*
    Write a program that will accept 10 letters then count the number of UPPERCASE and lowercase letters.
*/

import java.util.Scanner;

public class num7 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int uppercaseCount = 0;
        int lowercaseCount = 0;

        char[] letters = new char[10];

        System.out.print("Enter 10 letters: ");
        for (int i = 0; i < 10; i++) {
            letters[i] = input.next().charAt(0);
        }

        for (char currentChar : letters) {
            if (Character.isUpperCase(currentChar)) {
                uppercaseCount++;
            } else if (Character.isLowerCase(currentChar)) {
                lowercaseCount++;
            }
        }

        System.out.println("UPPERCASE: " + uppercaseCount);
        System.out.println("LOWERCASE: " + lowercaseCount);

    }
}
