
/*
    Enter an alphabet then identify if it is vowel/consonant and uppercase/lowercase. Display INVALID if
    input is not an alphabet.
*/

import java.util.Scanner;

public class num8 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Enter an alphabet: ");
        char alphabet = input.next().charAt(0);

        if (Character.isLetter(alphabet)) {
            String type = "consonant";
            if ("aeiouAEIOU".contains(String.valueOf(alphabet))) {
                type = "vowel";
            }

            if (Character.isUpperCase(alphabet)) {
                System.out.println(type + "\n UPPERCASE");
            } else {
                System.out.println(type + "\n LOWERCASE");
            }

        } else {
            System.out.println("INVALID");
        }
    }

}
