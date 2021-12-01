package DesignPatern2;

import java.util.Scanner;

public class Mi_Phone implements Phone{
	
	Features mi= Features.getObj();
	Scanner sc=new Scanner (System.in);
	public void show()
	{
		
		System.out.println(" welcome in MI mobile  ");
		System.out.println(" this is duel sim mobile ");
		System.out.println("enter simNmae to add sim");
		String[] sim = new String[2];
		
		for (int i = 0; i < sim.length; i++) {
			sim[i] = sc.nextLine();
		}
		String[] MIStore = { "MIBook", "MIStore", "GoogleDocs", "MIMeusic", "MIPlayer" };
		System.out.println(" press 1 for install app from  MI Store , 2 for update app");
		System.out.println(" 3 for MMS , 4 for Calling , 5 for SMS , 6 for online Payment ");
		int opt2 = sc.nextInt();
		sc.nextLine();
		if (opt2 == 1) {
			mi.installApp(MIStore);
		}
		if (opt2 == 2) {
			mi.update(MIStore);
		}
		if (opt2==3)
		{
			mi.mms(sim);
		}
		if (opt2==4)
		{
			mi.calling(sim);
		}
		if (opt2==5)
		{
			mi.sms(sim);
		}
		if (opt2==6)
		{
			mi.Payment();
		}
		
	}
}
