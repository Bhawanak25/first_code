#include<iostream>
using namespace std;
class Distance
{
    protected:
    int f;
    int i;
    public:
    void getdata()
    {
        cout<<"ent f &i"<<endl;
        cin>>f>>i;
    }
    void putdata()
    {
        cout<<"feet is"<<f<<"inches is "<<i<<endl;
    }
    Distance operator+(Distance d1)
    {
        Distance temp;
        temp.i=i+d1.i;
        temp.f=f+d1.f+(temp.i/12);
        temp.i=temp.i%12;
        return temp;
    }
};
int main()
{
    Distance d1,d2,d3;
    cout<<"ent 1st distance";
    d1.getdata();
    cout<<"ent 2nd distance";
    d2.getdata();
    d3=d1+d2;
    d3.putdata();
    return 0;

}