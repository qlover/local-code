# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'cook.ui'
#
# Created by: PyQt5 UI code generator 5.9.2
#
# WARNING! All changes made in this file will be lost!

from PyQt5 import QtCore, QtGui, QtWidgets

class Ui_CookWindow(object):
    def setupUi(self, CookWindow):
        CookWindow.setObjectName("CookWindow")
        CookWindow.resize(633, 522)
        self.scrollArea = QtWidgets.QScrollArea(CookWindow)
        self.scrollArea.setGeometry(QtCore.QRect(0, 0, 631, 521))
        self.scrollArea.setWidgetResizable(True)
        self.scrollArea.setObjectName("scrollArea")
        self.scrollAreaWidgetContents = QtWidgets.QWidget()
        self.scrollAreaWidgetContents.setGeometry(QtCore.QRect(0, 0, 629, 519))
        self.scrollAreaWidgetContents.setObjectName("scrollAreaWidgetContents")
        self.showList = QtWidgets.QTextEdit(self.scrollAreaWidgetContents)
        self.showList.setGeometry(QtCore.QRect(10, 100, 601, 411))
        self.showList.setObjectName("showList")
        self.label = QtWidgets.QLabel(self.scrollAreaWidgetContents)
        self.label.setGeometry(QtCore.QRect(220, 40, 181, 31))
        font = QtGui.QFont()
        font.setFamily("Algerian")
        font.setPointSize(23)
        font.setBold(True)
        font.setItalic(False)
        font.setUnderline(False)
        font.setWeight(75)
        font.setStrikeOut(False)
        font.setKerning(True)
        self.label.setFont(font)
        self.label.setAlignment(QtCore.Qt.AlignCenter)
        self.label.setObjectName("label")
        self.now_cooker = QtWidgets.QLabel(self.scrollAreaWidgetContents)
        self.now_cooker.setGeometry(QtCore.QRect(10, 10, 71, 16))
        self.now_cooker.setText("")
        self.now_cooker.setObjectName("now_cooker")
        self.Return = QtWidgets.QPushButton(self.scrollAreaWidgetContents)
        self.Return.setGeometry(QtCore.QRect(550, 0, 75, 23))
        self.Return.setObjectName("Return")
        self.Quit = QtWidgets.QPushButton(self.scrollAreaWidgetContents)
        self.Quit.setGeometry(QtCore.QRect(470, 0, 75, 23))
        self.Quit.setObjectName("Quit")
        self.printChooseButton = QtWidgets.QPushButton(self.scrollAreaWidgetContents)
        self.printChooseButton.setGeometry(QtCore.QRect(470, 40, 151, 41))
        self.printChooseButton.setObjectName("printChooseButton")
        self.scrollArea.setWidget(self.scrollAreaWidgetContents)

        self.retranslateUi(CookWindow)
        QtCore.QMetaObject.connectSlotsByName(CookWindow)

    def retranslateUi(self, CookWindow):
        _translate = QtCore.QCoreApplication.translate
        CookWindow.setWindowTitle(_translate("CookWindow", "厨师管理界面"))
        self.label.setText(_translate("CookWindow", "厨师管理"))
        self.Return.setText(_translate("CookWindow", "返回"))
        self.Quit.setText(_translate("CookWindow", "退出"))
        self.printChooseButton.setText(_translate("CookWindow", "打印菜单"))

