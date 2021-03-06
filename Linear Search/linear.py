
def search(arr, n, x):
    for i in range(0, n):
        if(arr[i] == x):
            return i
    return -1


arr = [2, 3, 4, 5, 6, 7, 8]
x = 5
n = len(arr)

result = search(arr, n, x)
if(result == -1):
    print("Element is not present in an array.")
else:
    print("Element is present at index", result)
