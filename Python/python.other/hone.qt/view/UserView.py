# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'user.ui'
#
# Created by: PyQt5 UI code generator 5.9.2
#
# WARNING! All changes made in this file will be lost!

from PyQt5 import QtCore, QtGui, QtWidgets

class Ui_UserWindow(object):
    def setupUi(self, UserWindow):
        UserWindow.setObjectName("UserWindow")
        UserWindow.resize(579, 487)
        self.orderButton = QtWidgets.QPushButton(UserWindow)
        self.orderButton.setGeometry(QtCore.QRect(90, 200, 101, 41))
        self.orderButton.setObjectName("orderButton")
        self.queryButton = QtWidgets.QPushButton(UserWindow)
        self.queryButton.setGeometry(QtCore.QRect(360, 200, 101, 41))
        self.queryButton.setObjectName("queryButton")

        self.retranslateUi(UserWindow)
        QtCore.QMetaObject.connectSlotsByName(UserWindow)

    def retranslateUi(self, UserWindow):
        _translate = QtCore.QCoreApplication.translate
        UserWindow.setWindowTitle(_translate("UserWindow", "点菜"))
        self.orderButton.setText(_translate("UserWindow", "点菜"))
        self.queryButton.setText(_translate("UserWindow", "查询"))

