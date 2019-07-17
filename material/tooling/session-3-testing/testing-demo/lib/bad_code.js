function myFunc (x) {
  return x * x
}
console.log(myFunc(2))

// Further down in the file
myFunc = (x, y) => {
  return x * y
}
console.log(myFunc(2, 3))
