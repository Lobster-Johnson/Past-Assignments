using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace DANIassignment2
{
    class Greeting
        /*In this class DANI makes his initial sentence based on factors such as username, and time and date*/
    {
        static public string Hello(string u, Dictionary<string, Dictionary<string, int>> d)
        {
            Console.WriteLine("Name?");
            u = Console.ReadLine();
            string greet = " ";
            
            if (DateTime.Now.Hour >= 7 && DateTime.Now.Hour < 12)
                    {
                        greet = "Good Morning " + u;
                        Console.WriteLine(greet);
                    }
            if (DateTime.Now.Hour >= 12 && DateTime.Now.Hour < 18)
                    {
                        greet = "Good afternoon " + u;
                        Console.WriteLine(greet);
                    }
            if (DateTime.Now.Hour >= 18 && DateTime.Now.Hour < 22)
                    {
                        greet = "Good evening " + u;
                        Console.WriteLine(greet);
                    }
            if (DateTime.Now.Hour >= 22 && DateTime.Now.Hour < 24)
                    {
                        greet = "Good night " + u;
                        Console.WriteLine(greet);
                    }
             if (DateTime.Now.Hour >= 00 && DateTime.Now.Hour < 07)
                    {
                        greet = "Its a bit late don't you think " + u + "?";
                        Console.WriteLine(greet);
                    }
             string[] split = greet.Split(' ', '.', '!', ',', '?');
             Console.WriteLine(Input.ManageWords(split, d));
             Console.WriteLine(DateTime.Now);
            return (" ");
        }
    }
}
