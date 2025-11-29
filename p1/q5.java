import java.util.Scanner;

public class q5 {
    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        System.out.print("Enter enter principle amount: ");
        float amount = input.nextFloat();

        System.out.print("Enter time in years: ");
        float time = input.nextFloat();

        System.out.print("Enter rate annually: ");
        float years = input.nextFloat();

        float interest = amount * time * years / 100;

        System.out.print("Simple interested calculate by program is : " + interest);
    }
}
