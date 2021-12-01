package DesignPatern2;

import java.util.Scanner;

public class Samsung_Phone implements Phone{
	Features f=Features.getObj();
	Scanner sc=new Scanner (System.in);
public void show()
{
	System.out.println(" welcome in samsong mobile  ");
	System.out.println(" this is duel sim mobile ");
	System.out.println("enter simNmae to add sim");
	String[] sim = new String[2];
	
	for (int i = 0; i < sim.length; i++) {
		sim[i] = sc.nextLine();
	}
	String[] app = { "Gpay", "PhonPay", "GoogleMap", "MusicPlayer", "VideoPlayer" };
	System.out.println(" press 1 for install app from  Nokia Store , 2 for update app");
	System.out.println(" 3 for MMS , 4 for Calling , 5 for SMS , 6 for online Payment ");
	int opt2 = sc.nextInt();
	sc.nextLine();
	if (opt2 == 1) {
		f.installApp(app);
	}
	if (opt2 == 2) {
		f.update(app);
	}
	if (opt2==3)
	{
		f.mms(sim);
	}
	if (opt2==4)
	{
		f.calling(sim);
	}
	if (opt2==5)
	{
		f.sms(sim);
	}
	if (opt2==6)
	{
		f.Payment();
	}
	
	}
}
