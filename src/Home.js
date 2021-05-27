import './styles/fonts.css';
import './styles/main.css';
import './styles/v2.css';
import './styles/base.css';
import './styles/vendor.css';
import './styles/font-awesome/css/font-awesome.min.css';

// image
import wikirunIMG from './assets/portfolio/wikirun-mac.png';
import snowtricksIMG from './assets/portfolio/snowtricks-mac.png';
import shifumiIMG from './assets/portfolio/shifumi-mac.png';
import chaletIMG from './assets/portfolio/chalet-caviar-mac.png';
import bilemoIMG from './assets/portfolio/bilemo-mac.png';
import arpIMG from './assets/portfolio/arp-mac.png';

import imgP1 from './assets/e1.jpg';

import { unmountComponentAtNode } from 'react-dom';

function Home() {

    return (

        <div>
            <main>
                <section id="intro">
                    <div className="intro-overlay"></div>
                    <p id="siteRoute" /*data-aos="fade-down-right" data-aos-duration="600"*/><span id="siteRoute1">Sacha </span><span class="slashRoute">/</span> <span id="siteRoute2">Accueil </span></p>

                    <div id="console">
                        <p><span class="ConsolePrefix">[23/04/21 22:11] [sacha@website]$ </span><span class="command"> website.renderer;</span></p>
                        <p><span class="ConsolePrefix">[23/04/21 22:17] [sacha@website]$ </span></p>
                    </div>

                    <div id="head-animation-div"></div>


                    <div className="intro-content">
                        <div className="row">

                            <div className="col-twelve">

                                <h5>Hello, I'm</h5>
                                {/* data-aos='flip-left' */}
                                <h1 className="bigTitle" >SACHA DURAND</h1>

                                <p className="intro-position">
                                    <span data-aos="">Développeur Back</span>
                                    <span data-aos="">Développeur Front</span>
                                    <span data-aos="">Dev'Ops</span>
                                </p>

                                <a data-aos="fade-up" className="button stroke smoothscroll" href="#about" title="">Plus d'information</a>

                            </div>

                        </div>
                    </div>

                    <ul className="intro-social" data-aos-easing="ease-out-cubic">
                        <li data-aos="fade-up" data-aos-offset="100"><a href="https://github.com/DurandSacha"><i className="fa fa-github"></i></a></li>
                        <li data-aos="fade-up" data-aos-offset="100"><a href="https://www.linkedin.com/in/sacha-durand-687032150/"><i className="fa fa-linkedin"></i></a></li>
                    </ul>

                </section>

                <section id="projects">

                    <div className="row section-intro">
                        <div className="col-twelve">
                            <h5>Portfolio</h5>
                        </div>
                    </div>

                    <div class="row container-projects">
                        <div class="col-lg-3 column-flex "><div class="project1 project project-container1"></div><p class="project-text p-text-1">Project 1</p> </div>
                        <div class="col-lg-3 column-flex"><div class="project2 project project-container2"></div><p class="project-text p-text-2">Project 2</p></div>
                        <div class="col-lg-3 column-flex"><div class="project3 project project-container3"></div><p class="project-text p-text-3">Project 3</p></div>
                        <div class="col-lg-3 column-flex"><div class="project4 project project-container4"></div><p class="project-text p-text-4">Project 4</p></div>
                    </div>
                </section>


                <section id="about">
                    <div id="head-animation-div"></div>

                    <div className="row about-content">

                        <div className="col-six tab-full" data-aos="fade-up" data-aos-offset="120">

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

                        <div className="col-six tab-full" data-aos="fade-down" data-aos-offset="130">

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
                                    <div className="progress percent75"><span>75%</span></div>
                                    <strong>React.js / next.js</strong>
                                </li>
                                <li>

                                    <div className="progress percent90"><span>90%</span></div>
                                    <strong>Gestion de serveurs et déploiement</strong>
                                </li>

                            </ul>

                        </div>

                    </div>

                    <div className="row button-section">
                        <div className="col-twelve">
                            <a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=sacha6623@gmail.com" title="Hire Me" className="button stroke smoothscroll">Contactez-moi ! </a>
                            <a href="CV.pdf" download title="Download CV" className="button button-primary">Mon CV </a>
                        </div>
                    </div>

                </section>


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
                                    <img src={wikirunIMG} alt="wikirun"></img>
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
                                        <img src={wikirunIMG} alt="wikirun details" />
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
                                    <img src={snowtricksIMG} alt="Liberty"></img>
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
                                        <img src={snowtricksIMG} alt="" />
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
                                    <img src={bilemoIMG} alt="Liberty"></img>
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
                                        <img src={bilemoIMG} alt="" />
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
                                    <img src={chaletIMG} alt="Liberty"></img>
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
                                        <img src={chaletIMG} alt="" />
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
                                    <img src={shifumiIMG} alt="Liberty"></img>
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
                                        <img src={shifumiIMG} alt="" />
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
                                    <img src={arpIMG} alt="Liberty"></img>
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
                                        <img src={arpIMG} alt="" />
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
                   + 1500
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
                   + 20
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
                   + 30
                                    </h3>

                                    <h5 className="stat-title">
                   Repositories
                                    </h5>

                                </div>

                            </div>

                        </div>
                    </div>

                </section>

                {/*
       <section id="contact">

       <div className="row section-intro">
         <div className="col-twelve">
           <h5>Contact</h5>
           <p className="lead">N'hésitez pas à me contacter pour tout travail, mais aussi pour information. Ou tout simplement pour évoquer le magnifique métier de développeur web. Ensemble, partageons notre passion</p>
           <br/><br/>
         </div>
       </div>

         <form name="contactForm" id="contactForm" method="post" action="/contact" >

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

             <div>
               <div className="form-field input-form textarea-form">
                 <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="50" cols="50" required=""></textarea>
               </div>
             </div>
           </div>


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
     */}

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

                            <h5>Appelez-moi ! </h5>

                            <p>Mobile : 06 58 01 65 54 <br/>
                            </p>

                        </div>

                    </div>
                    <br/>
                    <br/>
                    <br/>
                </section>

                {/*}
       <footer>
           <div className="row">

             <div className="col-six tab-full pull-right social"></div>

             <div className="col-eight tab-full">
               <div className="copyright">
                   <br/>
                   <span>© Copyright 2021 </span>
                   <span>Design by Sacha Durand</span>
                 </div>
               </div>

               <div id="go-top">
                 <a className="smoothscroll" title="Back to Top" href="#top"><i className="fa fa-long-arrow-up"></i></a>
               </div>

             </div>
       </footer>
      */}

                {/* <div id="preloader" className={this.state.visible ? 'mainDiv' : 'hide mainDiv'}> */}
                {/*
       <div id="preloader" className={0 ? 'mainDiv' : 'hide mainDiv'}>
           <div id="loader"></div>
       </div>
       */}

                <script src="js/three.js"></script>
                <script src="js/three-head.js"></script>

                {/*
       <script src="js/jquery-2.1.3.min.js"></script>
       <script src="js/plugins.js"></script>
       <script src="js/main.js"></script>
       */}

            </main>

        </div>
    );
}

export default Home;
