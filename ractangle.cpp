#include<iostream>
using namespace std;
class rectangle
{   public:
    int area;
    rectangle(int l, int b)
    {
      area=l*b;
      cout<<"area of rectangle:"<<area;
    }
};
int main()
{    int l,b;
    cout<<"enter length and breadth :";
    cin>>l>>b;
    rectangle r(l,b);
    return 0;
}