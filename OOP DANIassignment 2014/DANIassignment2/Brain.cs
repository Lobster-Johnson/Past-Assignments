using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace DANIassignment2
{
    class Brain
        /*In this Class, the contents of DANI's memory are printed*/
    {
        //prints out the contents of dani's brain
        static public string printdict(Dictionary<string, Dictionary<string, int>> d)
        {
            Console.WriteLine("\n\t\t---PRINTING MEMORY---");
            foreach (KeyValuePair<string, Dictionary<string, int>> pair in d)
            {
                Console.WriteLine("{0} :", pair.Key);
                foreach (KeyValuePair<string, int> words in d[pair.Key])
                {
                    Console.Write("  {0}({1}) ", words.Key, words.Value);


                }
                Console.WriteLine();
            }
            return ("\n\t\t---PRINTING COMPLETE---");       
        }
    }
}
