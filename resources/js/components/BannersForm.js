import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class BannersForm extends Component {

    constructor(props){
       super(props)

       this.state = {
          rutas:[
            {
              ruta:""
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
                    <input name="descripción" type="text"/>
                  </li>
                  <li>
                    <input name="archivo" type="file"/>
                  </li>
                  <li>
                    <button>Agregar</button>
                  </li>
                </ul>
              </div>
        );
    }
}

if (document.getElementById('bannersForm')) {
    ReactDOM.render(<BannersForm />, document.getElementById('bannersForm'));
}
