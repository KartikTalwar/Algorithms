"""

Given a range in the form of a list sorted or unsorted, find the missing number

"""


def find_missing_element_sorted(arr):
  first = arr[0]

  for i in range(1, len(arr)-1):
    if arr[i+1] - arr[i] != 1:
      return arr[i]+1

  return None


def find_missing_element_unsorted_1(arr):
  max = arr[0]
  min = arr[1]
  table = {}

  for i in range(len(arr)):
    if arr[i] < min:
      min = arr[i]
    if arr[i] > max:
      max = arr[i]
    table[arr[i]] = True

  for j in range(min, max+1):
    if j in table:
      pass
    else:
      return j


def find_missing_element_unsorted_2(arr):
  min = arr[0]
  max = arr[1]
  counter = 0
  total = 0

  for i in range(len(arr)):
    if arr[i] < min:
      min = arr[i]
    if arr[i] > max:
      max = arr[i]
    counter += arr[i]

  for j in range(min, max+1):
    total += j

  return total - counter


def find_missing_element_unsorted_3(arr):
  x1 = 0
  x2 = 0
  max = arr[0]
  min = arr[1]

  for k in range(len(arr)):
    if arr[k] < min:
      min = arr[k]
    if arr[k] > max:
      max = arr[k]

  for i in range(len(arr)):
    x2 ^= arr[i] 

  for j in range(min, max+1):
    x1 ^= j

  return x1^x2



if __name__ == '__main__':

  arr1 = [1,2,3,4,5,7,8,9]
  arr2 = [9,2,1,5,7,3,8,4]

  print 'Sorted:    ', find_missing_element_sorted(arr1)
  print 'Unsorted1: ', find_missing_element_unsorted_1(arr2)
  print 'Unsorted2: ', find_missing_element_unsorted_2(arr2)
  print 'Unsorted3: ', find_missing_element_unsorted_3(arr2)

