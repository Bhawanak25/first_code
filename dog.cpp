#include<iostream>
using namespace std;
class Animal
{
    protected:int age;
    public:
    void show()
    {
        cout<<"i am in animal calss";
    }
};
class Dog:public Animal
{public:
    void set()
    {cout<<"ent age";
        cin>>age;

    }
    void display()
    {
        cout<<age;
    }
};
int main()
{
    Dog d1;
    d1.set();
    d1.display();
    return 0;
}