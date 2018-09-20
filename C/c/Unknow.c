#include<stdio.h>
#include<malloc.h>
#define ERROR 0
#define OK 1
typedef  int ElemType; /*定义表元素的类型*/
typedef struct LNode{  /*线性表的单链表存储*/
    ElemType data;
    struct LNode *next;
}LNode,*LinkList;
 
LinkList CreateList_l (int n);/*                                   */
void PrintList(LinkList L); /*输出带头结点单链表的所有元素*/
void MergeList_L(LinkList &La,LinkList &Lb,LinkList &Lc);
/*                  */
LinkList CreateList_l(int n){
    LNode *p,*q,*head;
    int i;
    head=(LinkList)malloc(sizeof(LNode));      
 head->next=NULL;
    p=head;
    for(i=0;i<n;i++){
       q=(LinkList)malloc(sizeof(LNode));     
 printf("input data %i:",i+1);
       scanf("%d",&q->data);            /*输入元素值*/
       q->next=NULL;                    /*结点指针域置空*/
       p->next=q;                       /*新结点连在表末尾*/
       p=q;
    }
    return head;
}/*CreateList-l*/
 
void PrintList(LinkList L){
    LNode *p;
    p=L->next;  /*p指向单链表的第1个元素*/
    while(p!=NULL){
        printf("%5d",p->data);
        p=p->next;
    }
}/*PrintList*/
 
 
int main(){
    int n,i;ElemType e;
    LinkList LA,LB,LC ;
LA=LB=LC=NULL;            /*定义指向单链表的指针*/
    printf("please input n:");  /*输入单链表的元素个数*/
    scanf("%d",&n); 
    if(n>0){
        printf("\n 1-建立有序表LA:\n");
        LA=CreateList_l (n);        //              
        printf("\n2-输出有序表LA中数据:\n");
        PrintList(LA);  }        //                               
                             // 建立有序表LB
                             //输出有序表LB
                              // 两个有序表合并 到LC
                              //输出合并后LC链表中的数据
   
    return 0;
}
