import java.util.Scanner;

public class q4 {
    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        float[] grades = new float[3];

        float sum = 0;
        for (int i = 0; i < 3; i++) {
            System.out.print("Enter Grade for Subject " + (i + 1) + ": ");
            float grade = input.nextFloat();
            sum += grade;
            grades[i] = grade;
        }

        float average = sum / grades.length;

        if (average <= 50 && average >= 1) {
            System.out.println(average + "\n Result: Fail");
        } else if (average >= 51 && average <= 100) {
            System.out.println(average + "\n Result: Pass");
        } else {
            System.out.println(average + "\n Invalid");
        }

    }
}
