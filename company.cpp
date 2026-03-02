#include<iostream>
#include<string>
using namespace std;
class company
{   public:
    static string p1,p2,p3;
    static void cpolicy();
};
string company::p1;
string company::p2;
string company::p3;
void company::cpolicy()
{
   cout<<"enter policies:"<<endl;
   cout<<"1 policy : ";
   getline(cin,p1);
   cout<<"2 policy :";
   getline(cin,p2);
   cout<<"3 policy :";
   getline(cin,p3);
   cout <<"policies are:"<<endl;
   cout<<p1<<"\n"<<p2<<"\n"<<p3<<endl;
}
int main()
{
    company::cpolicy();
    return 0;
}