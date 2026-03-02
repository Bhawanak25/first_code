#include<iostream>
using namespace std;
class one
{
    public:
    int l,b,w;
    one(int le,int be,int we)
    {
        l=le;
        b=be;
        w=we;
    }
    bool operator ==(one o2)
    {
        if(l==o2.l && b==o2.b && w==o2.w)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
};
int main()
{
    int le,be,we;
    cout<<"1. enter length breadth and width:";
    cin>>le>>be>>we;
    one o1(le,be,we);
     cout<<"2. enter length breadth and width:";
    cin>>le>>be>>we;
    one o2(le,be,we);
     bool o3=o1==o2;
     cout<<o3;
    return 0;
    

}