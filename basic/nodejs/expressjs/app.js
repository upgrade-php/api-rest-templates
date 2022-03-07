const app = require('express')()

app.get('/', function (req, res) {
  res.status(200).json({
    'success': true,
    'data': 'Hello Word'
  });
});


module.exports = app;
