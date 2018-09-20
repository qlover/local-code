
# adjustSize() 方法将标签的大小调整到文本的长度。

#焦点响应事件
def eventFilter(self, widget, event):
     #失去焦点

    if event.type() == QtCore.QEvent.FocusOut:

        print 'focus out'

        #注意要有返回值  不然会出 TypeError: invalid result type from mouseoverEvent.eventFilter()
        return False
    #获得焦点
    if event.type()==QtCore.QEvent.FocusIn:
        print 'focus in'

        return False
    else:
        # we don't care about other events
        return False