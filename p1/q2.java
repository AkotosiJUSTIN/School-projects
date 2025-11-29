import java.util.Scanner;

public class q2 {
    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        System.out.print("Enter First Number: ");
        int firstNumber = input.nextInt();

        System.out.print("Enter First Second: ");
        int secondNumber = input.nextInt();

        int add = firstNumber + secondNumber;
        int subtract = firstNumber - secondNumber;
        int multiply = firstNumber * secondNumber;
        int divide = firstNumber / secondNumber;

        System.out.println("Addition: " + add);
        System.out.println("Subtraction: " + subtract);
        System.out.println("Multiplication: " + multiply);
        System.out.println("Division: " + divide);
    }
}
