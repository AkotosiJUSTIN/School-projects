
/*
    Write a program that will accept a single-line arithmetic operation then display the result of its
    computation by using only one (1) scanner and maximum of 5 variables. (Sum, Difference, Product,
    Quotient, and Modulo)
*/

import java.util.Scanner;

public class num6 {
    public static void main(String[] args) {
        double sum, difference, product, quotient, modulo;

        Scanner scanner = new Scanner(System.in);

        System.out.print("Enter an operation: ");
        String input = scanner.nextLine();

        String[] parts = input.split("\\s+");
        double num1 = Double.parseDouble(parts[0]);
        String operator = parts[1];
        double num2 = Double.parseDouble(parts[2]);

        sum = num1 + num2;
        difference = num1 - num2;
        product = num1 * num2;

        if (num2 != 0) {
            quotient = num1 / num2;
            modulo = num1 % num2;

            switch (operator) {
                case "+":
                    System.out.println("SUM: " + sum);
                    break;
                case "-":
                    System.out.println("DIFFERENCE: " + difference);
                    break;
                case "*":
                    System.out.println("PRODUCT: " + product);
                    break;
                case "/":
                    System.out.println("QUOTIENT: " + quotient);
                    break;
                case "%":
                    System.out.println("MODULO: " + modulo);
                    break;
                default:
                    System.out.println("Invalid operator");
            }
        } else {
            System.out.println("Cannot divide by zero.");
        }
    }
}
