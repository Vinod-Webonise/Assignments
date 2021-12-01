package DesignPatern2;

import java.util.Scanner;

public class MyClass {

	public static void main(String[] args) {
		PhoneFactory obj=new PhoneFactory();
		System.out.println(" 1 = Samsung , 2 = Nokia , 3 = i Phone , 4 = MI ");
		Scanner cd=new Scanner (System.in);
		int num=cd.nextInt();
		Phone phone=obj.getObj(num);
		phone.show();
	}

}
