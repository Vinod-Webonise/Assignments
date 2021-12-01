package DesignPatern2;

public class PhoneFactory {

	public Phone getObj(int num)
	{
		if (num==1)
		{
			return new  Samsung_Phone();
		}
		else if (num==2)
		{
			return new Nokia_Phone();
		}
		else if (num==3)
		{
			return new I_Phone();
		}
		else 
		{
			return new Mi_Phone();
		}
	}
}
