#include<iostream>
using namespace std;
class dateadd
{
    public:
    int y,m,d;
    void getdata()
    {
        cout<<"enter date (date/month/year):";
        cin>>d>>m>>y;
    }
    void display()
    {
        cout<<d<<"/"<<m<<"/"<<y;
    }
    dateadd operator +(dateadd d2)
    {
        dateadd temp;
        temp.d=d+d2.
    }
}