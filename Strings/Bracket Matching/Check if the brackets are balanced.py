
class Stack(object):

  def __init__(self):
    self.data = []

  def push(self, value):
    self.data.append(value)

  def pop(self):
    if len(self.data) > 0:
      last = self.data[len(self.data)-1]
      del self.data[len(self.data)-1]
      return last

  def peek(self):
    return self.data[len(self.data)-1]

  def empty(self):
    return len(self.data) == 0


def has_balanced_brackets(input):
  stk = Stack()

  for s in input:
    if s == '[' or s == '(' or s =='{':
      stk.push(s)
    if s == ']' and stk.peek() == '[' or s == ')' and stk.peek() == '(' or s == '}' and stk.peek() == '{':
      stk.pop()

  return stk.empty()



if __name__ == '__main__':

  good = '[ { { { { { } } } } } { { { } } }]'
  bad  = '[ { { { { { } } } } } { { { { } } }]'

  print 'good :', has_balanced_brackets(good)
  print 'bad  :', has_balanced_brackets(bad)


