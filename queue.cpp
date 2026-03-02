// #include <iostream>
// using namespace std;

// #define SIZE 5   // maximum size of queue

// class Queue {
// private:
//     int arr[SIZE];
//     int front, rear;

// public:
//     Queue() {
//         front = -1;
//         rear = -1;
//     }

//     // Function to insert (enqueue) element
//     void enqueue(int value) {
//         if (rear == SIZE - 1) {
//             cout << "Queue is Full! Cannot insert " << value << endl;
//         } else {
//             if (front == -1)
//                 front = 0;
//             rear++;
//             arr[rear] = value;
//             cout << "Element " << value << " inserted successfully.\n";
//         }
//     }

//     // Function to delete (dequeue) element
//     void dequeue() {
//         if (front == -1 || front > rear) {
//             cout << "Queue is Empty! Nothing to delete.\n";
//         } else {
//             cout << "Deleted element: " << arr[front] << endl;
//             front++;
//         }
//     }

//     // Function to display all elements
//     void display() {
//         if (front == -1 || front > rear) {
//             cout << "Queue is Empty.\n";
//         } else {
//             cout << "Queue elements are: ";
//             for (int i = front; i <= rear; i++) {
//                 cout << arr[i] << " ";
//             }
//             cout << endl;
//         }
//     }
// };

// // Driver Code
// int main() {
//     Queue q;
//     int choice, value;

//     cout << "=== Queue Implementation (User-Defined) ===" << endl;

//     do {
//         cout << "\nMenu:\n";
//         cout << "1. Enqueue (Insert)\n";
//         cout << "2. Dequeue (Delete)\n";
//         cout << "3. Display Queue\n";
//         cout << "4. Exit\n";
//         cout << "Enter your choice: ";
//         cin >> choice;

//         switch (choice) {
//         case 1:
//             cout << "Enter value to insert: ";
//             cin >> value;
//             q.enqueue(value);
//             break;

//         case 2:
//             q.dequeue();
//             break;

//         case 3:
//             q.display();
//             break;

//         case 4:
//             cout << "Exiting program. Thank you!\n";
//             break;

//         default:
//             cout << "Invalid choice! Please try again.\n";
//         }
//     } while (choice != 4);

//     return 0;
// }
#include <iostream>
using namespace std;

class CircularQueue {
    int *arr;
    int front, rear, size;

public:
    // constructor
    CircularQueue(int s) {
        size = s;
        arr = new int[size];
        front = -1;
        rear = -1;
    }

    // enqueue (insert element)
    void enqueue(int value) {
        if ((front == 0 && rear == size - 1) || (rear + 1) % size == front) {
            cout << "Queue is Full!" << endl;
        } else {
            if (front == -1) // first element
                front = rear = 0;
            else
                rear = (rear + 1) % size;
            arr[rear] = value;
            cout << value << " added to queue." << endl;
        }
    }

    // dequeue (delete element)
    void dequeue() {
        if (front == -1) {
            cout << "Queue is Empty!" << endl;
        } else {
            cout << arr[front] << " removed from queue." << endl;
            if (front == rear) // only one element
                front = rear = -1;
            else
                front = (front + 1) % size;
        }
    }

    // display elements
    void display() {
        if (front == -1) {
            cout << "Queue is Empty!" << endl;
        } else {
            cout << "Queue elements: ";
            int i = front;
            while (true) {
                cout << arr[i] << " ";
                if (i == rear)
                    break;
                i = (i + 1) % size;
            }
            cout << endl;
        }
    }

    // destructor
    ~CircularQueue() {
        delete[] arr;
    }
};

// main function
int main() {
    int n, choice, value;
    cout << "Enter size of Circular Queue: ";
    cin >> n;

    CircularQueue q(n);

    do {
        cout << "\n1. Enqueue\n2. Dequeue\n3. Display\n4. Exit\n";
        cout << "Enter your choice: ";
        cin >> choice;

        switch (choice) {
            case 1:
                cout << "Enter value: ";
                cin >> value;
                q.enqueue(value);
                break;
            case 2:
                q.dequeue();
                break;
            case 3:
                q.display();
                break;
            case 4:
                cout << "Exiting..." << endl;
                break;
            default:
                cout << "Invalid choice!" << endl;
        }
    } while (choice != 4);

    return 0;
}

