
/*
    Write a program that will accept a character then prompt if it is a VOWEL, if not, display NOT A
    VOWEL.
*/

import java.util.Scanner;

public class num3 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Enter a Character: ");
        char vowel = input.next().charAt(0);

        switch (Character.toLowerCase(vowel)) {
            case 'a':
            case 'e':
            case 'i':
            case 'o':
            case 'u':
                System.out.println("VOWEL");
                break;
            default:
                System.out.println("NOT A VOWEL");
        }
    }
}