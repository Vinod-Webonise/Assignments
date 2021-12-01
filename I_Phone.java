package DesignPatern2;

import java.util.Scanner;

public class I_Phone implements Phone{
	Features i= Features.getObj();
	Scanner sc=new Scanner (System.in);
	public void show(){
		
	System.out.println(" welcome in I Phone   ");
	System.out.println(" this is triple sim mobile ");
	System.out.println("enter simNmae to add sim");
	String[] sim = new String[3];
	for (int i = 0; i < sim.length; i++) {
		sim[i] = sc.nextLine();
	}
	String[] iosApp = { "PhoneBook", "CamScanner", "GoogleDrive", "winkMeusic", "MXPlayer" };
	System.out.println(" press 1 for install app from  ios Store , 2 for update app");
	System.out.println(" 3 for MMS , 4 for Calling , 5 for SMS , 6 for online Payment ");
	int opt2 = sc.nextInt();
	sc.nextLine();
	if (opt2 == 1) {
		i.installApp(iosApp);
	}
	if (opt2 == 2) {
		i.update(iosApp);
	}
	if (opt2==3)
	{
		i.mms(sim);
	}
	if (opt2==4)
	{
		i.calling(sim);
	}
	if (opt2==5)
	{
		i.sms(sim);
	}
	if (opt2==6)
	{
		i.Payment();
	}
}
}
