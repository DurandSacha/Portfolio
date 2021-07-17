import React, {Component, setState } from 'react';
import Modal from './Modal/Modal';

import etudeCas1 from '../assets/element/miniature1.png';
import etudeCas2 from '../assets/element/miniature2.png';

export default class StudyCase extends Component {

  constructor(props) {
    super(props);

    this.state = {
      //visibility
      firstModal: false,
      secondModal:false
    }

  };


  /**First Modal */
  showFirstModal = () => {
    this.setState({
      firstModal: true
    });
  }

  hideFirstModal = () => {
    this.setState({
      firstModal: false
    });
  }

  /** second Modal */
  showSecondModal = () => {
    this.setState({
      secondModal: true
    });
  }

  hideSecondModal = () => {
    this.setState({
      secondModal: false
    });
  }

  render() {
    return (
      <div>
        <section id="analyse-project">
          <div className="row section-analyse-project">
            <div className="col-twelve">
              <h5 class="black-title">Étude de cas</h5>
            </div>
          </div>
          <div id="analyse-container">

            {/* ONE STUDY CASE */}
            <div class="analyse" onClick={this.showFirstModal}>
              <img src={etudeCas1} alt="wikirun" height="100%"></img>
            </div>
            <Modal 
              visible={this.state.firstModal} 
              hide={this.hideFirstModal} 
              title={'Wikirun'}
              content={'Hello Wikirun'}
            
            />

            {/* TWO STUDY CASE */}
            <div class="analyse" onClick={this.showSecondModal}>
              <img src={etudeCas2} alt="other"></img>
            </div>
            <Modal 
              visible={this.state.secondModal} 
              hide={this.hideSecondModal} 
              title={'Other Article'}
              content={'Hello OtherArticle'}
            
            />
          </div>
        </section>


      </div>
    )
  }

}