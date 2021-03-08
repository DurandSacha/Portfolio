import React from 'react';
import dynamic from 'next/dynamic'

import '../styles/fonts.css';
import '../styles/main.css';
import '../styles/v2.css';
import '../styles/base.css';
import '../styles/vendor.css';

import '../styles/font-awesome/css/font-awesome.min.css';

//import '../public/js/main.js';
//import '../public/js/plugins.js';

//import '../public/js/main.js';
//import '../public/js/plugins.js';

//import { Provider } from 'mobx-react';

function MyApp({ Component, pageProps }) {
  return (
    <div>
        <Component {...pageProps} />
    </div>
  );
}

export default MyApp;
