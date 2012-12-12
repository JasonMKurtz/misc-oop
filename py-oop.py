#!/usr/bin/python
class Test: # initialize our class
	def __init__(self,str): # constructor 
		self.str = str # set our class variable, str, to the value of our parameter
	def getstr(self): # accessor method
		return self.str #return our string

T = Test("hrm")
print T.getstr()
