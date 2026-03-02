#include<iostream>
using namespace std;
class car
{
    public:
    string name,model;
    float speed;
    car()
    {
        cout<<"enter car details:";
        cout<<"enter name:";
        cin>>name;
        cout<<"enter model:";
        cin>>model;
        cout<<"enter speed:";
        cin>>speed;
    }
    car(car&c3)
    {
        cout<<"car details are:";
        cout<<"name:"<<c3.name<<endl;
        cout<<"model:"<<c3.model<<endl;
        cout<<"speed:"<<c3.speed<<endl;
    }
};
int main()
{
    car c1;
    car c2=c1;
    return 0;
}