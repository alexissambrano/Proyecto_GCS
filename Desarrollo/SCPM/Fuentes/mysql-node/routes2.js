const express=require('express');
const routes=express.Router();
routes.get('/',(req,res)=>{
    req.getConnection((err,conn)=>{
        if(err)return res.send(err)
       
        conn.query('SELECT * FROM usuario',(err,rows)=>{
            if(err)return res.send(err)
            res.json(rows)
        })
    })
})

routes.post('/',(req,res)=>{
    req.getConnection((err,conn)=>{
        if(err)return res.send(err)
       // console.log(req.body)
        conn.query('INSERT INTO usuario set ?',[req.body],(err,rows)=>{
            if(err)return res.send(err)
            res.json('insertado')
        })
    })
})
module.exports=routes;