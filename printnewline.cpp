#include<string>
void printNewLine() 
{
    string l;
    char ch;
    int i;
     l="Geeks for Geeks";
     for(i=0;i<l.length();i++)
     {
         if(l[i]==' ')
         {
             cout<<endl;
         }
         else
         {
             cout<<l[i];
         }
    
     }
    
}