const express=require('express');
const app=express();
const mysql= require('mysql');
const myconn=require('express-myconnection')
const cors=require('cors')
app.set('port',process.env.PORT||9000)
 const routes =require('./routes')
const dbOption={
    host:'localhost',
    port:3306,
    user:'nodeuser',
    password:'alexis',
    database:'proyecto_gcs'
}


//middleware
app.use(myconn(mysql,dbOption,'single'))
app.use(express.json())
app.use(cors())
//rutas 
app.get('/',(req,res)=>{
    res.send('hola que tal')
})
app.use('/api', require('./routes'))
app.use('/login', require('./routes2'))

//server 
app.listen(app.get('port'),()=>{
    console.log('server running on port 9000')
})




  































