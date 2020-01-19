import React, { Component } from 'react';
import ReactDOM from 'react-dom';
//import imageUrl from '/public/images/banners/banner.jpg';

export default class Marcas extends Component {

    render() {
        return (
              <div className="marcasContent" >
                <ul>
                  <li>
                    <img src="images/marcas/apia.jpg" alt="Apia"/>
                  </li>
                  <li>
                    <img src="images/marcas/keller.jpg" alt="Keller"/>
                  </li>
                  <li>
                    <img src="images/marcas/zanella.jpg" alt="Zanella"/>
                  </li>
                </ul>
              </div>
        );
    }
}

if (document.getElementById('marcas')) {
    ReactDOM.render(<Marcas />, document.getElementById('marcas'));
}
