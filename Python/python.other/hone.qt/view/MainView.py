# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'main.ui'
#
# Created by: PyQt5 UI code generator 5.9.2
#
# WARNING! All changes made in this file will be lost!

from PyQt5 import QtCore, QtGui, QtWidgets

class Ui_LoginWindow(object):
    def setupUi(self, LoginWindow):
        LoginWindow.setObjectName("LoginWindow")
        LoginWindow.resize(628, 454)
        self.centralwidget = QtWidgets.QWidget(LoginWindow)
        self.centralwidget.setObjectName("centralwidget")
        self.login = QtWidgets.QPushButton(self.centralwidget)
        self.login.setGeometry(QtCore.QRect(120, 250, 81, 41))
        self.login.setCursor(QtGui.QCursor(QtCore.Qt.PointingHandCursor))
        self.login.setObjectName("login")
        self.quit = QtWidgets.QPushButton(self.centralwidget)
        self.quit.setGeometry(QtCore.QRect(330, 250, 81, 41))
        self.quit.setCursor(QtGui.QCursor(QtCore.Qt.PointingHandCursor))
        self.quit.setObjectName("quit")
        self.label = QtWidgets.QLabel(self.centralwidget)
        self.label.setEnabled(True)
        self.label.setGeometry(QtCore.QRect(90, 80, 54, 12))
        self.label.setObjectName("label")
        self.user_text = QtWidgets.QLineEdit(self.centralwidget)
        self.user_text.setGeometry(QtCore.QRect(170, 70, 241, 31))
        self.user_text.setCursorPosition(0)
        self.user_text.setClearButtonEnabled(False)
        self.user_text.setObjectName("user_text")
        self.user_tip = QtWidgets.QLabel(self.centralwidget)
        self.user_tip.setGeometry(QtCore.QRect(430, 80, 131, 16))
        font = QtGui.QFont()
        font.setBold(True)
        font.setWeight(75)
        self.user_tip.setFont(font)
        self.user_tip.setStyleSheet("color: rgb(244, 0, 0);")
        self.user_tip.setText("")
        self.user_tip.setObjectName("user_tip")
        self.pass_text = QtWidgets.QLineEdit(self.centralwidget)
        self.pass_text.setGeometry(QtCore.QRect(170, 130, 241, 31))
        self.pass_text.setEchoMode(QtWidgets.QLineEdit.Password)
        self.pass_text.setObjectName("pass_text")
        self.pass_tip = QtWidgets.QLabel(self.centralwidget)
        self.pass_tip.setGeometry(QtCore.QRect(430, 140, 131, 16))
        font = QtGui.QFont()
        font.setBold(True)
        font.setWeight(75)
        self.pass_tip.setFont(font)
        self.pass_tip.setStyleSheet("color: rgb(255, 21, 0);")
        self.pass_tip.setText("")
        self.pass_tip.setObjectName("pass_tip")
        self.label_4 = QtWidgets.QLabel(self.centralwidget)
        self.label_4.setGeometry(QtCore.QRect(90, 140, 54, 12))
        self.label_4.setObjectName("label_4")
        LoginWindow.setCentralWidget(self.centralwidget)
        self.menubar = QtWidgets.QMenuBar(LoginWindow)
        self.menubar.setGeometry(QtCore.QRect(0, 0, 628, 23))
        self.menubar.setObjectName("menubar")
        LoginWindow.setMenuBar(self.menubar)
        self.statusbar = QtWidgets.QStatusBar(LoginWindow)
        self.statusbar.setObjectName("statusbar")
        LoginWindow.setStatusBar(self.statusbar)

        self.retranslateUi(LoginWindow)
        QtCore.QMetaObject.connectSlotsByName(LoginWindow)

    def retranslateUi(self, LoginWindow):
        _translate = QtCore.QCoreApplication.translate
        LoginWindow.setWindowTitle(_translate("LoginWindow", "MainWindow"))
        self.login.setText(_translate("LoginWindow", "登 录"))
        self.quit.setText(_translate("LoginWindow", "退 出"))
        self.label.setText(_translate("LoginWindow", "用户名:"))
        self.user_text.setPlaceholderText(_translate("LoginWindow", "请输入账号"))
        self.pass_text.setPlaceholderText(_translate("LoginWindow", "请输入密码"))
        self.label_4.setText(_translate("LoginWindow", "密码:"))

