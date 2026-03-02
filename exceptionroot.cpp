#include<iostream>
#include<math.h>
using namespace std;
class one
{   public:
    int x ,y;
    void getdata()
    {
        cout<<"enter number:";
        cin>>x;
    try
    {
        if(x<0)
        {
            throw x;
        }
        else{
            y=sqrt(x); cout<<y;
        }
    }
    catch(int x)
    {
       cout<<"negative number is invalid";
    }}
   /* void putdata()
    {
        cout<<"square root of"<<x<<"is :"<<y;
    }*/
    
};
int main()
{
    one o1;
    o1.getdata();
   // o1.putdata();
    return 0;
}