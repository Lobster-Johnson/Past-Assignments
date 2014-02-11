using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace DANIassignment2
{
    class Input
    {
        //method for adding to the dictionary
        static public string ManageWords(string[] v, Dictionary<string, Dictionary<string, int>> d)
        {

            // Build up string into this StringBuilder.
            StringBuilder reply = new StringBuilder();
            int i = 0;


            //loops through each word
            for (i = 0; i < v.Length; i++)
            {
                //puts them all in lower case
                string lower = v[i].ToLower();



                // If we haven't already encountered the word, create an outer dictionary
                if (!d.ContainsKey(lower))
                {
                    //create a new outer dictionary with the name of the new word
                    d.Add(lower, new Dictionary<string, int>());
                }

                if (i + 1 != v.Length)
                {
                    string next = v[i + 1].ToLower();
                    //adding into multidict, second dict
                    if (!d[lower].ContainsKey(next))
                    {
                        d[lower].Add(next, 1);
                    }
                    else
                    {
                        d[lower][next]++;
                    }
                }
            }


            //sends back a reply
            return reply.ToString().Trim();

        }
    }
}
