import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Formulario extends Component {

    constructor(props){
       super(props)

       this.state = {
          rutas:[
            {
              ruta:"nada"
            }
          ]
       }
    }

    render() {

        return (
              <div className="formularioContent" >
                <ul>
                  <li>
                    <input name="nombre" type="text"/>
                  </li>
                  <li>
                    <input name="email" type="email"/>
                  </li>
                  <li>
                    <input name="telefono" type="phone"/>
                  </li>
                  <li>
                    <textarea name="consulta" id="consulta" cols="30" rows="5"></textarea>
                  </li>
                  <li>
                    <button>Enviar</button>
                  </li>
                </ul>
              </div>
        );
    }
}

if (document.getElementById('formulario')) {
    ReactDOM.render(<Formulario />, document.getElementById('formulario'));
}
