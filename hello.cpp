#include<iostream>
using namespace std;
class one
{
    public:int a,b;
    void getdata()
    {
        cout<<"ent a&b";
        cin>>a>>b;
    }
    void putdata()
    {
        cout<<"a is"<<a<<"b is"<<b;
    }
    void operator++()
    {
        a=++a;
        b=++b;
    }
    void operator--()
    {
        a=--a;
        b=--b;
    }
};
int main()
{
    one o1;
    o1.getdata();
    ++o1;
    o1.putdata();
    --o1;
    o1.putdata();
    return 0;
}