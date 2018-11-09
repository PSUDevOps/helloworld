'use strict';

const express = require('express');

// Constants
const PORT = 8080;
const HOST = '0.0.0.0';

// App
const app = express();
let COUNT = 0

app.get('/', (req, res) => {
  COUNT++
  res.send(`Total counts ${COUNT}`);
});

app.listen(PORT, HOST);
console.log(`Running on http://${HOST}:${PORT}`);