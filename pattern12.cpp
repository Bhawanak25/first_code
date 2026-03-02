#include<iostream>
using namespace std;
class pattern
{   public:
    void print(int n)
    {
        int i,j;
       // char ch='A';
        for (i=1;i<=n;i++)
        {   char ch='A';
            for(j=n;j>=i;j--)
            {
                cout<<"";
                
            }
             for(j=1;j<2*i-1;j++)
            {
                cout<<ch++;
                
            }
             for(j=n;j>=i;j--)
            {
                cout<<"";
                
            }
            cout<<endl;
            
        }
    }
};
int main()
{
    int n;
    cout<<"enter n:";
    cin>>n;
    pattern p;
    p.print(n);
    return 0;
}