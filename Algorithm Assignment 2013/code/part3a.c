/*Algorithm Design assignment part 3 (a):
Designing a program that takes in all the students from all 3 ITs, and sorts them into a new IT
C12474932 Marcus Daly
26/04/2013*/

//libraries
#include <stdio.h>
#include <string.h>
#define NO 4
#define HALF 8
#define NEXT 12

//structs


//functions
void sort(char *arr[],int first,int mid,int last);
void division(char *arr[],int first,int last);

//main body of code
main()
{
	char DIT[NO][NEXT];
	char ITT[NO][NEXT];
	char ITB[NO][NEXT];
    char *TUD[NEXT];
    int i,b;


    //entering students
    printf("\nEnter %d DIT student names\n",NO);
    for(i=0;i<NO;i++)
    {
    	scanf("%s\n",&DIT[i]);
    }

    printf("\nEnter %d ITT student names\n",NO);
    for(i=0;i<NO;i++)
    {
    	scanf("%s\n",&ITT[i]);
    }


    printf("\nEnter %d ITB student names\n",NO);
    for(i=0;i<NO;i++)
    {
    	scanf("%s\n",&ITB[i]);
    }




    //merging all ITs into TUD
    for(i=0;i<NO;i++)
    {
    	TUD[i] = DIT[i];
    }

    for(i=0;i<NO;i++)
    {
    	TUD[(NO+i)] = ITT[i];
    }

    for(i=0;i<NO;i++)
    {
    	TUD[(HALF+i)] = ITB[i];
    }



    //printing students from the ITs
    printf("\nDIT:\n");
    for(i=0;i<NO;i++)
    {
    	printf("%s\n",DIT[i]);
    }
    printf("-----------------------------\n");

    printf("\nITT:\n");
    for(i=0;i<NO;i++)
    {
    	printf("%s\n",ITT[i]);
    }
    printf("-----------------------------\n");

    printf("\nITB:\n");
    for(i=0;i<NO;i++)
    {
    	printf("%s\n",ITB[i]);
    }
    printf("-----------------------------\n");




    //printing unsorted TUD students
    printf("\n\nThe following are all the TUD students unsorted\n");
    for(i=0;i<NEXT;i++)
    {
    	printf("%s\n",TUD[i]);
    }

    //passing to be divided up
    division(TUD,0,NEXT-1);

    printf("\n\nAfter merge sorting studentss are: \n");
    for(i=0;i<NEXT;i++)
    {
         printf("%s\n",TUD[i]);
    }
}




//divsion function
void division(char *arr[],int first,int last)
{

    int mid;

    if(first<last)
    {
        mid=(first+last)/2;
        division(arr,first,mid);
        division(arr,mid+1,last);
        sort(arr,first,mid,last);
    }
}





//merging fucntion
void sort(char *arr[],int first,int mid,int last)
{
	int i,m,k,l,temp[NEXT];

    l=first;
    i=first;
    m=mid+1;

    while((l<=mid)&&(m<=last))
    {

        if(strcmp(arr[l],arr[m])<0)
        {
            temp[i]=arr[l];
            l++;
        }
        else
        {
            temp[i]=arr[m];
            m++;
        }
        i++;
    }

    if(l>mid)
    {
         for(k=m;k<=last;k++)
         {
             temp[i]=arr[k];
             i++;
         }
    }
    else
    {
         for(k=l;k<=mid;k++)
         {
             temp[i]=arr[k];
             i++;
         }
    }
   
    for(k=first;k<=last;k++)
    {
        arr[k]=temp[k];
    }
}