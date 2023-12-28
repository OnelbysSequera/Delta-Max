const mysql = require('mysql');

const credentials = require('./keys');
const connection = mysql.createConnection(credentials)

connection.connect(err => {
    if (err)//hubo un error en la conexión
        throw err; // rompemos la ejecucción por que no podemos continuar sin DB    
  
})


module.exports = connection;