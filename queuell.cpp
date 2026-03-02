#include<iostream>
using namespace std;
class Node{
    public:
    int data;
    Node*next;
    Node(int newdata){
        data=newdata;
        next=NULL;
    }
};
class myQueue{
    private:
    int currsize;
    Node*front;
    Node*rear;
    public:
    myQueue(){
        currsize=0;
        front=rear=NULL;
    }
    void enqueue(int newdata){
        Node*node=new Node(newdata);
        if(is_empty()){
            front=rear=node;
        }
        else{
            rear->next=node;
            rear=node;
        }
        currsize++;
    }
    int dequeue(){
        if(is_empty()){
            cout<<"underflow"<<endl;
            return -1;
        }
        Node*ptr=front;
        int rdata=ptr->data;
        front=front->next;
        if(front==NULL){
            rear=NULL;
            delete ptr;
            return rdata;
        }
    }
    void display(){
        Node*ptr=front;
        if(is_empty()){
            cout<<"queue is empty"<<endl;
            return ;
        }
        cout<<"queue elements:"<<endl;
        while(ptr!=NULL){
            cout<<ptr->data<<" ";
            ptr=ptr->next;
        }
        cout<<endl;
    }
};
int main(){
    myQueue q;
    int choice,value;
    do{
        cout<<"Queue operations"<<endl;
        cout<<"1. insert"<<endl;
        cout<<"2. delete"<<endl;
        cout<<"3. display"<<endl;
        cout<<"4. exit"<<endl;
        cout<<"enter choice: ";
        cin>>choice;
        switch(choice){
            case 1:{
                cout<<"enter value to insert :";
                cin>>value;
                q.enqueue(value);
                break;
            }
            case 2:{
                q.dequeue();
                break;
            }
            case 3:{
                q.display();
                break;
            }
            case 4:{
                cout<<"exit";
                break;
            }
            default:
               cout<<"invalid choice";
        }
    } 
    while(choice!=4);
    return 0;
}