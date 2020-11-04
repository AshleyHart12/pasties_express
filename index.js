const mysql = require('mysql');
const express = require('express');
const bodyParser = require('body-parser');
var app = express();

app.set("view engine", "php");
app.use(bodyParser.urlencoded({extended: true}));
// app.use(express.static(__dirname + "/views/index.ejs"));

var mysqlConnection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'Iam33!',
    database: 'stickersDB'
})

app.get('/', (req, res) => {
    var brand = 'SELECT * FROM stickers ';
    // mysqlConnection.query(q, (err, rows, fields) => {
    //     if(err) throw err;
    //         res.send(rows[0].brand);
    // });
    // res.render() will automatically inside a views folder
    res.render('index')
});



app.listen(3000, function(){
    console.log("Server running on 3000!");
});



