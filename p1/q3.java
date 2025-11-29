import java.util.Scanner;

public class q3 {
    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        System.out.print("Enter your grade in English: ");
        int english = input.nextInt();

        System.out.print("Enter your grade in Math: ");
        int math = input.nextInt();

        System.out.print("Enter your grade in Science: ");
        int science = input.nextInt();

        int average = (english + math + science) / 3;

        if (average <= 50 && average >= 1) {
            System.out.println(average + "\n Result: Fail");
        } else if (average >= 51 && average <= 100) {
            System.out.println(average + "\n Result: Pass");
        } else {
            System.out.println(average + "\n Invalid");
        }
    }
}
