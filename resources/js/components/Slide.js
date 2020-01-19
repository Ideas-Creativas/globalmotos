import React, { Component } from 'react';
import ReactDOM from 'react-dom';
//import imageUrl from '/public/images/banners/banner.jpg';

export default class Slide extends Component {

  constructor(props){
    super(props)

    this.state = {
      banners: [
        {
          image_url:'images/banners/banner.jpg',
          link:'http://ideascreativas.com.ar',
          id:'1'
        },
        {
          image_url:'images/banners/banner.jpg',
          link:'http://globalmotosctes.com',
          id:'2'
        }
    ],
      error: null
    }
  }

/*  async componentDidMount(){
    try {
        let response = await fetch('')
        let data = await response.json()
        this.setState({
          image_url:data.image_url,
          link:data.link,
          link:data.id
        })
    } catch (error) {
      this.setState
    }
  }*/

    render() {
        return (
              <div className="slideContent">
                <ul>
                  { this.state.banners.map((banner) => (
                    <li key={banner.id}>
                      <img src={banner.image_url} alt={banner.link}/>
                    </li>
                  )) }
                </ul>
              </div>
        );
    }
}

if (document.getElementById('slide')) {
    ReactDOM.render(<Slide />, document.getElementById('slide'));
}
