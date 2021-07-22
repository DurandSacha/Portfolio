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
      <div class="row header">
        <h1>{props.title}</h1>
        <button onClick={props.hide}>X</button>
      </div>
      <br/><br/>
      <div class="content">
        <p>{props.content}</p>
      </div>
    </div>
  );
}