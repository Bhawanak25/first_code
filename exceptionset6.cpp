/*#include<iostream>
#include<string>
using namespace std;
class student
{
    public:
    string name;
    int age;
    void getname()
    {
        cout<<"enter name:"<<endl;
        cin>>name;
    }
   void putdata()
    {
        cout<<"name : "<<name<<endl;
       
    }
};
int main()
{
    student s1;
    s1.getname();
    void getage()
    {
        cout<<"enter age:"<<endl;
        cin>>age;
        try
        {
            if(age<0)
             {
                throw age;
             }
             else{cout<<name<<endl;
                cout<<age<<endl;
             }
             
        }
        catch(int age)
        {
            cout<<"invalid age"<<endl;
        }
        
    }
    getage()
    return 0;
}*/

#include <iostream>
using namespace std;

// Custom exception class
class incorrectAge {};

class Person {
public:
    string name;
    int age;

    void getDetails() {
        cout << "Enter name: ";
        cin >> name;

        cout << "Enter age: ";
        cin >> age;

        if (age < 0) {
            throw incorrectAge();  // Throw custom exception if age is negative
        }
    }

    void display() {
        cout << "\nName: " << name << endl;
        cout << "Age: " << age << endl;
    }
};

int main() {
    Person p;

    try {
        p.getDetails();   // Take input
        p.display();      // Show result if no exception
    } catch (incorrectAge) {
        cout << "\nException: Age cannot be negative!" << endl;
    }

    return 0;
}
