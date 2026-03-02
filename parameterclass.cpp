#include<iostream>
using namespace std;
class a
{
    public:
    int p;
    a(int x)
    {
        p=x;
        cout<<" in a class p ="<<p;
 }
};
class b
{
    public :
    int q;
    b(int y)
    {
        q=y;
        cout<<" in b class q ="<<q;
    }
};
class c:public a,public b
{
    public:
    int r,s;
    c(int z,int v):a(z),b(v){

    }
};
int main()
{
    int z,v;
    cout<<"enter number :";
    cin>>z>>v;
    c c1(z,v);
    return 0;
}