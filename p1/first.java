import java.util.Scanner;

public class first {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        // Menu items and prices
        String[] items = { "Apple", "Peaches", "Pineapple", "Orange", "Lime" };
        int[] prices = { 10, 10, 35, 10, 10 };

        char choice;
        int quantity;
        int total = 0;

        while (true) {
            // Display menu
            System.out.println("Menu:");
            for (int i = 0; i < items.length; i++) {
                System.out.println(items[i] + ": " + prices[i]);
            }

            // Get user input
            System.out.print("What do you like?\n" +
                    "A for Apple\n" +
                    "P for Peaches\n" +
                    "PA for Pineapple\n" +
                    "O for Orange\n" +
                    "L for Lime\n" +
                    "Enter Selection: ");
            String itemCode = scanner.next().toUpperCase();

            // Check if the entered code is valid
            int index = -1;
            for (int i = 0; i < items.length; i++) {
                if (itemCode.equals(items[i]) || itemCode.equals(items[i].substring(0, 1))) {
                    index = i;
                    break;
                }
            }

            if (index == -1) {
                System.out.println("Invalid selection. Please try again.");
                continue;
            }

            // Get quantity
            System.out.print("How many Pieces: ");
            quantity = scanner.nextInt();

            // Calculate total for the current order
            total += prices[index] * quantity;

            // Ask if the user wants another order
            System.out.print("Would you like to have another order? (Y/N) ");
            choice = scanner.next().toUpperCase().charAt(0);

            if (choice != 'Y') {
                break;
            }
        }

        // Check if the total qualifies for a discount
        double discountedTotal = total;
        if (total >= 500) {
            double discount = total * 0.10;
            discountedTotal = total - discount;
            System.out.println("Congratulations! You qualify for a 10% discount.");
        }

        // Display the total and discounted total
        System.out.println("Total: " + total);
        System.out.println("Discounted Total: " + discountedTotal);

        // Close the scanner
        scanner.close();
    }
}
