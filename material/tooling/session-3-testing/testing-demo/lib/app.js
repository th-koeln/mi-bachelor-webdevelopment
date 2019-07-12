const redis = require('redis')
const database = require('./database.js')

const connection = redis.createClient({
  port: 6379,
  host: '127.0.0.1'
})

connection.on('error', function (err) {
  console.log('Error ' + err)
})

const db = database.create(connection)
db.write('pinkie-pie', { name: 'Pinkie Pie' })
db.read('pinkie-pie')
  .then((pony) => {
    console.log(pony)
  })

connection.quit()
