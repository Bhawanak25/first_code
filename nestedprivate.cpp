#include <iostream>
using namespace std;

class Outer {
private:
    int secret = 123;

public:
    class Inner {
    public:
        void display(Outer o) {
            cout << "Accessing Outer’s secret: " << o.secret << endl;  // ✅ Allowed
        }
    };

    friend class Inner;  // 🔑 Granting access to Inner
};
int main()
{
    Outer o1;
    Outer
}