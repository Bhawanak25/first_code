#include<iostream>
using namespace std;
class one
{    public:
    int x[10],i,y;
    void gatdata()
    {   cout<<"enter 10 numbers :";
        for(i=0;i<10;i++)
        {
            cin>>x[i];
        
        try
        {
            if(x[i]<0 || x[i]%2==0)
            {
                throw x[i];
            }
            else{
                cout<<x[i]<<endl;
                x[i]=y;
                cout<<y;
            }
        }
        catch(int x)
        {
            cout<<" --ERROR \n";
        }
    }
}
/*void putdata()
{
    for(i=0;i<10;i++)
    {
        cout<<x[i]<<endl;
    }
}*/
};
int main()
{
    one o1;
    o1.gatdata();
    //o1.putdata();
    return 0;
}