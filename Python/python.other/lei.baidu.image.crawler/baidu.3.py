import urllib.request
import os
import re
import sys
url=r'http://image.baidu.com/search/index?tn=baiduimage&ipn=r&ct=201326592&cl=2&lm=-1&st=-1&fm=index&fr=&sf=1&fmq=&pv=&ic=0&nc=1&z=&se=1&showtab=0&fb=0&width=&height=&face=0&istype=2&ie=utf-8&word=%E5%8A%A8%E6%BC%AB&oq=%E5%8A%A8%E6%BC%AB&rsp=-1'

imgPath=r'F:\img'

imgHtml=urllib.request.urlopen(url).read().decode('utf-8')
#test html
#print(imgHtml)
urls=re.findall(r'"objURL":"(.*?)"',imgHtml)
print(urls)
sys.exit(0)
# 'http://c.hiphotos.baidu.com/image/pic/item/fc1f4134970a304e97e16f19dbc8a786c8175c16.jpg'
# http://img1.imgtn.bdimg.com/it/u=842510423,3942623262&fm=27&gp=0.jpg
if not os.path.isdir(imgPath):
    os.mkdir(imgPath)

index=1
for url in urls:
    print("下载:",url)
    
    #未能正确获得网页 就进行异常处理
    try:
        res=urllib.request.urlopen(url)

        if str(res.status)!='200':
            print('未下载成功：',url)
            continue
    except Exception as e:
        print('未下载成功：',url)

    filename=os.path.join(imgPath,str(index)+'.jpg')
    with open(filename,'wb') as f:
        f.write(res.read())
        print('下载完成\n')
        index+=1
print("下载结束，一共下载了 %s 张图片"% (index-1))