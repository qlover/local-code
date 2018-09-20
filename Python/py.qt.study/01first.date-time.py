# 本教程来源于
# http://zetcode.com/gui/pyqt5/
from PyQt5.QtCore import QDate, QTime, QDateTime, Qt 


# 得到现在的日期
date = QDate.currentDate()  
print(date.toString(Qt.ISODate))
print(date.toString(Qt.DefaultLocaleLongDate))

# 获取当前时间
time = (QTime.currentTime()).toString()
print(time)

# 获取当前时间
now = (QDateTime.currentDateTime()).toString(Qt.DefaultLocaleLongDate)
print(now)


