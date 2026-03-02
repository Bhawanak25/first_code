#include<iostream>
using namespace std;
class distance
{
  private:
   int d1,d2,d4;
   friend void add();
}d3;
void add()
{
    cout<<"enter distance :";
    cin>>d3.d1>>d3.d2;
    d3.d4=d3.d1+d3.d2;
    cout<<"distance is: "<<d3.d4;
}
int main()
{
    add();
    return 0;
}