var connection = require('mysql');

mysql.createConnection({
	host: 'localhost',
	user: 'root',
	password: 'root',
	database: 'express1',
	port: 3306,
});

connection.connect();
// connection.end()

