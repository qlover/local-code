# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'manager.ui'
#
# Created by: PyQt5 UI code generator 5.9.2
#
# WARNING! All changes made in this file will be lost!

from PyQt5 import QtCore, QtGui, QtWidgets

class Ui_ManagerWindow(object):
    def setupUi(self, ManagerWindow):
        ManagerWindow.setObjectName("ManagerWindow")
        ManagerWindow.resize(504, 485)
        self.label = QtWidgets.QLabel(ManagerWindow)
        self.label.setGeometry(QtCore.QRect(100, 10, 271, 61))
        font = QtGui.QFont()
        font.setPointSize(22)
        self.label.setFont(font)
        self.label.setAlignment(QtCore.Qt.AlignCenter)
        self.label.setObjectName("label")
        self.orderManagerButton = QtWidgets.QPushButton(ManagerWindow)
        self.orderManagerButton.setGeometry(QtCore.QRect(140, 130, 221, 41))
        self.orderManagerButton.setObjectName("orderManagerButton")
        self.addUserButton = QtWidgets.QPushButton(ManagerWindow)
        self.addUserButton.setGeometry(QtCore.QRect(120, 270, 121, 51))
        self.addUserButton.setObjectName("addUserButton")
        self.alertUserButton = QtWidgets.QPushButton(ManagerWindow)
        self.alertUserButton.setGeometry(QtCore.QRect(250, 340, 121, 51))
        self.alertUserButton.setObjectName("alertUserButton")
        self.frobidUserButton = QtWidgets.QPushButton(ManagerWindow)
        self.frobidUserButton.setGeometry(QtCore.QRect(120, 340, 121, 51))
        self.frobidUserButton.setObjectName("frobidUserButton")
        self.deletedUserButton = QtWidgets.QPushButton(ManagerWindow)
        self.deletedUserButton.setGeometry(QtCore.QRect(250, 270, 121, 51))
        self.deletedUserButton.setObjectName("deletedUserButton")
        self.Quit = QtWidgets.QPushButton(ManagerWindow)
        self.Quit.setGeometry(QtCore.QRect(430, 0, 75, 23))
        self.Quit.setObjectName("Quit")

        self.retranslateUi(ManagerWindow)
        QtCore.QMetaObject.connectSlotsByName(ManagerWindow)

    def retranslateUi(self, ManagerWindow):
        _translate = QtCore.QCoreApplication.translate
        ManagerWindow.setWindowTitle(_translate("ManagerWindow", "点菜/查询"))
        self.label.setText(_translate("ManagerWindow", "管理员界面"))
        self.orderManagerButton.setText(_translate("ManagerWindow", "点菜管理"))
        self.addUserButton.setText(_translate("ManagerWindow", "增加员工工号"))
        self.alertUserButton.setText(_translate("ManagerWindow", "修改员工密码"))
        self.frobidUserButton.setText(_translate("ManagerWindow", "禁止员工登录"))
        self.deletedUserButton.setText(_translate("ManagerWindow", "删除员工工号"))
        self.Quit.setText(_translate("ManagerWindow", "退出"))

