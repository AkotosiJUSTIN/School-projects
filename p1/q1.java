import java.util.*;

public class q1 {
    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);
        System.out.print("Enter your name: ");
        String name = input.nextLine();

        System.out.print("Enter your age: ");
        int age = input.nextInt();

        System.out.print("Enter your house number: ");
        int houseNumber = input.nextInt();

        System.out.print("Enter your barangay: ");
        String barangay = input.nextLine();

        System.out.print("Enter your municipality: ");
        String municipality = input.nextLine();

        System.out.print("Enter your province: ");
        String province = input.nextLine();

        System.out.print("Enter your birthdate(mm-dd-yyyy): ");
        String birthdate = input.nextLine();

        System.out.println("Im " + name + " and Im " + age + " years old live in " + houseNumber + ", " + barangay
                + ", " + municipality + ", " + province + " and my Birthdate is " + birthdate);
    }
}