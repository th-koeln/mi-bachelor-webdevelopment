class Database {
  constructor (connection) {
    this.connection = connection
  }

  write (key, data) {
    this.connection.set(key, JSON.stringify(data))
  }

  read (key) {
    return new Promise((resolve, reject) => {
      this.connection.get(key, (err, result) => {
        if (result) {
          resolve(JSON.parse(result))
        } else {
          reject(err)
        }
      })
    })
  }
}

exports.create = (connection) => new Database(connection)
