/* 
*   THREE.js animation for head
*   target div : head-animation-div
*/

const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.01, 1000 );
const renderer = new THREE.WebGLRenderer();

renderer.setSize( window.innerWidth, window.innerHeight );
renderer.setPixelRatio(Math.min(window.devicePixelRatio,2));

container = document.getElementById('head-animation-div');
container.appendChild(renderer.domElement);

scene.add(new THREE.AxesHelper());
scene.add(camera);
camera.position.z = 5;

renderer.render(scene,camera);

/*
var container = document.getElementById('head-animation-div');
//var context = canvas.getContext('2d');


var w = container.offsetWidth;
var h = container.offsetHeight;
renderer.setSize(w, h);


renderer.setSize( window.innerWidth, window.innerHeight );
document.body.appendChild( renderer.domElement );
container.appendChild(renderer.domElement);

const geometry = new THREE.BoxGeometry();
const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
const cube = new THREE.Mesh( geometry, material );
scene.add( cube );

camera.position.z = 5;

const animate = function () {
    requestAnimationFrame( animate );

    cube.rotation.x += 0.01;
    cube.rotation.y += 0.01;

    renderer.render( scene, camera );
};

animate();
*/