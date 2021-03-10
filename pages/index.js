import Head from 'next/head';
import React, { useState, useEffect } from 'react';

import jquery from "jquery";
//window.jQuery = window.$ = jQuery;

//import '../public/js/jquery-2.1.3.min.js';

/*
this.state = {
  siteVisible:false,
  spinnerVisible:false
}
*/

export default function Home() {
  return (
    <div className="">
      <Head>
        <title>Sacha Durand | Portfolio </title>
        <link rel="icon" href="/favicon.ico" />
        <script src="../public/js/jquery-2.1.3.min.js"></script>

        {/*
        <header>   	
          <div className="row">
            <div className="top-bar">
              <a className="menu-toggle" href="#"><span>Menu</span></a>
              <div className="logo">
                  <a href="index.html">SACHA</a>
                </div>		      
              <nav id="main-nav-wrap">
                <ul className="main-navigation">
                  <li className="current"><a className="smoothscroll"  href="#intro" title="">Home</a></li>
                  <li><a className="smoothscroll"  href="#about" title="">About</a></li>
                  <li><a className="smoothscroll"  href="#resume" title="">Resume</a></li>
                  <li><a className="smoothscroll"  href="#portfolio" title="">Portfolio</a></li>
                  <li><a className="smoothscroll"  href="#services" title="">Services</a></li>					
                  <li><a className="smoothscroll"  href="#contact" title="">Contact</a></li>	
                  <li><a href="styles.html" title="">Style Demo</a></li>				
                </ul>
              </nav>    		
            </div>  
            
          </div> 

        </header> 
        */}

      </Head>

      <main>         
        <section id="intro">   
          <div className="intro-overlay"></div>	

          <div className="intro-content">
            <div className="row">

              <div className="col-twelve">

                <h5>Hello, I'm</h5>
                <h1 className="bigTitle">SACHA DURAND</h1>

                <p className="intro-position">
                  <span>Développeur Back</span>
                  <span>Développeur Front</span> 
                  <span>Dev'Ops</span> 
                </p>

                <a className="button stroke smoothscroll" href="#about" title="">Plus d'information</a>

              </div>  
              
            </div>   		 		
          </div>  

          <ul className="intro-social">        
              <li><a href="#"><i className="fa fa-facebook"></i></a></li>
              <li><a href="#"><i className="fa fa-behance"></i></a></li>
              <li><a href="#"><i className="fa fa-twitter"></i></a></li>
              <li><a href="#"><i className="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i className="fa fa-instagram"></i></a></li>
            </ul>      	

        </section> 

         
        <section id="about">  

          <div className="row section-intro">
            {/* 
            <div className="col-twelve">
              <h5>About</h5>
              <h1>Let me introduce myself.</h1>
              <div className="intro-info">
                <img src="img/profile-pic.jpg" alt="Profile Picture"></img>
                <p className="lead">Lorem ipsum Exercitation culpa qui dolor consequat exercitation fugiat laborum ex ea eiusmod ad do aliqua occaecat nisi ad irure sunt id pariatur Duis laboris amet exercitation veniam labore consectetur ea id quis eiusmod.</p>
              </div>   
            </div>	

            */}

              		
          </div>

          <div className="row about-content">

            <div className="col-six tab-full">

              <h3>Profil</h3>
              <p>Cela fait longtemps que je suis passionné par la technologie du web. J’ai donc chercher a m’instruire afin de construire une carrière à partir de ma passion.
                Le développement back-end est ma spécialité.<br/><br/></p>

              <ul className="info-list">
                <li>
                  <strong className="title-info-list">NOM:</strong>
                  <span>Sacha Durand</span>
                </li>
                <li>
                  <strong className="info-info-list">AGE:</strong>
                  <span>23 ans ( 22 mars 1998 )</span>
                </li>
                <li>
                  <strong className="info-info-list" >TITRE:</strong>
                  <span>Développeur web back-end</span>
                </li>
                <li>
                  <strong className="info-info-list">EMAIL:</strong>
                  <span>sacha6623@gmail.com</span>
                </li>

              </ul>

            </div>

            <div className="col-six tab-full">

              <h3>Compétences</h3>
              <p>Mes compétences sont le reflet de ma formation précise, ainsi que ma curiosité qui m'a diversifié mes savoir-faire </p>

              <ul className="skill-bars">
                <li>
                  <div className="progress percent90"><span>90%</span></div>
                  <strong>PHP</strong>
                </li>
                <li>
                  <div className="progress percent70"><span>70%</span></div>
                  <strong>Javascript</strong>
                </li>
                <li>
                  <div className="progress percent80"><span>80%</span></div>
                  <strong>Symfony/Laravel</strong>
                </li>
                <li>
                  <div className="progress percent76"><span>76%</span></div>
                  <strong>React.js / next.js</strong>
                </li>
                <li>

                  <div className="progress percent85"><span>85%</span></div>
                  <strong>Gestion de serveurs et déploiement</strong>
                </li>
            
              </ul>		

            </div>

          </div>

          <div className="row button-section">
            <div className="col-twelve">
              <a href="#contact" title="Hire Me" className="button stroke smoothscroll">Contactez-moi ! </a>
              <a href="#" title="Download CV" className="button button-primary">Mon CV </a>
            </div>   		
          </div>

        </section>   

        {/* 
        <section id="resume" className="grey-section">

          <div className="row section-intro">
            <div className="col-twelve">

              <h5>Resume</h5>
              <h1>More of my credentials.</h1>

              <p className="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>

            </div>   		
          </div>

          <div className="row resume-timeline">

            <div className="col-twelve resume-header">

              <h2>Work Experience</h2>

            </div> 

            <div className="col-twelve">

              <div className="timeline-wrap">

                <div className="timeline-block">

                  <div className="timeline-ico">
                    <i className="fa fa-graduation-cap"></i>
                  </div>

                  <div className="timeline-header">
                    <h3>UI Designer</h3>
                    <p>July 2015 - Present</p>
                  </div>

                  <div className="timeline-content">
                    <h4>Awesome Studio</h4>
                    <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                  </div>

                </div>  

                <div className="timeline-block">

                  <div className="timeline-ico">
                    <i className="fa fa-graduation-cap"></i>
                  </div>

                  <div className="timeline-header">
                    <h3>Front-end Developer</h3>
                    <p>July 2014 - June 2015</p>
                  </div>

                  <div className="timeline-content">
                    <h4>Super Cool Agency</h4>
                    <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
                  </div>

                </div>  

                <div className="timeline-block">

                  <div className="timeline-ico">
                    <i className="fa fa-graduation-cap"></i>
                  </div>

                  <div className="timeline-header">
                    <h3>Web Designer</h3>
                    <p>May 2013 - June 2014</p>
                  </div>

                  <div className="timeline-content">
                    <h4>Great Designs Studio</h4>
                    <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
                  </div>

                </div>  

              </div>    			

            </div>   
            
          </div>  
          
          <div className="row resume-timeline">

            <div className="col-twelve resume-header">

              <h2>Education</h2>

            </div>

            <div className="col-twelve">

              <div className="timeline-wrap">

                <div className="timeline-block">

                  <div className="timeline-ico">
                    <i className="fa fa-briefcase"></i>
                  </div>

                  <div className="timeline-header">
                    <h3>Master Degree</h3>
                    <p>July 2015 - Present</p>
                  </div>

                  <div className="timeline-content">
                    <h4>University of Life</h4>
                    <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                  </div>

                </div>

                <div className="timeline-block">

                  <div className="timeline-ico">
                    <i className="fa fa-briefcase"></i>
                  </div>

                  <div className="timeline-header">
                    <h3>Bachelor Degree</h3>
                    <p>July 2014 - June 2015</p>
                  </div>

                  <div className="timeline-content">
                    <h4>State Design University</h4>
                    <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
                  </div>

                </div>

                <div className="timeline-block">

                  <div className="timeline-ico">
                    <i className="fa fa-briefcase"></i>
                  </div>

                  <div className="timeline-header">
                    <h3>Bachelor Degree</h3>
                    <p>May 2013 - June 2014</p>
                  </div>

                  <div className="timeline-content">
                    <h4>Design College</h4>
                    <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
                  </div>

                </div>

              </div>   			

            </div>
            
          </div>
          
        </section>

        */}


        {/* ONLY SQUARE IMAGE 800*801 */}
        <section id="portfolio">
          <div className="row section-intro">
            <div className="col-twelve">
              <h5>Portfolio</h5>
            </div>   		
          </div>

            
            <div className="col-twelve portfolio-container">

              
                <div id="" className="stack portfolio-project">
                  <div className="bgrid folio-item">
                      <div className="item-wrap">
                        <img src="img/portfolio/wikirun-mac.png" alt="Liberty"></img>
                          <a href="#modal-01" className="overlay">	                  	           
                            <div className="folio-item-table">
                              <div className="folio-item-cell">
                              <h3 className="folio-title">play.wikirun.io </h3>	     					    
                              <span className="folio-types">
                                  Société Akarah
                              </span>
                              </div>	                      	
                            </div>                    
                          </a>             
                      </div>  

                      <div id="modal-01" className="popup-modal slider mfp-hide">	
                        <div className="media">
                          <img src="img/portfolio/wikirun-mac.png" alt="" />
                        </div>      	
                        <div className="description-box">
                            <h4>Snowtricks Community</h4>		      
                            <p>Symfony - FUN </p>
                            <div className="categories">Web Development</div>			               
                        </div>
                          <div className="link-box">
                              <a href="http://www.behance.net">Details</a>
                            <a href="#" className="popup-modal-dismiss">Close</a>
                          </div>		      
                      </div>
                    </div>
                  </div> 

                  {/***** P2 *********** */}
                  <div id="" className="stack portfolio-project">
                  <div className="bgrid folio-item">
                      <div className="item-wrap">
                        <img src="img/portfolio/snowtricks-mac.png" alt="Liberty"></img>
                          <a href="#modal-01" className="overlay">	                  	           
                            <div className="folio-item-table">
                              <div className="folio-item-cell">
                              <h3 className="folio-title">Snowtricks </h3>	     					    
                              <span className="folio-types">
                                  Symfony
                              </span>
                              </div>	                      	
                            </div>                    
                          </a>             
                      </div>  

                      <div id="modal-01" className="popup-modal slider mfp-hide">	
                        <div className="media">
                          <img src="img/portfolio/snowtricks-mac.png" alt="" />
                        </div>      	
                        <div className="description-box">
                            <h4>Snowtricks Community</h4>		      
                            <p>Symfony - FUN </p>
                            <div className="categories">Web Development</div>			               
                        </div>
                          <div className="link-box">
                              <a href="http://www.behance.net">Details</a>
                            <a href="#" className="popup-modal-dismiss">Close</a>
                          </div>		      
                      </div>
                    </div>
                  </div> 


                


                {/***** P3 *********** */}
                <div id="" className="stack portfolio-project">
                  <div className="bgrid folio-item">
                      <div className="item-wrap">
                        <img src="img/portfolio/bilemo-mac.png" alt="Liberty"></img>
                          <a href="#modal-01" className="overlay">	                  	           
                            <div className="folio-item-table">
                              <div className="folio-item-cell">
                              <h3 className="folio-title">Bilemo API </h3>	     					    
                              <span className="folio-types">
                                  API PHP
                              </span>
                              </div>	                      	
                            </div>                    
                          </a>             
                      </div>  

                      <div id="modal-01" className="popup-modal slider mfp-hide">	
                        <div className="media">
                          <img src="img/portfolio/bilemo-mac.png" alt="" />
                        </div>      	
                        <div className="description-box">
                            <h4>Snowtricks Community</h4>		      
                            <p>Symfony - FUN </p>
                            <div className="categories">Web Development</div>			               
                        </div>
                          <div className="link-box">
                              <a href="http://www.behance.net">Details</a>
                            <a href="#" className="popup-modal-dismiss">Close</a>
                          </div>		      
                      </div>
                    </div>
                  </div> 



                {/***** P3 *********** */}
                <div id="" className="stack portfolio-project">
                  <div className="bgrid folio-item">
                      <div className="item-wrap">
                        <img src="img/portfolio/chalet-caviar-mac.png" alt="Liberty"></img>
                          <a href="#modal-01" className="overlay">	                  	           
                            <div className="folio-item-table">
                              <div className="folio-item-cell">
                              <h3 className="folio-title">Chalet et caviar </h3>	     					    
                              <span className="folio-types">
                                  Wordpress Immobilier
                              </span>
                              </div>	                      	
                            </div>                    
                          </a>             
                      </div>  

                      <div id="modal-01" className="popup-modal slider mfp-hide">	
                        <div className="media">
                          <img src="img/portfolio/chalet-caviar-mac.png" alt="" />
                        </div>      	
                        <div className="description-box">
                            <h4>Snowtricks Community</h4>		      
                            <p>Symfony - FUN </p>
                            <div className="categories">Web Development</div>			               
                        </div>
                          <div className="link-box">
                              <a href="http://www.behance.net">Details</a>
                            <a href="#" className="popup-modal-dismiss">Close</a>
                          </div>		      
                      </div>
                    </div>
                  </div> 


                {/***** P5 *********** */}
                <div id="" className="stack portfolio-project">
                  <div className="bgrid folio-item">
                      <div className="item-wrap">
                        <img src="img/portfolio/shifumi-mac.png" alt="Liberty"></img>
                          <a href="#modal-01" className="overlay">	                  	           
                            <div className="folio-item-table">
                              <div className="folio-item-cell">
                              <h3 className="folio-title">Shifumi Mobile </h3>	     					    
                              <span className="folio-types">
                                  React Native - Parse
                              </span>
                              </div>	                      	
                            </div>                    
                          </a>             
                      </div>  

                      <div id="modal-01" className="popup-modal slider mfp-hide">	
                        <div className="media">
                          <img src="img/portfolio/shifumi-mac.png" alt="" />
                        </div>      	
                        <div className="description-box">
                            <h4>Snowtricks Community</h4>		      
                            <p>Symfony - FUN </p>
                            <div className="categories">Web Development</div>			               
                        </div>
                          <div className="link-box">
                              <a href="http://www.behance.net">Details</a>
                            <a href="#" className="popup-modal-dismiss">Close</a>
                          </div>		      
                      </div>
                    </div>
                  </div> 

                 {/***** P6 *********** */}
                 <div id="" className="stack portfolio-project">
                  <div className="bgrid folio-item">
                      <div className="item-wrap">
                        <img src="img/portfolio/arp-mac.png" alt="Liberty"></img>
                          <a href="#modal-01" className="overlay">	                  	           
                            <div className="folio-item-table">
                              <div className="folio-item-cell">
                              <h3 className="folio-title">Light MVC PHP framework </h3>	     					    
                              <span className="folio-types">
                                  petit framework minimaliste PHP
                              </span>
                              </div>	                      	
                            </div>                    
                          </a>             
                      </div>  

                      <div id="modal-01" className="popup-modal slider mfp-hide">	
                        <div className="media">
                          <img src="img/portfolio/arp-mac.png" alt="" />
                        </div>      	
                        <div className="description-box">
                            <h4>Snowtricks Community</h4>		      
                            <p>Symfony - FUN </p>
                            <div className="categories">Web Development</div>			               
                        </div>
                          <div className="link-box">
                              <a href="http://www.behance.net">Details</a>
                            <a href="#" className="popup-modal-dismiss">Close</a>
                          </div>		      
                      </div>
                    </div>
                  </div> 

                {/* end project */}
                </div> 
                 
             
             <br/><br/><br/><br/><br/><br/>

              
              
             <hr className="hr70"/>

          </section>

        {/*
        <section id="cta" className="grey-section">

          <div className="row cta-content">

            <div className="col-twelve section-ads">  

                <h2 className="h01"><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Styleshout Recommends Dreamhost.</a></h2>

                <p className="lead">
                Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
              Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>. 
               Simply type	the promocode in the box labeled “Promo Code” when placing your order. 	
              </p>

              <div className="action">
                  <a className="button button-primary large" href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Sign Up Now</a>
                </div>		     	

            </div>

          </div>

        </section>

        */}	
         
        <section id="stats" className="count-up">

          <div className="row">
            <div className="col-twelve">

              <div className="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

                <div className="bgrid stat">

                  <div className="icon-part">
                    <i className="icon-pencil-ruler"></i>
                  </div>

                  <h3 className="stat-count">
                    3
                  </h3>

                  <h5 className="stat-title">
                    Années d'experiences
                  </h5>

                </div>					

                <div className="bgrid stat">

                  <div className="icon-part">
                    <i className="icon-users"></i>
                  </div>

                  <h3 className="stat-count">
                    1500
                  </h3>

                  <h5 className="stat-title">
                    commits/année
                  </h5>

                </div>

                <div className="bgrid stat">

                  <div className="icon-part">
                    <i className="icon-badge"></i>
                  </div>

                  <h3 className="stat-count">
                    +30
                  </h3>

                  <h5 className="stat-title">
                    projets réalisés
                  </h5>

                </div> 									

                <div className="bgrid stat">

                  <div className="icon-part">
                    <i className="icon-light-bulb"></i>
                  </div>

                  <h3 className="stat-count">
                    +15000
                  </h3>

                  <h5 className="stat-title">
                    cafés
                  </h5>

                </div> 

                <div className="bgrid stat">

                  <div className="icon-part">
                    <i className="icon-cup"></i>
                  </div>

                  <h3 className="stat-count">
                    +20
                  </h3>

                  <h5 className="stat-title">
                    technologies maitrisées
                  </h5>

                </div>  

                <div className="bgrid stat">

                  <div className="icon-part">
                    <i className="icon-clock"></i>
                  </div>

                  <h3 className="stat-count">
                    +30
                  </h3>

                  <h5 className="stat-title">
                    Repositories
                  </h5>

                </div>  

              </div>  

            </div>  
          </div>  

        </section>


        <section id="contact">

        <div className="row section-intro">
          <div className="col-twelve">
            <h5>Contact</h5>
            <p className="lead">N'hésitez pas à me contacter pour tout travail, mais aussi pour information. Ou tout simplement pour évoquer le magnifique métier de développeur web. Ensemble, partageons notre passion</p>
            <br/><br/>
          </div> 
        </div>
          
          <form name="contactForm" id="contactForm" method="post" action="">

            <div class="form-container">
              <div>
                <div className="form-field input-form">
                    <input name="contactName" type="text" id="contactName" placeholder="Nom" defaultValue="" onChange={console.log('inputed')} minlength="2" required=""></input>
                </div>

                <div className="form-field input-form">
                    <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" defaultValue="" onChange={console.log('inputed')} required=""></input>
                </div>

                <div className="form-field input-form">
                    <input name="contactSubject" type="text" id="contactSubject" placeholder="Sujet" defaultValue="" onChange={console.log('inputed')}></input>
                </div>     


              </div>

              {/* CAPTCHA AND TEXTAREA*/}
              <div>             
                <div className="form-field input-form textarea-form">
                  <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="50" cols="50" required=""></textarea>
                </div>
              </div>
            </div>
            
              
              {/*}
              <div id="protect" required="required" class="g-reCAPTCHA" data-sitekey="6Lci7_0UAAAAADsYfAmuqgF84-li9TfWItwEEmGW"></div>
                <div class="g-recaptcha" 
                    data-sitekey="6Lci7_0UAAAAADsYfAmuqgF84-li9TfWItwEEmGW"
                    data-callback="capcha_filled"
                    data-expired-callback="capcha_expired">
                </div>
              */}


              <div className="form-field submit-form">
                  <button className="submitform">Envoyer</button>                    
                  <div className="s-loader"></div>
                  <div className="bounce1"></div>
                  <div className="bounce2"></div>
                  <div className="bounce3"></div>
              </div>  
              

            

          </form>


          <script src="https://www.google.com/recaptcha/api.js" async defer></script>
          <script src="https://www.google.com/recaptcha/api.js?render=6Lci7_0UAAAAADsYfAmuqgF84-li9TfWItwEEmGW"></script>
        </section>
         
        <section id="contact">

          <div className="row contact-info">

            <div className="col-four tab-full">

              <div className="icon">
                <i className="icon-pin"></i>
              </div>

              <h5>Ou me trouver ?</h5>

              <p>
                  2536 route des faisans,<br/>
                  manneville-la-goupil<br/>
                  76110 FR
              </p>

            </div>

            <div className="col-four tab-full collapse">

              <div className="icon">
                <i className="icon-mail"></i>
              </div>

              <h5>Adresse mail</h5>

              <p>sacha6623@gmail.com<br/>			     
              </p>

            </div>

            <div className="col-four tab-full">

              <div className="icon">
                <i className="icon-phone"></i>
              </div>

              <h5>Appelez-moi </h5>

              <p>Mobile : 06 58 01 65 54 <br/>
              </p>

            </div>
            
          </div>
          
        </section>
         

        <footer>
            <div className="row">

              <div className="col-six tab-full pull-right social">

                <ul className="footer-social">        
                  <li><a href="#"><i className="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i className="fa fa-behance"></i></a></li>
                  <li><a href="#"><i className="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i className="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i className="fa fa-instagram"></i></a></li>
              </ul> 
                  
              </div>

              <div className="col-eight tab-full">
                <div className="copyright">
                    <span>© Copyright 2021 </span> 
                    <span>Design by Sacha Durand</span> 	         	
                  </div>		                  
                </div>

                <div id="go-top">
                  <a className="smoothscroll" title="Back to Top" href="#top"><i className="fa fa-long-arrow-up"></i></a>
                </div>

              </div>    	
        </footer>  

        {/* <div id="preloader" className={this.state.visible ? 'mainDiv' : 'hide mainDiv'}> */}
        <div id="preloader" className={0 ? 'mainDiv' : 'hide mainDiv'}> 
            <div id="loader"></div>
        </div> 

          
        {/*
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        */}

      </main>

  </div>
  )
}
