#include <iostream>
using namespace std;
class Outer {
public:
    class Inner {
    public:
        void show() {
            cout << "Inside Inner class\n";
        }
    };
};

class Child : public Outer::Inner {};

int main() {
    Child c;
    c.show();
    return 0;
}