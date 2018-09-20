#创建这个表
create table enum_set(
    id int auto_increment primary key,
    sex enum('男','女'),
    fav set("篮球","排球","台球","足球")
);
#插入数据
insert into enum_set(id,sex,fav)
   values(null,'男','篮球');

insert into enum_set(id,sex,fav)
   values(null,'女','篮球,足球');

insert into enum_set(id,sex,fav)
   values(null,'1',1);

insert into enum_set(id,sex,fav)
   values(null,'2',5);

