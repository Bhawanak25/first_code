#include<iostream>
using namespace std;
class bank
{
    public:
    float accno,balance,mbalance,wmoney;
    bank(float a,float b)
    {
        accno=a;
        balance=b;
    }
    void deposit(float m)
    {
       mbalance=m;
       balance+=mbalance;
    }
    void withdraw(float w)
    {     wmoney=w;
         if(wmoney<balance)
         {
            cout<<"money withdraw: "<<wmoney;
         }
         else{
            throw wmoney;
         }
    }
};
int main()
{

    float a,b,w,m;
    cout<<"enter account number:";
    cin>>a;
    cout<<"enter balance:";
    cin>>b;
    cout<<"money deposit:";
    cin>>m;
    cout<<"money withdraw:";
    cin>>w;
    bank b1(a,b);
    try
    {
       b1.deposit(m);
       b1.withdraw(w);
    }
    catch(float wmoney)
    {
        cout<<"..........insufficient balance......."<<endl;
    }
    catch(...)
    {
        cout<<"....ERROR.....";
    }
    return 0;
}