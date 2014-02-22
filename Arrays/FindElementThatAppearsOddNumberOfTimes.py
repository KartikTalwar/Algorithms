"""

Find the element that appears an odd number of times in an array
where all elements except one appear an even number of times

"""


def find_odd_occurrence_1(arr):
  table = {}

  for i in arr:
    if i in table:
      table[i] += 1
    else:
      table[i] = 1

  for k,v in table.iteritems():
    if v % 2 != 0:
      return k

  return None


def find_odd_occurrence_2(arr):
  first = 0

  for i in arr:
    first ^= i

  return first



if __name__ == '__main__':

  arr = [1, 1, 1, 1, 2, 2, 3, 3, 4, 4, 4]

  print find_odd_occurrence_1(arr)
  print find_odd_occurrence_2(arr)
