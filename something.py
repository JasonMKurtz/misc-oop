#!/usr/bin/python

x=int(raw_input('Enter a number: '))
num = 0

while num**2 < abs(x):
    num = num + 1
if num**2 == x:
    if num < 0:
        num = -num
    print('The square root of ' + str(x) + ' is ' + str(num))
else:
    print(x + 'is not a perfect square.')


