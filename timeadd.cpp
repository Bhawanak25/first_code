#include<iostream>
using namespace std;
class time
{
    public:
    int h ,m ,s;
    void getdata()
    {
        cout<<"enter time in hr min sec:";
        cin>>h>>m>>s;
    }
    void display()
    {
        cout<<"time is :"<<h<<"hr "<<m<<"m "<<s<<"sec"<<endl;
    }
    void add(time t1,time t2);
}t;
void time::add(time t1,time t2)
{  
  t.s=t1.s+t2.s;
  t.m=t1.m+t2.m+(t.s/60);
  t.s=t.s%60;
  t.h=t1.h+t2.h+(t.m/60);
  t.m=t.m%60;
}
int main()
{
  time t1,t2;
  cout<<"enter 1 time:";
  t1.getdata();
  cout<<"enter 2 time:";
  t2.getdata();
  t.add();
  t.display();
  return 0;
}