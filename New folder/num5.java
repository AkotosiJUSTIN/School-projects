
/*
    Write a program where the entered PESO value will be converted to a different monetary value based
    from the 
    Legend:
    1 Dollar = Php 44.52
    1 Yen = Php 0.437
    1 Peso = 0.084 Riyal
*/

import java.util.Scanner;

public class num5 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Enter PESO value: ");
        double pesoValue = input.nextDouble();

        System.out.println("\nMenu:");
        System.out.println("[A] Dollar");
        System.out.println("[B] Yen");
        System.out.println("[C] Rial");

        System.out.print("\nChoice: ");
        String choice = input.next().toUpperCase();

        switch (choice) {
            case "A":
                double USD_RATE = 44.52;
                double dollarValue = pesoValue / USD_RATE;
                System.out.println("Dollar Value: " + dollarValue);
                break;
            case "B":
                double JPY_RATE = 0.437;
                double yenValue = pesoValue / JPY_RATE;
                System.out.println("Yen Value: " + yenValue);
                break;
            case "C":
                double SAR_RATE = 0.084;
                double rialValue = pesoValue * SAR_RATE;
                System.out.println("Rial Value: " + rialValue);
                break;
            default:
                System.out.println("Invalid choice.");
        }
    }

}