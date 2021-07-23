
import React, { useState, useEffect } from 'react';
import Navbar from '../components/navbar';
import Booklist from '../components/booklist';
import Form from '../components/form';
 
const Mainpage = () => {
    const [books, setBooks] = useState([]);
   const [book, setBook] = useState({
     titulo:'',
     autor:'',
     edicion:0
   });
   const [listUpdated, setListUpdated] = useState(false);
   useEffect(() => {
     const getBooks=()=>{
       fetch('http://localhost:9000/api')
       .then(res=>res.json())
       .then(res=>setBooks(res))

     }
     getBooks();
     setListUpdated(false)
   }, [listUpdated]);
    return (
    <>
        <Navbar/>
        <div className="container ">
      <div className="row">
        <div className="col-7">
          <h2 style={{textAlign:"center"}}>Lista de Medicamento </h2>
           <Booklist setBook={setBook} book={book} books={books} listUpdated={listUpdated} setListUpdated={setListUpdated} />
        </div>
        <div className="col-5">
        <h2 style={{textAlign:"center"}}> Formulario de Medicamentos   </h2>
            <Form book={book} setBook={setBook} />
        </div>
      </div>
     
    </div>
    
    </>
        
        

      );
}
 
export default Mainpage;