let subject;

beforeEach(() => {
  subject = require('../lib/word_count.js').create()
});

test('count each word', () => {
  const input = 'No, no, no, I kill the bus driver.'

  expect(subject.count(input)).toEqual([
    ['no', 3],
    ['i', 1],
    ['kill', 1],
    ['the', 1],
    ['bus', 1],
    ['driver', 1]
  ])
})

test('ignore case during count', () => {
  const input = 'No, no'

  expect(subject.count(input)).toEqual([
    ['no', 2]
  ])
})

test('handle empty input', () => {
  const input = ''

  expect(subject.count(input)).toEqual([])
})
