#include<iostream>
#include<string>
using namespace std;
class laptop
{   public:
    string brand,processor;
    int ram;
    laptop(string b,string p,int r)
    {
        brand=b;
        processor=p;
        ram=r;
    }
    void display()
    {
        cout<<"brand is: "<<brand<<endl;
        cout<<"processor is: "<<processor<<endl;
        cout<<"ram is:"<<ram<<endl;
    }

};
int main()
{
    string b,p;
    int r;
    cout<<"enter brand:";
    cin>>b;
    cout<<"enter processor";
    cin>>p;
    cout<<"enter ram:";
    cin>>r;
    laptop l(b,p,r);
    l.display();
    return 0;
}