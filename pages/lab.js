import Head from 'next/head';
import React, { useState, useEffect } from 'react';
import dynamic from 'next/dynamic';
import HeaderAnimation from '../components/Animation/HeaderAnimation';

export default function Lab() {

  return (
    <div className="">
      <Head>
        <title>Lab Sacha Durand </title>
        <link rel="icon" href="/favicon.ico" />
        <script src="../public/js/jquery-2.1.3.min.js"></script>

      </Head>

      <main>         
        <p>lab</p>
        <HeaderAnimation/>

        <canvas id="head-animations-div"></canvas>
        <div id="head-animation-div"></div>

        <script src="js/three.js"></script>
        <script src="js/three-head.js"></script>

      </main>

  </div>
  )
}
