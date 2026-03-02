#include<iostream>
using namespace std;
class time
{
    public:
    int h,m,s;
    void getdata()
    {
        cout<<"enter hour:";
        cin>>h;
        cout<<"enter minutes :";
        cin>>m;
        cout<<"enter seconds :";
        cin>>s;
    }
    void display()
    {
        cout<<h<<"hour"<<m<<"minute"<<s<<"second";
    }
    time operator +(time t2)
    {
        time temp;
        temp.s=s+t2.s;
        temp.m=m+t2.m+(temp.s/60);
        temp.h=h+t2.h+(temp.m/60);
        temp.s=temp.s%60;
        temp.m=temp.m%60;
        return temp;
    }
};
int main()
{
    time t1,t2,t3;
    cout<<"enter 1 time:"<<endl;
    t1.getdata();
    cout<<"enter 2 time:"<<endl;
    t2.getdata();
    t3=t1+t2;
    t3.display();
    return 0;
}