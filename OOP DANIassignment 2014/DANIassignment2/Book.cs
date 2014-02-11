using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace DANIassignment2
{
    class Book
    {
        static public string Library(Dictionary<string, Dictionary<string, int>> d)
        {
            string answer;
            Console.WriteLine("So you want me to read. Please pick something from this list and I'll read the first page:\n1)Catcher in the Rye\n2)To Kill a Mockingbird \n3)The King in Yellow\n4)The Hitchhiker's Guide to the Galaxy\n5)Hamlet");
            answer = Console.ReadLine();
            if (answer == "1")
            {
                string[] catcher = System.IO.File.ReadAllLines("catcher.txt");
                for (int i = 0; i < catcher.Length; i++)
                {
                    string[] words = catcher[i].Split(' ', '.', '!', ',', '?', '-', ';');
                    Console.WriteLine(Input.ManageWords(words, d));
                }
            }
            if (answer == "2")
            {
                string[] mockingbird = System.IO.File.ReadAllLines("mockingbird.txt");
                for (int i = 0; i < mockingbird.Length; i++)
                {
                    string[] words = mockingbird[i].Split(' ', '.', '!', ',', '?', '-', ';');
                    Console.WriteLine(Input.ManageWords(words, d));
                }
            }
            if (answer == "3")
            {
                string[] king= System.IO.File.ReadAllLines("king.txt");
                for (int i = 0; i < king.Length; i++)
                {
                    string[] words = king[i].Split(' ', '.', '!', ',', '?');
                    Console.WriteLine(Input.ManageWords(words, d));
                }
            }
            if (answer == "4")
            {
                string[] hitch = System.IO.File.ReadAllLines("hitchhiker.txt");
                for (int i = 0; i < hitch.Length; i++)
                {
                    string[] words = hitch[i].Split(' ', '.', '!', ',', '?', '-', ';');
                    Console.WriteLine(Input.ManageWords(words, d));
                }
            }
            if (answer == "5")
            {
                string[] hamlet = System.IO.File.ReadAllLines("hamlet.txt");
                for (int i = 0; i < hamlet.Length; i++)
                {
                    string[] words = hamlet[i].Split(' ', '.', '!', ',', '?', '-', ';');
                    Console.WriteLine(Input.ManageWords(words, d));
                }
            }
            return (" ");
        }
    }
}
