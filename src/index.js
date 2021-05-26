import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import Home from './Home';
import reportWebVitals from './reportWebVitals';

import AOS from 'aos';
import 'aos/dist/aos.css';



AOS.init({
    duration : 2000
})

ReactDOM.render(
    <React.StrictMode>
        <Home />
    </React.StrictMode>,
    document.getElementById('root')
);

let el = document.querySelector("#intro");
el.addEventListener("mousemove", function(e) {
    el.style.setProperty('--x', -e.offsetX + "px");
    el.style.setProperty('--y', -e.offsetY + "px");
});

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
//reportWebVitals();
