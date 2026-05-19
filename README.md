DSA: Data structure and algorithms
data structure is way to store data.
We structure data in different ways depending on what data we have, and what we want to do with it.
Algorithms:
An algorithms is set of step by step insturctions to solve given problems.
Data Structures together with Algorithms
Data structures and algorithms (DSA) go hand in hand. A data structure is not worth much if you cannot search through it or manipulate it efficiently using algorithms, and the algorithms in this tutorial are not worth much without a data structure to work on.
DSA is about finding efficient ways to store and retrieve data, to perform operations on data, and to solve specific problems.
By understanding DSA, you can:
•	Decide which data structure or algorithm is best for a given situation.
•	Make programs that run faster or use less memory.
•	Understand how to approach complex problems and solve them in a systematic way.
•	Problems:1 Fibonacci
•	The two first Fibonacci numbers are 0 and 1, and the next Fibonacci number is always the sum of the two previous numbers, so we get 0, 1, 1, 2, 3, 5, 8, 13, 21, ...


**TOPIC 1
**Array with DSA
An array is a data structure used to store multiple elements.



**Task 1
Lowest and highest values find from array.
1 Below is the algorithm to find the lowest number in an array.
How it works:
1.	Go through the values in the array one by one.
2.	Check if the current value is the lowest so far, and if it is, store it.
3.	After looking at all the values, the stored value will be the lowest of all values in the array.
2    Variable 'minVal' = array[0]
    For each element in the array
       If current element < minVal
          minVal = current element

Logic: lowest_value ko array ki first real value se initialize kar rahe hain
taake comparisons accurate hon.
 Agar array me saari positive values haintoh koi bhi value 0 se choti nahi hogi isliye lowest_value update nahi hoga
NOTE: muje array k  har akh index k values ko check karna.
// akh or variable banaoga jise ye compaire karga. Value h yan nhi h.agr nhi hogi wo values add ho jai. Or echo kar do.
