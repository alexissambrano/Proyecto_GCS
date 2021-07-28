import React from 'react';
//colspan
const Booklist = ({books,setListUpdated,book,setBook}) => {


 const handleDelete=(id)=>{
    const requestInit={
      method:'DELETE' 
     
   }
    fetch('http://localhost:9000/api/'+id,requestInit)
    .then(res=>res.json())
    .then(res=> console.log(res))
      setListUpdated(true)
 
 }   
 let{titulo,autor,edicion}=book
 const handleUpdate=(id)=>{
  if (titulo===''||autor==='' || edicion <= 0) {
    alert('todos los campos son obligatorios')
    return
}
     const requestInit={
       method:'PUT',
       headers:{'Content-Type':'application/json'},
       body:JSON.stringify(book)

   }
   fetch('http://localhost:9000/api/'+id,requestInit)
   .then(res=>res.json())
   .then(res=> console.log(res))
   setBook({
        
    titulo:'',
    autor:'',
    edicion:0
 
})
    setListUpdated(true)
    
 
 }
    return ( 
        <table className="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Stock</th>
    </tr>
  </thead>
  <tbody>
    {books.map( e=>(
      <tr key={e.id} >
      <td  >{e.id}</td>
      <td>{e.titulo} </td>
      <td>{e.autor}</td>
      <td>{e.edicion} </td>
      <td>
        <div className="mb-3">
          <button onClick={()=> handleDelete(e.id)} className="btn btn-danger">delete</button>
           
        </div>
        <div className="mb-3">
          
          <button onClick={()=> handleUpdate(e.id)} className="btn btn-dark">update</button>
        </div>
      </td>
    </tr>
    ) )}
    
    
  </tbody>
</table>
     );
}
 
export default Booklist;