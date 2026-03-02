#include<iostream>
#include<fstream>
#include<string>
using namespace std;
int main()
{
    ifstream o1;
    ofstream o2;
    char ch;
    //string text;
    int v=0,c=0;
    o2.open("vowel.txt",ios::out);
   // cout<<"enter text : ";
    //getline(cin,text);
    o2<<"hello what are you doing ?";
   // o2<<text;
    o2.close();
    o1.open("vowel.txt",ios::in);
    while(o1.get(ch))
    {
        if(ch=='A' || ch=='a'||ch=='e'||ch=='E'||ch=='i'||ch=='I'||ch=='o'||ch=='O'||ch=='u'||ch=='U')
        {
          v++;
        }
        else{
            c++;
        }
    }
    cout<<"no of vowels: "<<v<<endl;
    cout<<"no of consonants: "<<c<<endl;
}