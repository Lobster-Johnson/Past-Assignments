/*Algorithm Design assignment part 3 (b):
Designing a program that takes a student who was in IT tallaght and finds them in the DIT students
C12474932 Marcus Daly
26/04/2013
Note: For reason, it always checks abbey to see if her name is the searched name, before immediatly cutting her out.
Cause of this is unknown at the moment*/

//libraries
#include <stdio.h>
#include <string.h>
#define NO 10
#define LETTERS 15


//structs


//functions


//main
main()
{
    //students present in DIT
	char *A[NO];
    A[0]="abbey";
    A[1]="bernard";
    A[2]="carl";
    A[3]="enda";
    A[4]="francine";
    A[5]="gary";
    A[6]="linda";
    A[7]="mona";
    A[8]="oliva";
    A[9]="patrick";


	int first,last,mid,i;
    char search[LETTERS];

    //listing of DIT students
	printf("Here's all %d  DIT studentnames\n", NO);
 
    for ( i = 0 ; i < NO ; i++ )
    {
    	printf("%s\n",A[i]);
	}

	first = 0;
	last = NO-1;

	printf("\nEnter ITT name to search for\n");
	scanf("%s",&search);


	//Binary search as long as there are still elements
	while( first <= last )
    {
    	//if found, mid and search term are equal
    	if (strcmp(A[mid],search)==0) 
    	{
    		printf("\n%s found at location %d.\n", search, mid+1);
    		break;
    	}

    	else
    	{
    		//located in upper sector ie not equal, mid is less than search
    		if (strcmp(A[mid],search)<0)
    		{
                //lower half is done away with
    			first = mid + 1;
                printf("\nArray halved. Upper half is now being used only\n\n");

                //showing current students
                for(i=first;i<(last+1);i++)
                {
                    printf("%s\n",A[i]);
                }
    		} 



    		//located in lower sector, mid is higher than search
    		else
    		{
                //upper half in done away with
    			last = mid - 1;
                printf("\nArray halved. Lower half is now being used only\n");

                //showing current students
                for(i=first;i<(last+1);i++)
                {
                    printf("%s\n",A[i]);
                }
    		}


    	}
        //declaring middle value
    	mid = (first + last)/2;
   	}//end of binary search


   	//not in array
   if ( first > last )
   {
		printf("Not found. %s is not present in the list.\nMaybe %s isn't a DIT student.", search,search);
		return 0;
   }
}//end of main

