using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace DANIassignment2
{
    class SaveUser
    {
        static public string Save(string u, Dictionary<string, Dictionary<string, int>> d)
        {
            if (u == " ")
            {
                Console.WriteLine("what was your name again?");
                u = Console.ReadLine();
                //System.IO.File.WriteALLText("C:Users\Marcus\Documents\Visual Studio 2010\Projects\DANIassignment2\memory.txt", u);
            }
            return ("okay then " + u + " \nI WILL REMEMBER THAT");
        }
    }
}
