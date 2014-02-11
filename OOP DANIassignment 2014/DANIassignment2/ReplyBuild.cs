using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace DANIassignment2
{
    class ReplyBuild
        /*In this class, a reply is built from the random word you entered and the sentence in dani's memory*/
    {
        //method for building a reply
        static public string Reply(string r, Dictionary<string, Dictionary<string, int>> d, int cl)
        {
            StringBuilder reply = new StringBuilder();

            reply.Append(r).Append(' ');
            string search = r;
            int limit;

            limit = 0;
            //List<string> random;


            //hold on cos here comes some crazy loop shenanigans
            while (search != " ")
            {//start while

                //reset most common word
                int max;
                max = 0;
                
                


                string most = " ";
                List<string> random = new List<string>();


                foreach (KeyValuePair<string, Dictionary<string, int>> pair in d)
                {//start for, loop through outer words
                    if (search == pair.Key)
                    {//start if

                        //if the dictionary is empty, end sentence building
                        if (d[pair.Key].Count == 0)
                        {
                            search = " ";
                            break;
                        }

                        else if (d[pair.Key].Count > 0)
                        {//begin else-if
                            //random = new List<string>();

                            //find most common follow-up word
                            foreach (KeyValuePair<string, int> words in d[pair.Key])
                            {
                                
                                //skip over any bugs to prevent double spacing
                                if (words.Key == " ")
                                {
                                    continue;
                                }

                                if (words.Value > 0)
                                {
                                    for (max = 0; max < words.Value; max++)
                                    {
                                        random.Add(words.Key);
                                    }
                                }
                               

                            }
                            most = random[new Random().Next(0, random.Count)];
                            

                        }//end else-if
                    }//end if
                }//end for

                search = most;
                reply.Append(search).Append(' ');

                //set maximum amount for limit to prevent endless loop
                limit++;
                if (limit > cl)
                {
                    break;
                }

            }//end while


            return reply.ToString().Trim();
        }
    }
}
