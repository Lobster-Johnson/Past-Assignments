#include <stdio.h>
#include <string.h>

main()
{
	char string1[6];
	char string2[6];
	printf("The higher a letter is, the higher a value it will have. ie b is greater than a\n");

	printf("Enter string 1\n");
	scanf("%s",&string1);

	printf("Enter string 2\n");
	scanf("%s",&string2);

	if(strcmp(string1,string2)==1)
	{
		printf("String 1 is greater than string 2 ie lower alphabetically");
	}
	if(strcmp(string1,string2)==0)
	{
		printf("String 1 equal to string 2 ie the same");
	}
	else
	{
		printf("String 1 is less than string 2 ie higher alphabteically");
	}
}