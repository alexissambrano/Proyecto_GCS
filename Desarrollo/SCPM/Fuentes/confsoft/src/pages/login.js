import React, { Component } from 'react';
import   '../css/login.css'
import axios from 'axios';
import md5 from 'md5';
import Cookies from 'universal-cookie/es6';
import "../components/sesion.css"
 

const baseurl='http://localhost:9000/login';
const cookies = new Cookies();
class Login extends Component {
      state={
        form:{
            username: '',
            password: ''
        }
    }

    handleChange=async e=>{
        await this.setState({
            form:{
                ...this.state.form,
                [e.target.name]: e.target.value
            }
        });
    }

    iniciarSesion=async()=>{
        await axios.get(baseurl, {params: {username: this.state.form.username, password: md5(this.state.form.password)}})
        .then(response=>{
            return response.data;
        })
        .then(response=>{
            if(response.length>0){
                var respuesta=response[0];
                cookies.set('id', respuesta.id, {path: "/"});
                cookies.set('apellido_paterno', respuesta.apellido_paterno, {path: "/"});
                cookies.set('apellido_materno', respuesta.apellido_materno, {path: "/"});
                cookies.set('nombre', respuesta.nombre, {path: "/"});
                cookies.set('username', respuesta.username, {path: "/"});
                alert(`Bienvenido ${respuesta.nombre} ${respuesta.apellido_paterno}`);
                window.location.href="./menu";
            }else{
                alert('El usuario o la contraseña no son correctos');
            }
        })
        .catch(error=>{
            console.log(error);
        })

    }

    componentDidMount() {
        if(cookies.get('username')){
            window.location.href="./menu";
        }
    }
    render() { 
        return ( <>
             
 

    <div className="container1">
            <div className="login-container">
                <div className="register">
                    <h2> Iniciar Sesion</h2>
                    <form action="">
                        
                    <input
          type="text"
          className="form-control"
          placeholder="Usuario"
          name="username"
          onChange={this.handleChange}
        />
                        <input
          type="password"
          className="form-control"
          placeholder="Contraseña"
          name="password"
          onChange={this.handleChange}
        />
                         
                        <button className="btn btn-primary" onClick={()=> this.iniciarSesion()}>Iniciar Sesión</button>
                    </form>
                </div>
                <div className="login">
                    <h2> Login </h2>
                    <div className="login-items" >
                        <button className="fb" >   Acceder con Facebook</button>
                        <button className="tw" >   Acceder con Twiter</button>
                        <button className="correo" >   Acceder con Correo</button>
                    </div>
                </div>

            </div>
         

 


        </div>
</>
         );
    }
}
 
export default Login;
   