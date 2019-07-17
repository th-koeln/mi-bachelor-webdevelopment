const adder = (x, y) => x + y

test('add two numbers', () => {
  expect(adder(2, 1)).toBe(3)
})

test('add two more numbers', () => {
  expect(adder(2, 2)).toBe(4)
})
