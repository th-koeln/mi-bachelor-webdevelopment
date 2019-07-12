const database = require('../lib/database.js')

const exampleKey = 'pinkie'
const exampleData = { name: 'Pinkie Pie', type: 'Earth Pony' }

const mockConnection = {
  set: jest.fn(),
  get: jest.fn((key, cb) => {
    if (key === 'pinkie') {
      cb(null, JSON.stringify(exampleData))
    } else {
      cb(new Error('Some Error'))
    }
  })
}

test('#write calls #set on connection', () => {
  const db = database.create(mockConnection)

  db.write(exampleKey, exampleData)

  expect(mockConnection.set).toHaveBeenCalledWith(exampleKey, JSON.stringify(exampleData))
})

test('#read calls #get on connection', () => {
  const db = database.create(mockConnection)

  db.read(exampleKey)
    .then(data => {
      expect(data).toEqual(exampleData)
    })
    .catch((err) => {
      throw err
    })

  expect(mockConnection.get).toHaveBeenCalled()
})
