#include <iostream>
using namespace std;
#define MAX 5 // maximum size of stack
class Stack {
int arr[MAX];
int top;
public:
Stack() {
top = -1;
}
// Push operation
void push(int x) {
if (top == MAX - 1) {
cout << "Stack Overflow! Cannot push " << x << endl;
} else {
arr[++top] = x;
cout << x << " pushed into stack.\n";
}
}
// Pop operation
void pop() {
if (top == -1) {
cout << "Stack Underflow! Nothing to pop.\n";
} else {
cout << arr[top--] << " popped from stack.\n";
}
}
// Peek (Top element)
void peek() {
if (top == -1) {
cout << "Stack is Empty!\n";
} else {
cout << "Top element is: " << arr[top] << endl;
}
}
// Peep (element at specific position from top)
void peep(int pos) {
int index = top - pos + 1;
if (index < 0 || index > top) {
cout << "Invalid position!\n";
} else {
cout << "Element at position " << pos << " from top is: " << arr[index] << endl;
}
}
// Display stack
void display() {
if (top == -1) {
cout << "Stack is Empty!\n";
} else {
cout << "Stack elements: ";
for (int i = top; i >= 0; i--) {
cout << arr[i] << " ";
}
cout << endl;
}
}
};
int main() {
Stack s;
int choice, value, pos;
do {
cout << "\n--- Stack Menu ---\n";
cout << "1. Push\n2. Pop\n3. Peek\n4. Peep\n5. Display\n6. Exit\n";
cout << "Enter your choice: ";
cin >> choice;
switch (choice) {
case 1:
cout << "Enter value to push: ";
cin >> value;
s.push(value);
break;
case 2:
s.pop();
break;
case 3:
s.peek();
break;
case 4:
cout << "Enter position from top to peep: ";
cin >> pos;
s.peep(pos);
break;
case 5:
s.display();
break;
case 6:
cout << "Exiting...\n";
break;
default:
cout << "Invalid Choice!\n";
}
} while (choice != 6);
return 0;
}