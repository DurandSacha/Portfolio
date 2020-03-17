'use strict'

import React, { Component } from 'react';
import { getPublicRepoNumber} from "../api/request";


export default class publicRepoGithub extends Component {

    constructor(props){
        super(props);
        this.state = {
            results: [],
        };

        getPublicRepoNumber()
            .then(response => {
                this.setState({
                    results : response,
                })
        });

    }

    render(){
        const {results} = this.state;
        return (
            <div>
                {results.public_repos}
            </div>
        );
    }


}