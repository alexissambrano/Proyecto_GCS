 
import './App.css';
 
import React   from 'react';
 
import {BrowserRouter,Switch,Route} from 'react-router-dom'
import Login from './pages/login';
import Menu from './pages/menu';
//class
function App() {
    

  return (
     <>
      <BrowserRouter>
        <Switch>
          <Route exact path="/"  component={Login} /> 
          <Route exact path="/menu"  component={Menu} />
           
        </Switch>
      </BrowserRouter>




    {/* <Navbar brand="cochera"/>
     <div className="container ">
      <div className="row">
        <div className="col-7">
          <h2 style={{textAlign:"center"}}>Lista de libros </h2>
           <Booklist setBook={setBook} book={book} books={books} listUpdated={listUpdated} setListUpdated={setListUpdated} />
        </div>
        <div className="col-5">
        <h2 style={{textAlign:"center"}}> Book form   </h2>
            <Form book={book} setBook={setBook} />
        </div>
      </div>
      
    </div>
    
    <Sesion/>*/}
     
    </>
    
     
    
  );
}

export default App;
