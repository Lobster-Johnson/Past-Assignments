using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace DANIassignment2
{
    class Program
    {
       /*DANI Assignment By C12474932 DT228/2 student Marcus Daly*/

            static void Main(string[] args)
        {
            var d = new Dictionary<string, Dictionary<string, int>>();
            string username = " ";
            Console.WriteLine(Greeting.Hello(username, d));
            Console.WriteLine(">>My name is DANI. I learn sentences based on what you enter\n>>If I get int a loop change the subject\n>>Enter %QUIT% to stop talking to me\n>>Press %BRAIN% to view everything I know\n>>Enter %BOOK% to make me read the first page of a book\n>>Want to learn more? Enter %ABOUT%\n\n");
            while (true)
            {
                string sentence = " ";
                Console.Write("U:");
                sentence = Console.ReadLine().ToLower();

                //end session
                if(sentence == "%quit%")
                {
                    Console.WriteLine("ENDING SESSION\nGoodbye " + username);
                    break;
                }

                //view memory
                if (sentence == "%brain%")
                {
                    Console.WriteLine(Brain.printdict(d));
                }

                //about 
                if (sentence == "%about%")
                {
                    Console.WriteLine("\t\t---HERE COMES SOME INFORMATION---");
                    Console.WriteLine("DANI stands for Dynamic Artifical Non-Intelligence. \nHe is a simple chatbox program that learns the english Language based on what you say to him, and the order in which you say it. \nAfter which he saves a file of his memory to be remembered for future sessions.\nOr at least he would if the coding process for that went correctly\n\nThis program was created by DT228/2 student C12474932, Marcus Daly.\nI created this as part of an Object Orientated Programming assignment due on the 3/12/2013. \nI invite you to join me on the Twitter as I enjoy all the extra marks this wonderful program has brought me.\n @extremename62 ");
                }

                if (sentence == "%book%")
                {
                    Book.Library(d);
                }

                //senetence gets split up by white space and anything else
                string[] words = sentence.Split(' ', '.', '!', ',', '?');

                //largest possible size for a sentence is twice the size of the entered one
                int cl = (words.Length * 2);

                //selects a random words from their sentence, and is unable to pick the last word
                string rand = words[new Random().Next(0, words.Length - 1)].ToLower();
                

                //send off to the word management method
                Console.WriteLine(Input.ManageWords(words, d));

                //sends off to the reply building method
                Console.WriteLine("D:" + ReplyBuild.Reply(rand, d, cl));
                 
            }


        }




        





        
    }
}
