import ReactDOM from 'react-dom'
import React, { useRef, useState } from 'react'
import { Canvas, useFrame } from 'react-three-fiber'
import {useEffect} from "react";
import dynamic from 'next/dynamic';
import RenderCompleted from '../../hooks/isMounted';
import { useRouter } from 'next/router';


export default function HeaderAnimation(props){
  const isMounted = RenderCompleted();
  console.log(isMounted);

    const mesh = useRef()
    const [hovered, setHover] = useState(false)
    const [active, setActive] = useState(false)

    if(isMounted == true){
      console.log('DOM chargé');


      console.log('build three action function');
    
      return (
        <mesh
          {...props}
          ref={mesh}
          scale={active ? 1.5 : 1}
          onClick={(event) => setActive(!active)}
          onPointerOver={(event) => setHover(true)}
          onPointerOut={(event) => setHover(false)}>
          <boxGeometry args={[1, 1, 1]} />
          <meshStandardMaterial color={hovered ? 'hotpink' : 'orange'} />
        </mesh>
        //return(<div className="three-anim"></div>);
      )
      
    }
    else if (isMounted == false) {
      console.log('DOM inaccessible');
      return(<div className="three-anim"></div>);
    }
}


function rendering(){
  //console.log('rendering');
  ReactDOM.render(
    <Canvas>
      <ambientLight />
      <pointLight position={[10, 10, 10]} />
      <HeaderAnimation position={[-1.2, 0, 0]} />
      <HeaderAnimation position={[1.2, 0, 0]} />
    </Canvas>,
    document.getElementsByClassName('three-anim'),
  );
}

if(typeof document ==! 'undefined'){
  console.log('rendering');
  ReactDOM.render(
    <Canvas>
      <ambientLight />
      <pointLight position={[10, 10, 10]} />
      <HeaderAnimation position={[-1.2, 0, 0]} />
      <HeaderAnimation position={[1.2, 0, 0]} />
    </Canvas>,
    document.getElementById('three-anim'),
  );
}


 

  

