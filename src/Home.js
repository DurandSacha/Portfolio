/*
import { makeStyles } from 'material-ui/core/styles';
import Modal from 'material-ui/core/Modal';
import Backdrop from 'material-ui/core/Backdrop';
import Fade from 'material-ui/core/Fade';
*/

import Modal from './components/Modal/Modal';
import StudyCase from '../src/components/StudyCase';

import './styles/fonts.css';
import './styles/main.css';
import './styles/parcours.css';
import './styles/v2.css';
import './styles/base.css';
import './styles/vendor.css';
import './styles/font-awesome/css/font-awesome.min.css';
import GitHubButton from 'react-github-btn';

// image
import wikirunIMG from './assets/portfolio/wikirun-mac.png';
import snowtricksIMG from './assets/portfolio/snowtricks-mac.png';
import shifumiIMG from './assets/portfolio/shifumi-mac.png';
import chaletIMG from './assets/portfolio/chalet-caviar-mac.png';
import bilemoIMG from './assets/portfolio/bilemo-mac.png';
import arpIMG from './assets/portfolio/arp-mac.png';

import etudeCas1 from './assets/element/miniature1.png';
import etudeCas2 from './assets/element/miniature2.png';
import { NoToneMapping } from 'three';

function Home() {

  let visible = false;

  const show = () => visible = true;
  const hide = () => {visible = false; };

  return (

    <div>
      <main>
        <section id="intro">
          <div className="intro-overlay"></div>

          <p id="siteRoute">
            <span id="siteRoute1">Sacha </span>
            <span class="slashRoute">/</span>
            <span id="siteRoute2"> Accueil </span>
          </p>

          {/*<button id="labButton">Lab </button>*/}

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

                <a data-aos="fade-up" className="button stroke smoothscroll" href="#about" title="">
                    Plus d'information
                </a>

              </div>

            </div>
          </div>

          <ul className="intro-social" data-aos-easing="ease-out-cubic">
            {/*
          <GitHubButton href="https://github.com/DurandSacha"
            className="github-follow-button"
            data-color-scheme="no-preference: light; light: light; dark: dark;"
            data-size="large" data-show-count="true"
            aria-label="Follow @DurandSacha on GitHub">Follow</GitHubButton>
            */}

            <li data-aos="fade-up" data-aos-offset="100">
              <a href="https://github.com/DurandSacha">
                <i className="fa fa-github"></i>
              </a>
            </li>
            <li data-aos="fade-up" data-aos-offset="100">
              <a href="https://www.linkedin.com/in/sacha-durand-687032150/">
                <i className="fa fa-linkedin"></i>
              </a>
            </li>
          </ul>

        </section>

        <section id="projects">

          <div className="row section-intro">
            <div className="col-twelve">
              <h5>Portfolio</h5>
            </div>
          </div>

          <div class="row container-projects">
            <div class="column-flex" /*data-aos="fade-right"*/ data-aos-offset="-4" data-aos-duration="500"
              data-aos-anchor-placement="center-center">
              <div class="project1 project project-container1">
              </div>
              <p class="project-text p-text-1">Shifumi mobile</p>
            </div>
            <div class="column-flex" /*data-aos="fade-up"*/ data-aos-offset="0" data-aos-duration="1000"
              data-aos-anchor-placement="center-center">
              <div class="project2 project project-container2">
              </div>
              <p class="project-text p-text-2">Wikirun</p></div>
            <div class="column-flex" /*data-aos="fade-down"*/ data-aos-offset="0" data-aos-duration="1500"
              data-aos-anchor-placement="center-center">
              <div class="project3 project project-container3">
              </div>
              <p class="project-text p-text-3">Snowtricks Social</p>
            </div>
            <div class="column-flex" /*data-aos="fade-left"*/ data-aos-offset="0" data-aos-duration="2000"
              data-aos-anchor-placement="center-center">
              <div class="project4 project project-container4">
              </div>
              <p class="project-text p-text-4">Machine Learning</p>
            </div>
          </div>

          <br/><br/>
          <div class="row d-flex justify-content-center">
            <div class="col-md-6">
              <a type="button" href="https://github.com/DurandSacha" download title="More project"
                className="button button-primary text-center sacha-button">Plus de projets</a>
            </div>
          </div>
        </section>

        <section id="about">
          <div id="head-animation-div"></div>
          <div className="row about-content">
            <div className="col-six tab-full" data-aos="fade-up" data-aos-offset="120">
              <h3>Profil</h3>
              <p>Cela fait longtemps que je suis passionné par la technologie du web.
                  J’ai donc chercher a m’instruire afin de construire une
                  carrière à partir de ma passion.
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
              <p>Mes compétences sont le reflet de ma formation précise,
                  ainsi que ma curiosité qui m'a diversifié mes savoir-faire </p>

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
              <a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=sacha6623@gmail.com"
                title="Hire Me"
                className="button stroke smoothscroll">
                    Contactez-moi !
              </a>
              <a href="CV.pdf" download title="Download CV"
                className="button button-primary">Mon CV </a>
            </div>
          </div>

        </section>

        <StudyCase />

        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

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

        <section id="parcours">
          <ul class="timeline-events">
            <li class="timeline-event-years-6-5 timeline-event-legend">
              <span>
                <i></i>
                <h2>Étude</h2>
                <h3>Lycée Maupassant, Fecamp</h3>
                <h4>BAC STI2D</h4>
              </span>
              <i></i>
            </li>
            <li class="timeline-event-years-2">
              <h2>2 ans</h2>
              <h3>Lycée Edouard Branly, Amiens</h3>
              <h4>BTS Systême Numérique</h4>
            </li>
            <li class="timeline-event-years-2">
              <h2>1 ans</h2>
              <h3>Openclassrooms</h3>
              <h4>Spécialisation PHP Symfony</h4>
            </li>
            <li class="timeline-event-years-3">
              <h2>6 mois</h2>
              <h3>Stage @akarah</h3>
              <h4>Développeur web back-end</h4>
            </li>
            <li class="timeline-event-years-7">
              <h2>2021-maintenant</h2>
              <h3>Entreprise @akarah</h3>
              <h4>Développeur web back-end</h4>
            </li>
          </ul>
          <ul class="timelines-years">
            <li>2013</li>
            <li>2014</li>
            <li>2015</li>
            <li>2016</li>
            <li>2017</li>
            <li>2018</li>
            <li>2019</li>
            <li>2020</li>
            <li>2021</li>
            <li>2022</li>
          </ul>

          <h3 class="title-parcours">Expériences</h3>

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

              <h5>Appelez-moi ! </h5>

              <p>Mobile : 06 58 01 65 54 <br/>
              </p>

            </div>

          </div>
          <br/>
          <br/>
          <br/>
        </section>

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
