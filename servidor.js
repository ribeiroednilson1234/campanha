/*{ "_comment":"O segundo arquivo é o nosso aplicativo de exemplo, um servidor simples do tipo (olá, mundo). Ainda dentro do arquivo src/, adicione o seguinte conteúdo a server.js"
} */
'use strict';

const express = require('express')
const app = express()
const port = 8080
const host = '127.0.1.53'

app.get('/', (req, res) => {
  res.send('Hello World from inside the rock!');
});

app.listen(port, host, () => {
  console.log(`Running on http://${host}:${port}`);
});
