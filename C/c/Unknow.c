#include<stdio.h>
#include<malloc.h>
#define ERROR 0
#define OK 1
typedef  int ElemType; /*�����Ԫ�ص�����*/
typedef struct LNode{  /*���Ա�ĵ�����洢*/
    ElemType data;
    struct LNode *next;
}LNode,*LinkList;
 
LinkList CreateList_l (int n);/*                                   */
void PrintList(LinkList L); /*�����ͷ��㵥���������Ԫ��*/
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
       scanf("%d",&q->data);            /*����Ԫ��ֵ*/
       q->next=NULL;                    /*���ָ�����ÿ�*/
       p->next=q;                       /*�½�����ڱ�ĩβ*/
       p=q;
    }
    return head;
}/*CreateList-l*/
 
void PrintList(LinkList L){
    LNode *p;
    p=L->next;  /*pָ������ĵ�1��Ԫ��*/
    while(p!=NULL){
        printf("%5d",p->data);
        p=p->next;
    }
}/*PrintList*/
 
 
int main(){
    int n,i;ElemType e;
    LinkList LA,LB,LC ;
LA=LB=LC=NULL;            /*����ָ�������ָ��*/
    printf("please input n:");  /*���뵥�����Ԫ�ظ���*/
    scanf("%d",&n); 
    if(n>0){
        printf("\n 1-���������LA:\n");
        LA=CreateList_l (n);        //              
        printf("\n2-��������LA������:\n");
        PrintList(LA);  }        //                               
                             // ���������LB
                             //��������LB
                              // ���������ϲ� ��LC
                              //����ϲ���LC�����е�����
   
    return 0;
}
