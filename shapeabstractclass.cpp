#include<iostream>
using namespace std;
class shape
{
    public:
    virtual void draw()=0;
    // virtual~shape{};
};
class rectangle: public shape
{
    public:
    void draw()
    {
        cout<<"drawing rectangle"<<endl;
    }
};
class circle:public shape
{
    public:
    void draw()
    {
        cout<<"drawing circle"<<endl;
    }
};
int main()
{
    shape*ptr;
    rectangle r;
    circle c;
    //ptr=new rectangle;
    ptr=&r;
    ptr->draw();
   // delete ptr;
   // ptr=new circle;
   ptr=&c;
    ptr->draw();
   // delete ptr;
    return 0;
}
