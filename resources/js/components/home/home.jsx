import React from "react"
import "./home.css";


class Home extends React.Component {
    render(){
        return(
            <div className="home-container">
                <div>
                    <img className="home-image" src="/images/frontend.jpg" alt="imagen vacante" />
                    <h3 className="home-title">Desarrollador Frontend</h3>
                </div>
                <div>
                    <img className="home-image" src="/images/frontend.jpg" alt="imagen vacante" />
                    <h3 className="home-title">Desarrollador Frontend</h3>
                </div>
                <div>
                    <img className="home-image" src="/images/frontend.jpg" alt="imagen vacante" />
                    <h3 className="home-title">Desarrollador Frontend</h3>
                </div>
            </div>
        )
    }
}

export default Home;