import java.util.Scanner;

public class examP1 {
    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);
        int[] price = { 10, 10, 35, 10, 10 };

        int finalPrice = 0;
        double discountedPrice = 0;

        System.out.println("Menu: "
                + "\nApple:10 "
                + "\n Peaches: 10"
                + "\n Pineapple: 35"
                + "\n Orange: 10"
                + "\n Lime: 10 ");
        do {
            int fruitPrice = 0;

            System.out.println(
                    "What do you like?"
                            + "\n A for Apple"
                            + "\n P for Peaches"
                            + "\n PA for Pineapple"
                            + "\n O for Orange "
                            + "\n L for Lime");
            String choice = input.next().toUpperCase();

            System.out.print("How many piece? ");
            int amount = input.nextInt();

            switch (choice) {
                case "A":
                    fruitPrice += price[0];
                    break;
                case "P":
                    fruitPrice += price[1];
                    break;
                case "PA":
                    fruitPrice += price[2];
                    break;
                case "O":
                    fruitPrice += price[3];
                    break;
                case "L":
                    fruitPrice += price[4];
                    break;
                default:
                    System.out.print("Invalid. ");
                    break;
            }

            finalPrice += amount * fruitPrice;

            System.out.print(" Would you like to have another order(Y/N): ");
        } while (input.next().equalsIgnoreCase("y"));

        if (finalPrice >= 500) {
            discountedPrice = finalPrice * 0.9;
            System.out.println("Total: " + finalPrice);
            System.out.println("Discounted total: " + discountedPrice);
        } else {
            System.out.println("Total: " + finalPrice);
        }
    }
}