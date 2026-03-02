#include<iostream>
using namespace std;
class student
{
    private:
    int marks;
    public:
    void show(int m)
    {    marks=m;
        cout<<m<<endl;
    }
    friend void modify();
}s1;
void modify()
{   
    cout<<"enter new marks:";
    cin>>s1.marks;

    
}
int main()
{  student s2;
    int m;
    cout<<"enter marks:";
    cin>>m;
    cout<<"Before changing Marks:"<<endl;
    s2.show(m);
    cout<<"after changing marks:"<<endl;
    modify();
    return 0;
}