#include<iostream>
using namespace std;
class Distance
{ 
    int meter ,cm;
    public:
    Distance():meter(0),cm(0.0){};
    Distance (float m)
    {meter=(int) m;
     cm=(m-meter)*100;
    }
    void display()
    {
     cout<<"answer = "<<meter<<"meter "<<cm<<"cm"<<endl;
    }
    friend Distance operator +(Distance d1,Distance d2);
};
Distance operator +(Distance d1,Distance d2)
{ Distance temp;
  temp.meter=d1.meter+d2.meter;
  temp.cm=d1.cm+d2.cm;
  if(temp.cm>=100)
  {
     temp.meter=temp.meter+(int)(temp.cm/100);
     temp.cm=temp.cm-((int)(temp.cm/100)*100);
  }
  return temp;
}
int main()
{
    Distance d1(5.75),d2(3.40),d3;
    d3=d1+d2;
d3.display();
}