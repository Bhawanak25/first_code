#include<iostream>
using namespace std;
class car
{
    private:
    float cspeed;
    friend void speed();
}c1;
class bike
{
    private:
    float bspeed;
    friend void speed();
}b1;
void speed()
{
    cout<<"enter car speed: ";
    cin>>c1.cspeed;
    cout<<"enter bike speeed: ";
    cin>>b1.bspeed;
    if(c1.cspeed>b1.bspeed)
    {
        cout<<"car speed is greater than bike"<<endl;
    }
    else{
        cout<<"bike speed id grater than car"<<endl;
    }
}
int main()
{
    speed();
    return 0;
}