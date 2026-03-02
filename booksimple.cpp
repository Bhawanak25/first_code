#include<iostream>
#include<string>
using namespace std;
class book{
    private:
    float price;
    string name,title;
    public:
    void getdata(string n,string t,float p)
    {
        name=n;
        title=t;
        price=p;
    }
    void display()
    {
        cout<<"Book Details:"<<endl;
        cout<<"Author Name :"<<name<<endl;
        cout<<"Title :"<<title<<endl;
        cout<<"Price :"<<price<<endl;
    }
};
int main()
{
    book b1;
    string n,t;
    float p;
    cout<<"enter book  author name : ";
    getline(cin,n);
    cout<<"enter title of book : ";
    getline(cin,t);
    cout<<"enter price : ";
    cin>>p;
    b1.getdata(n,t,p);
    b1.display();
    return 0;
}