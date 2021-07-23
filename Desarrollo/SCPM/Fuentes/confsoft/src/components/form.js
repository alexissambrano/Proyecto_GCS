  import React from 'react';
  const Form = ({book,setBook}) => {
      
    const handlechange=(e)=>{
           setBook({
               ...book,
               [e.target.name]:e.target.value
           })
       }
   
       let{titulo,autor,edicion}=book
       
   const handleSubmit=()=>{
       edicion=parseInt(edicion,10)//convierte edicion en numero base 10
       //validacion de los datos 
       if (titulo===''||autor==='' || edicion <= 0) {
           alert('todos los campos son obligatorios')
           return
       }
       //consulta
       const requestInit={
           method:'POST',
           headers:{'Content-Type':'application/json'},
           body:JSON.stringify(book)
       }
       fetch('http://localhost:9000/api',requestInit)
       .then(res=>res.json())
       .then(res=> console.log( res))
       //reiniciando state de libro
       setBook({
        
            titulo:'',
            autor:'',
            edicion:0
         
       })


   }

      return ( 
          <form onSubmit={handleSubmit}>
              <div className="mb-3">
                  <label htmlFor="title" className="form-label">Nombre</label>
                   <input value={titulo} name="titulo" type="text" onChange={handlechange} id="title" className="form-control"  />
              </div>
              <div className="mb-3">
                  <label htmlFor="title" className="form-label">Descripcion</label>
                   <input value={autor} name="autor" type="text" onChange={handlechange} id="autor" className="form-control"  />
              </div>
              <div className="mb-3">
                  <label htmlFor="title" className="form-label">Stock</label>
                   <input value={edicion} name="edicion" type="number" onChange={handlechange} id="edition" className="form-control"  />
              </div>
              <button type="submit" className="btn btn-primary">submit</button>
          </form>
       );
  }
   
  export default Form;