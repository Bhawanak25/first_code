#include<iostream>
#include<string>
using namespace std;
class book
{
    private:
    string title;
    public:
    void getdata(string t)
    {
        title=t;
    }
    void old()
    {
        cout<<title;
    }
    void new(string newt)
    {
        title=newt;
        cout<<title;
    }
};
int main()
{   book b;
    string t,newt;
    cout<<"enter title:";
    getline(cin,t);
    b.getdata(t);
    cout<<"before update:"<<endl;
    b.old();
    cout<<"enter new title:";
    getline(cin,newt);
    cout<<"after update:"<<endl;
    b.new(newt);
    return 0;
}