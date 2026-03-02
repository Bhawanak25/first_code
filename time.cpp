#include<iostream>
using namespace std;
class Time
{
    
    public:
    int h,m,s;
    Time(){h=0;
        m=0;
        s=0;}

    void getdata()
    {
        cout<<"ent h,m and s";
        cin>>h>>m>>s;

    }
    void putdata()
    {
        cout<<h<<m<<s;
    }
Time operator +(Time t1 )
{
    Time temp;
    temp.s=s+t1.s;
    temp.m=m+t1.m+(temp.s/60);
    temp.s=temp.s%60;
    temp.h=h+t1.h+(temp.m/60);
    temp.m=temp.m%60;
    return temp;
    
}};
int main()
{
    Time t1,t2,t3;
    cout<<"ent 1st time";
    t1.getdata();
    cout<<"ent 2nd time";
    t2.getdata();
    t3=t1+t2;
    t3.putdata();
    return 0;

}

