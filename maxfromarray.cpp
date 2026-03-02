#include<iostream>
using namespace std;
class solution
{
    public:
    int i,s,m=0,q;
    int max(int arr[],int n)
    {     //q=n;
        for (i=0;i<n;i++)
        {
          s=arr[i]-arr[i-1];
          if(s>m)
          {
            m=s;
          }
        }
        return m;
    }
      
};
int main()
{
    solution s1,s2;
    int n,r,i;
    cout<<"enter how many numbers you want :";
    cin>>n;
    int arr[n];
    for(i=0;i<n;i++)
    {
        cin>>arr[i];
    }
    r=s1.max(arr,n);
    cout<<r;
    return 0;
}