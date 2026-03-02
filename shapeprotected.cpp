#include<iostream>
using namespace std;
class shape
{
    protected:
    float radius;
    //public:
    void getdata()
    {
        cout<<"enter radius:";
        cin>>radius;
    }
};
class circle:public shape{
    public:
    float area;
    void display()
    {    shape::getdata();
        area=3.14*radius*radius;
        cout<<"area of circle: "<<area<<endl;
    }
};
int main()
{
    circle c1;
   /* int r;
    cout<<"enter raidus:";
    cin>>r;
    c1.getdata(r);*/
    c1.display();
    return 0;
}