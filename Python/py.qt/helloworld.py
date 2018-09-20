# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'helloworld.ui'
#
# Created by: PyQt5 UI code generator 5.9.2
#
# WARNING! All changes made in this file will be lost!

from PyQt5 import QtCore, QtGui, QtWidgets

class Ui_Form(object):
    def setupUi(self, Form):
        Form.setObjectName("Form")
        Form.resize(400, 300)
        self.hello_btn = QtWidgets.QPushButton(Form)
        self.hello_btn.setGeometry(QtCore.QRect(120, 110, 101, 41))
        self.hello_btn.setAutoDefault(False)
        self.hello_btn.setDefault(False)
        self.hello_btn.setFlat(False)
        self.hello_btn.setObjectName("hello_btn")

        self.retranslateUi(Form)
        QtCore.QMetaObject.connectSlotsByName(Form)

    def retranslateUi(self, Form):
        _translate = QtCore.QCoreApplication.translate
        Form.setWindowTitle(_translate("Form", "Form"))
        self.hello_btn.setText(_translate("Form", "helloworld!"))

