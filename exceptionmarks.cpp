#include<iostream>
using namespace std;
class invalidmarks{}i1;
class student
{ public:
    int rollno,m1,m2,m3;
    string name;
    student(string n,int r,int m11,int m22,int m33)
    {  
        name=n;
        m1=m11;
        m2=m22;
        m3=m33;
        rollno=r;
        if(m1<=0 || m1>100 || m2<=0 ||m2>100 ||m3<=0||m3>100)
        {
            throw i1;
            
       }
    }
};
int main()
{   xy: string name;
    int rollno,m1,m2,m3;
    cout<<"enter name:";
    cin>>name;
    cout<<"enter rollno";
    cin>>rollno;
    cout<<"enter 1 marks :";
    cin>>m1;
    cout<<"enter 2 marks :";
    cin>>m2;
    cout<<"enter 3 marks :";
    cin>>m3;
    try{ 
       student s1(name,rollno,m1,m2,m3); 
    } 
    catch(...)
    {
        cout<<"Exception invalid marks";
        goto xy;
    }
}