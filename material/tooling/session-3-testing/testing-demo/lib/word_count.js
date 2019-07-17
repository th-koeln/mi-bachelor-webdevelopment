class WordCounter {
  count (input) {
    const wordsByNumber = input
      .split(/\W/)
      .reduce((acc, word) => {
        if (word.trim() !== '') {
          const count = (acc[word.toLowerCase()] || 0) + 1
          acc[word.toLowerCase()] = count
        }

        return acc
      }, {})

    return Object.entries(wordsByNumber).sort((a, b) => b[1] - a[1])
  }
}

exports.create = () => new WordCounter()
