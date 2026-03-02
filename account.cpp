#include<iostream>
using namespace std;
class account
{
    public:
    float balance;
    void getdata(float b)
    {
        balance=b;
    }
    void calc()
    {
        cout<<"calculate interest"<<endl;
    }
};
class saving: public account{
    public:
    float savingbalance;
    void calc()
    {
        account::getdata();
        savingbalance=balance*0.04;
        cout<<" saving account interest: "<<savingbalance;
    }
};
class checking
{
    public:
    float c
}