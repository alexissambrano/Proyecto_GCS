import React from 'react';
import "./sesion.css"
const Sesion = () => {
    return (  
        <> 
        <div className="container1">
            <div className="login-container">
                <div className="register">
                    <h2> Registrarse</h2>
                    <form action="">
                        <input type="text" placeholder="Nombre"  className="nombre" />
                        <input type="text" placeholder="Correo" name="username"className="correo" />
                        <input type="password" placeholder="Contraseña" className="pass" />
                         
                        <input type="submit" className="submit" value="REGISTRARSE" />
                    </form>
                </div>
                <div className="login">
                    <h2>Iniciar Sesión </h2>
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
 
export default Sesion;