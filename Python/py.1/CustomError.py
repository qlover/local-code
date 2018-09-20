#!/usr/bin/python3

# 用户自定义异常
class MyError(Exception):
	"""docstring for MyError"""
	def __init__(self, value):
		super(MyError, self).__init__()
		self.value = value

try:
	raise MyError(2*3)
except MyError as e:
	print('My exception occurred, value:', e.value)


raise MyError('oops!')
'''
Traceback (most recent call last):
  File "CustomError.py", line 16, in <module>
    raise MyError('oops!')
__main__.MyError
'''



# 


class Error(Exception):
    """Base class for exceptions in this module."""
    pass

class InputError(Error):
    """Exception raised for errors in the input.

    Attributes:
        expression -- input expression in which the error occurred
        message -- explanation of the error
    """

    def __init__(self, expression, message):
        self.expression = expression
        self.message = message

class TransitionError(Error):
    """Raised when an operation attempts a state transition that's not
    allowed.

    Attributes:
        previous -- state at beginning of transition
        next -- attempted new state
        message -- explanation of why the specific transition is not allowed
    """

    def __init__(self, previous, next, message):
        self.previous = previous
        self.next = next
        self.message = message

