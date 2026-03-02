#include<iostream>
using namespace std;
class complex 
{
    public:
    int r,i;
    void getdata()
    {
        cout<<"enter r and i :";
        cin>>r>>i;
    }
    void displayadd()
    {
        cout<<"addition is :"<<endl;
        cout<<r<<"+"<<i<<"i"<<endl;
    }
    void displaymul()
    {
        cout<<"multiplication is :"<<endl;
        cout<<r<<"+"<<i<<"i"<<endl;
    }
 /*   complex operator +(complex c2)
    {
        complex temp;
        temp.r=r+c2.r;
        temp.i=i+c2.i;
        return temp;
    }*/
    complex operator *(complex c2)
    {
        complex temp2;
        temp2.r=(r*c2.r)-(i*c2.i);
        temp2.i=(r*c2.i)+(i*c2.r);
        return temp2;
    }
};
int main()
{
    complex c1,c2,c4;
    cout<<"enter 1 complex number:";
    c1.getdata();
    cout<<"enter 2 complex number:";
    c2.getdata();
   // c3=c1+c2;
    c4=c1*c2;
    //c3.displayadd();
    c4.displaymul();
    return 0;
}