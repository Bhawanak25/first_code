#include<iostream>
#include<fstream>
using namespace std;
int main()
{    char ch;
    int s,w,k;
    s=0;
    w=0;
    k=0;
    ifstream o2;
    ofstream o1;
    o1.open("one.txt",ios::out);
    o1<<"HeLLo hey bhawana here\n";
    o1<<"skit college\n";
    o1<<"branch is cse\n";
    o1.close();
    o2.open("one.txt",ios::in);
    while(o2.get(ch))
    {   if(ch>='a'&&ch<='z'||ch>='A'&&ch<='Z'){
        k++;}
        if(ch=='\n')
        {s++;
        }
       if(ch==' '||ch=='\n')
       {
        w++;
       }
    }
    cout<<"k :"<<k<<endl;
    cout<<"w :"<<w<<endl;
    cout<<"s :"<<s<<endl;
    o2.close();
    return 0;
}