# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'user-choose.ui'
#
# Created by: PyQt5 UI code generator 5.9.2
#
# WARNING! All changes made in this file will be lost!

from PyQt5 import QtCore, QtGui, QtWidgets

class Ui_UserChoose(object):
    def setupUi(self, UserChoose):
        UserChoose.setObjectName("UserChoose")
        UserChoose.resize(798, 596)
        self.items_buttonx = QtWidgets.QGroupBox(UserChoose)
        self.items_buttonx.setGeometry(QtCore.QRect(160, 60, 451, 151))
        self.items_buttonx.setTitle("")
        self.items_buttonx.setObjectName("items_buttonx")
        self.dis5 = QtWidgets.QPushButton(self.items_buttonx)
        self.dis5.setGeometry(QtCore.QRect(130, 90, 71, 41))
        self.dis5.setObjectName("dis5")
        self.dis4 = QtWidgets.QPushButton(self.items_buttonx)
        self.dis4.setGeometry(QtCore.QRect(30, 90, 71, 41))
        self.dis4.setObjectName("dis4")
        self.dis6 = QtWidgets.QPushButton(self.items_buttonx)
        self.dis6.setGeometry(QtCore.QRect(220, 90, 71, 41))
        self.dis6.setObjectName("dis6")
        self.dis1 = QtWidgets.QPushButton(self.items_buttonx)
        self.dis1.setGeometry(QtCore.QRect(70, 30, 71, 41))
        self.dis1.setObjectName("dis1")
        self.dis2 = QtWidgets.QPushButton(self.items_buttonx)
        self.dis2.setGeometry(QtCore.QRect(170, 30, 71, 41))
        self.dis2.setObjectName("dis2")
        self.dis3 = QtWidgets.QPushButton(self.items_buttonx)
        self.dis3.setGeometry(QtCore.QRect(270, 30, 71, 41))
        self.dis3.setObjectName("dis3")
        self.dis7 = QtWidgets.QPushButton(self.items_buttonx)
        self.dis7.setGeometry(QtCore.QRect(310, 90, 71, 41))
        self.dis7.setObjectName("dis7")
        self.groupBox = QtWidgets.QGroupBox(UserChoose)
        self.groupBox.setGeometry(QtCore.QRect(30, 240, 731, 301))
        self.groupBox.setObjectName("groupBox")
        self.line = QtWidgets.QFrame(self.groupBox)
        self.line.setGeometry(QtCore.QRect(280, 30, 25, 241))
        self.line.setFrameShape(QtWidgets.QFrame.VLine)
        self.line.setFrameShadow(QtWidgets.QFrame.Sunken)
        self.line.setObjectName("line")
        self.dishes1Button = QtWidgets.QPushButton(self.groupBox)
        self.dishes1Button.setGeometry(QtCore.QRect(40, 40, 91, 81))
        self.dishes1Button.setObjectName("dishes1Button")
        self.dishes2Button = QtWidgets.QPushButton(self.groupBox)
        self.dishes2Button.setGeometry(QtCore.QRect(140, 40, 91, 81))
        self.dishes2Button.setObjectName("dishes2Button")
        self.dishes4Button = QtWidgets.QPushButton(self.groupBox)
        self.dishes4Button.setGeometry(QtCore.QRect(140, 130, 91, 81))
        self.dishes4Button.setObjectName("dishes4Button")
        self.dishes3Button = QtWidgets.QPushButton(self.groupBox)
        self.dishes3Button.setGeometry(QtCore.QRect(40, 130, 91, 81))
        self.dishes3Button.setObjectName("dishes3Button")
        self.showOrderList = QtWidgets.QTextEdit(self.groupBox)
        self.showOrderList.setEnabled(True)
        self.showOrderList.setGeometry(QtCore.QRect(310, 30, 381, 241))
        self.showOrderList.setReadOnly(False)
        self.showOrderList.setObjectName("showOrderList")
        self.okOrderButton = QtWidgets.QPushButton(UserChoose)
        self.okOrderButton.setGeometry(QtCore.QRect(250, 550, 201, 41))
        self.okOrderButton.setObjectName("okOrderButton")
        self.Quit = QtWidgets.QPushButton(UserChoose)
        self.Quit.setGeometry(QtCore.QRect(630, 10, 75, 23))
        self.Quit.setObjectName("Quit")
        self.Return = QtWidgets.QPushButton(UserChoose)
        self.Return.setGeometry(QtCore.QRect(710, 10, 75, 23))
        self.Return.setObjectName("Return")
        self.label_4 = QtWidgets.QLabel(UserChoose)
        self.label_4.setGeometry(QtCore.QRect(10, 10, 54, 12))
        self.label_4.setObjectName("label_4")
        self.user_text = QtWidgets.QLabel(UserChoose)
        self.user_text.setGeometry(QtCore.QRect(70, 10, 81, 16))
        self.user_text.setText("")
        self.user_text.setObjectName("user_text")

        self.retranslateUi(UserChoose)
        QtCore.QMetaObject.connectSlotsByName(UserChoose)

    def retranslateUi(self, UserChoose):
        _translate = QtCore.QCoreApplication.translate
        UserChoose.setWindowTitle(_translate("UserChoose", "用户点菜"))
        self.dis5.setText(_translate("UserChoose", "红酒"))
        self.dis4.setText(_translate("UserChoose", "白酒"))
        self.dis6.setText(_translate("UserChoose", "啤酒"))
        self.dis1.setText(_translate("UserChoose", "热菜"))
        self.dis2.setText(_translate("UserChoose", "凉菜"))
        self.dis3.setText(_translate("UserChoose", "甜点"))
        self.dis7.setText(_translate("UserChoose", "饮料"))
        self.groupBox.setTitle(_translate("UserChoose", "菜单列表"))
        self.dishes1Button.setText(_translate("UserChoose", "菜品一"))
        self.dishes2Button.setText(_translate("UserChoose", "菜品二"))
        self.dishes4Button.setText(_translate("UserChoose", "菜品三"))
        self.dishes3Button.setText(_translate("UserChoose", "菜品三"))
        self.showOrderList.setHtml(_translate("UserChoose", "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0//EN\" \"http://www.w3.org/TR/REC-html40/strict.dtd\">\n"
"<html><head><meta name=\"qrichtext\" content=\"1\" /><style type=\"text/css\">\n"
"p, li { white-space: pre-wrap; }\n"
"</style></head><body style=\" font-family:\'SimSun\'; font-size:9pt; font-weight:400; font-style:normal;\">\n"
"<p style=\"-qt-paragraph-type:empty; margin-top:0px; margin-bottom:0px; margin-left:0px; margin-right:0px; -qt-block-indent:0; text-indent:0px;\"><br /></p></body></html>"))
        self.okOrderButton.setText(_translate("UserChoose", "确 认"))
        self.Quit.setText(_translate("UserChoose", "更换账号"))
        self.Return.setText(_translate("UserChoose", "返回"))
        self.label_4.setText(_translate("UserChoose", "当前用户："))

