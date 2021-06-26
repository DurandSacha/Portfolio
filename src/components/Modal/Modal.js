import React from 'react';
import './Modal.css';

export default function Modal(props){
  return(

    <div className="Modal"
      style={{
        transform: props.visible ? 'translateY(0vh' : 'translateY(-100vh)',
        opacity: props.visible ? '1' : '0'
      }}
    >
      <button onClick={props.hide}>X</button>
      <h1>{props.title}</h1>
      <hr/>
      <p>{props.content}</p>
    </div>
  );
}