package DesignPatern2;

import java.util.Scanner;

public class Nokia_Phone implements Phone {
	Features fa= Features.getObj();
	Scanner sc=new Scanner (System.in);
	public void show ()
	{
	System.out.println(" welcome in Nokia mobile  ");
	System.out.println(" this is Single sim mobile ");
	System.out.println("enter simNmae to add sim");
	String[] sim = new String[1];
	for (int i = 0; i < sim.length; i++) {
		sim[i] = sc.nextLine();
	}
	String[] Nokiaapp = { "java", "pdfConvertor", "GooglMeet", "AoudioPlayer", "MoviePlayer" };
	System.out.println(" press 1 for install app from  Nokia Store , 2 for update app");
	System.out.println(" 3 for MMS , 4 for Calling , 5 for SMS , 6 for online Payment ");
	int opt2 = sc.nextInt();
	sc.nextLine();
	if (opt2 == 1) {
		fa.installApp(Nokiaapp);
	}
	if (opt2 == 2) {
		fa.update(Nokiaapp);
	}
	if (opt2==3)
	{
		fa.mms(sim);
	}
	if (opt2==4)
	{
		fa.calling(sim);
	}
	if (opt2==5)
	{
		fa.sms(sim);
	}
	if (opt2==6)
	{
		fa.Payment();
	}
	
	}
}
