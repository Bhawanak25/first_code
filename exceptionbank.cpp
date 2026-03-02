#include<iostream>
using namespace std;
class Bank
{
    public:
    float balance,w;
    void getdata()
    {
        cout<<"enter balance:"<<endl;
        cin>>balance;
    }
    void withdrawal()
    {
        cout<<"withdrawal :"<<endl;
        cin>>w;
        if(w>balance)
        {
            throw w;
        }
        

    }
    
    
};
int main()
{   Bank b1;
    try
    {
       b1.getdata();
       b1.withdrawal(); 
       
    }
    catch(float w)
    {
        cout<<"exception: negative balance";
    }
    return 0;
    
}