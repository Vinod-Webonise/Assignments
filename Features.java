package DesignPatern2;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Scanner;

public class Features {
	
	public static Features obj=new Features();
     public static Features getObj()
   {
	   return obj;
   }
     
     
	
	Scanner sc=new Scanner (System.in);
	ArrayList<Accountdetails> list=new ArrayList<Accountdetails>();

	public void installApp(String[] app) {
		System.out.println(" Enter the app name form following apps");
		System.out.println(Arrays.toString(app));
		String name = sc.nextLine();
		boolean flag = true;
		for (int i = 0; i < app.length; i++) {

			if (app[i].compareToIgnoreCase(name) == 0) {
				System.out.println(app[i] + " app install Sucessfully ");
				flag = false;
			}
		}
		if (flag ) {
			System.out.println("app not found");
		}
	}

	public void update(String[] app) {
		System.out.println("enter the app name for update");
		String name = sc.nextLine();
		boolean flag = true;
		for (int i = 0; i < app.length; i++) {

			if (app[i].compareToIgnoreCase(name) == 0) {
				System.out.println(app[i] + " app Updated Sucessfully");
				flag = false;
			}
		}
		if (flag == true) {
			System.out.println("app not found in Given App Store");
		}
	}
	public void mms(String [] sim)
	{
		System.out.println(" salect the sim for mms "+Arrays.toString(sim));
		int num=sc.nextInt();
		System.out.println(" Enter the NO. to Send MMS");
		sc.nextLine();
		String NO=sc.nextLine();
		System.out.println(" you sending MMS from sim "+sim[num-1]+" to the "+NO);
		
	}
	public void calling(String [] sim)
	{
		System.out.println(" salect the sim for Calling "+Arrays.toString(sim));
		int num=sc.nextInt();
		System.out.println(" enter the NO. To Calling ");
		sc.nextLine();
		String NO=sc.nextLine();
		System.out.println(" you Calling From  "+sim[num-1]+" to the "+NO);
	}
	public void sms(String []sim)
	{
		System.out.println(" salect the sim for SMS "+Arrays.toString(sim));
		int num=sc.nextInt();
		System.out.println(" enter the NO. To SMS ");
		sc.nextLine();
		String NO=sc.nextLine();
		System.out.println(" Type the Massage ");
		String sms=sc.nextLine();
		System.out.println(" you sending SMS from sim "+sim[num-1]+" to the "+NO);
		System.out.println("-------------------------Mssages--------------------------");
		System.out.println(sms);
	}
	public void Payment()
	 {   if (list.isEmpty()==true)
	 {
		 System.out.println("first Add the bank");
		 addBank();
	 }
	 else { 
		 
		 
		 System.out.println("select payement optinon from following ");
		 String []pay= {"google pay ","Phone Pay","PayTM","Tej"};
		 int k =1;
		 for (int i = 0; i < pay.length; i++)
		 {
			System.out.println(k+++"  "+pay[i]);
		}
	     int opt=sc.nextInt();

		 System.out.println("enter the "+pay[opt-1]+" passward");
		 int pass=sc.nextInt();
		 {   boolean flag =true;
			 for (int i = 0; i < list.size(); i++)
			 {
				if (list.get(i).passward==pass)
				{
					System.out.println("your passward is correct");
					paying(pay[opt-1]);
					break;
					
				}
				else 
				{
					flag=false ;
				}
			}
			 if (flag==false)
			 {
				 System.out.println(" wrong passward plz enter write passward");
				 Payment();
			 }
		 }
	 }
	 }
	private void paying(String appname)
	 {  
		 System.out.println("Enter the account no to send mony ");
	      sc.nextLine();
		 String  no=sc.nextLine();
		 System.out.println("enter the ammount");
		 int ammount=sc.nextInt();
		 System.out.println("you Sending "+ammount+" by "+appname+" to the account no "+no);
	 
	 }
	 
	private void addBank()
	 {   
		 System.out.println("Enter User Name , Bank Name ,Account no , Passward");
		 String name=sc.nextLine();
		 String bankName=sc.nextLine();
		 String accountNo=sc.nextLine();
		 int passward=sc.nextInt(); 
		 
		 
		if (list.isEmpty()==false)
		{
			System.out.println("you have already added one account which has foloowing details");
			System.out.println(list);
			Payment();
		}
		else 
		{
			list.add(new Accountdetails(name, bankName, accountNo, passward));
			System.out.println("bank added successfully");
			Payment();
		}
		
	 }
}
