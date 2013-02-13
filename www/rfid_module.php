<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
    <meta name="keywords" content="rfid, ns-2, ns2, networks, ns-2 module">
    <title>RFID ns-2 Module</title>
  </head>
  <body>
    <br>
    <br>
    <table style="width: 1261px; height: 137px;" border="0">
      <tbody>
        <tr>
          <td><img style="width: 118px; height: 147px;" alt="logo_ime"
              src="logo_ime.jpg"><img style="width: 327px; height: 190px;"
              alt="rfid_system" src="sistema_rfis.jpg"><br>
          </td>
          <td>
            <h1 style="color: rgb(0, 0, 0); font-family: 'Times New Roman';
              font-style: normal; font-variant: normal; letter-spacing: normal;
              line-height: normal; orphans: 2; text-indent: 0px; text-transform:
              none; white-space: normal; widows: 2; word-spacing: 0px;
              text-align: center;"><span style="font-style: italic;">RFID modul</span><span
                style="font-style: italic;">e for ns-2 simulator</span><a
                name="introduction"></a></h1>
            <p style="text-align: center;"><span style="font-style: italic;">Rafael
































                Perazzo Barbosa Mota</span></p>
            <p style="text-align: center;"><span style="font-style: italic;">perazzo































                [at] ime [dot] usp [dot] br</span></p>
            <p style="text-align: center;"><span style="font-style: italic;">Last


























                update: <php title="echo date (&quot;d/m/Y - H:..."
                  xmlns="http://disruptive-innovations.com/zoo/bluegriffon"><!--?php echo date ("d/m/Y - H:i", filemtime("rfid_module.php"));?--></php><php
                  title="echo date (&quot;d/m/Y - H:..."
                  xmlns="http://disruptive-innovations.com/zoo/bluegriffon"><!--?php echo date ("d/m/Y - H:i", filemtime("rfid_module.php"));?--></php><php
                  title="echo date (&quot;d/m/Y - H:..."
                  xmlns="http://disruptive-innovations.com/zoo/bluegriffon"><!--?php echo date ("d/m/Y - H:i", filemtime("rfid_module.php"));?--></php><br>
              </span></p>
          </td>
        </tr>
      </tbody>
    </table>
    <br>
    <table style="width: 100%;" border="0">
      <tbody>
        <tr>
          <td style="text-align: center;"><a href="#introduction">INTRODUCTION</a></td>
          <td style="text-align: center;"><a href="#validation">COMPARISON</a></td>
          <td style="text-align: center;"><a href="#features">FEATURES</a></td>
          <td style="text-align: center;"><a href="#installation">INSTALLATION</a></td>
          <td style="text-align: center;"><a href="#download">DOWNLOADS</a></td>
          <td style="text-align: center;"><a href="#documentation">DOCUMENTATION</a></td>
          <td style="vertical-align: top;"><a href="#publications">PUBLICATIONS</a></td>
        </tr>
      </tbody>
    </table>
    <br>
    <hr style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-size:
      medium; font-style: normal; font-variant: normal; font-weight: normal;
      letter-spacing: normal; line-height: normal; orphans: 2; text-align:
      start; text-indent: 0px; text-transform: none; white-space: normal;
      widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto;
      -webkit-text-stroke-width: 0px;">
    <p style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-size:
      medium; font-style: normal; font-variant: normal; font-weight: normal;
      letter-spacing: normal; line-height: normal; orphans: 2; text-align:
      start; text-indent: 0px; text-transform: none; white-space: normal;
      widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto;
      -webkit-text-stroke-width: 0px;">The RFID for NS-2 module was developed by
      Rafael Perazzo Barbosa Mota, member of the<span
        class="Apple-converted-space"> <span style="font-weight: bold;">Computational








          Systems </span><span style="font-weight: bold;">research group</span></span>,
      <span style="font-weight: bold;">Institute of </span><span
        style="font-weight: bold;">Mathematics</span><span style="font-weight:
        bold;"> and Statistics (IME)</span>, <span style="font-weight: bold;"></span><span
        style="font-weight: bold;"></span><span style="font-weight: bold;">University








        of São Paulo (USP)</span>, Brazil. This module is a free software: you
      can redistribute it and/or modify it under the terms of the GNU Public
      License Version 1 or (at your option) any later version. </p>
    <p style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-size:
      medium; font-style: normal; font-variant: normal; font-weight: normal;
      letter-spacing: normal; line-height: normal; orphans: 2; text-align:
      start; text-indent: 0px; text-transform: none; white-space: normal;
      widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto;
      -webkit-text-stroke-width: 0px;">I invite users and developers to<span
        class="Apple-converted-space"> </span><a
        href="https://github.com/rafaelperazzo/ns-2_rfid/issues">contact me</a><span
        class="Apple-converted-space"> </span>to report any bug and to give
      suggestions for future versions.</p>
    <hr style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-size:
      medium; font-style: normal; font-variant: normal; font-weight: normal;
      letter-spacing: normal; line-height: normal; orphans: 2; text-align:
      start; text-indent: 0px; text-transform: none; white-space: normal;
      widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto;
      -webkit-text-stroke-width: 0px;">
    <h2 style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-style:
      normal; font-variant: normal; letter-spacing: normal; line-height: normal;
      orphans: 2; text-align: start; text-indent: 0px; text-transform: none;
      white-space: normal; widows: 2; word-spacing: 0px;
      -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px;"><a
        name="introduction">Introduction</a></h2>
    <p style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-size:
      medium; font-style: normal; font-variant: normal; font-weight: normal;
      letter-spacing: normal; line-height: normal; orphans: 2; text-align:
      start; text-indent: 0px; text-transform: none; white-space: normal;
      widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto;
      -webkit-text-stroke-width: 0px;">Ns is a discrete event simulator targeted
      at networking research. Ns provides substantial support for simulation of
      TCP, routing, and multicast protocols over wired and wireless (local and
      satellite) networks [<a href="http://www.isi.edu/nsnam/ns/">Text from ns-2
        official page</a>]. <span style="color: rgb(0, 0, 0); font-family:
        'Times New Roman'; font-size: medium; font-style: normal; font-variant:
        normal; font-weight: normal; letter-spacing: normal; line-height:
        normal; orphans: 2; text-align: start; text-indent: 0px; text-transform:
        none; white-space: normal; widows: 2; word-spacing: 0px;
        -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; display:
        inline !important; float: none;">This project implements a RFID module
        based on the <a
href="http://www.gs1.org/gsmp/kc/epcglobal/uhfc1g2/uhfc1g2_1_2_0-standard-20080511.pdf">EPC<span
            style="font-style: italic;"><sub>TM</sub></span></a><a
href="http://www.gs1.org/gsmp/kc/epcglobal/uhfc1g2/uhfc1g2_1_2_0-standard-20080511.pdf">
          Radio-Frequency Identity Protocols Class-1 Generation-2 UHF RFID
          Protocol for Communications at 860 MHz ? 960 MHz Version 1.2.0</a><span
          style="font-weight: bold;"> (25/10/2008)</span> standard for the ns-2
        simulator, release 2.35. The focus of this implementation is the Network
        layer and its mechanisms for anti-collision.</span></p>
    <p style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-size:
      medium; font-style: normal; font-variant: normal; font-weight: normal;
      letter-spacing: normal; line-height: normal; orphans: 2; text-align:
      start; text-indent: 0px; text-transform: none; white-space: normal;
      widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto;
      -webkit-text-stroke-width: 0px;"><br>
      <span style="color: rgb(0, 0, 0); font-family: 'Times New Roman';
        font-size: medium; font-style: normal; font-variant: normal;
        font-weight: normal; letter-spacing: normal; line-height: normal;
        orphans: 2; text-align: start; text-indent: 0px; text-transform: none;
        white-space: normal; widows: 2; word-spacing: 0px;
        -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; display:
        inline !important; float: none;"></span></p>
    <h2 style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-style:
      normal; font-variant: normal; letter-spacing: normal; line-height: normal;
      orphans: 2; text-align: start; text-indent: 0px; text-transform: none;
      white-space: normal; widows: 2; word-spacing: 0px;
      -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px;"><a
        id="validation" name="validation"></a>Comparison</h2>
    <p style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-size:
      medium; font-style: normal; font-variant: normal; font-weight: normal;
      letter-spacing: normal; line-height: normal; orphans: 2; text-align:
      start; text-indent: 0px; text-transform: none; white-space: normal;
      widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto;
      -webkit-text-stroke-width: 0px;">Results obtained in a simulation with the
      module were compared with the simulation results presented in the paper: <span
        style="font-weight: bold;"><span style="text-decoration: underline;"><span
            style="font-style: italic;"><span style="font-family: monospace;"><span
                style="color: rgb(34, 34, 34); font-size: 13px; font-style:
                normal; font-variant: normal; font-weight: normal;
                letter-spacing: normal; line-height: 16px; orphans: 2;
                text-align: start; text-indent: 0px; text-transform: none;
                white-space: normal; widows: 2; word-spacing: 0px;
                background-color: rgb(255, 255, 255); display: inline !
                important; float: none;"><br>
              </span></span></span></span></span></p>
    <p style="color: rgb(0, 0, 0); font-size: medium; font-style: normal;
      font-variant: normal; font-weight: normal; letter-spacing: normal;
      line-height: normal; orphans: 2; text-align: start; text-indent: 0px;
      text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><span
        style="font-weight: bold;"><span style="font-style: italic;"><span
            style="font-family: monospace;"><span style="color: rgb(34, 34, 34);
              font-size: 13px; font-style: normal; font-variant: normal;
              font-weight: normal; letter-spacing: normal; line-height: 16px;
              orphans: 2; text-align: start; text-indent: 0px; text-transform:
              none; white-space: normal; widows: 2; word-spacing: 0px;
              background-color: rgb(255, 255, 255); display: inline ! important;
              float: none;">Namboodiri, Vinod, et al. "<a
                href="http://www.sciencedirect.com/science/article/pii/S0140366412001776">An

                extensive study of slotted Aloha-based RFID anti-collision
                protocols</a>."<span class="Apple-converted-space">&nbsp;</span></span></span></span></span><span
        style="font-weight: bold;"><span style="font-style: italic;"><span
            style="font-family: monospace;"><span style="color: rgb(34, 34, 34);
              font-size: 13px; font-variant: normal; font-weight: normal;
              letter-spacing: normal; line-height: 16px; orphans: 2; text-align:
              start; text-indent: 0px; text-transform: none; white-space:
              normal; widows: 2; word-spacing: 0px; background-color: rgb(255,
              255, 255);">Computer Communications</span></span></span></span><span
        style="font-weight: bold;"><span style="font-style: italic;"><span
            style="font-family: monospace;"><span style="color: rgb(34, 34, 34);
              font-size: 13px; font-style: normal; font-variant: normal;
              font-weight: normal; letter-spacing: normal; line-height: 16px;
              orphans: 2; text-align: start; text-indent: 0px; text-transform:
              none; white-space: normal; widows: 2; word-spacing: 0px;
              background-color: rgb(255, 255, 255); display: inline ! important;
              float: none;"><span class="Apple-converted-space">&nbsp;</span>(2012),








              Volume 35, Issue 36, 15 September 2012, pages 1955--1966.<br>
            </span></span></span></span></p>
    <p style="color: rgb(0, 0, 0); font-size: medium; font-style: normal;
      font-variant: normal; font-weight: normal; letter-spacing: normal;
      line-height: normal; orphans: 2; text-align: start; text-indent: 0px;
      text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;">and








      can be shown bellow</p>
    <table style="width: 100%;" border="0">
      <tbody>
        <tr>
          <td><a href="identification.eps"><img alt="identificarion"
                src="identification.jpg"></a><br>
          </td>
          <td><a href="error.eps"><img alt="error figure" src="error.jpg"></a><br>
          </td>
        </tr>
      </tbody>
    </table>
    <a href="graph.tar.gz">DOWNLOAD </a><span style="color: rgb(0, 0, 238);"><span
        style="text-decoration: underline;"></span></span>FILES USED TO GENERATE
    THE GRAPHICS ABOVE.<br>
    <a href="simulation.tar.bz2">DOWNLOAD</a> FILES USED TO GENERATE THE
    SIMULATIONS<br>
    <h2 style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-style:
      normal; font-variant: normal; letter-spacing: normal; line-height: normal;
      orphans: 2; text-align: start; text-indent: 0px; text-transform: none;
      white-space: normal; widows: 2; word-spacing: 0px;
      -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px;"><a
        id="Instalation" name="features">Features</a></h2>
    <p style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-size:
      medium; font-style: normal; font-variant: normal; font-weight: normal;
      letter-spacing: normal; line-height: normal; orphans: 2; text-align:
      start; text-indent: 0px; text-transform: none; white-space: normal;
      widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto;
      -webkit-text-stroke-width: 0px;">These are the features of the RFID ns-2
      module: </p>
    <ul>
      <li><span style="font-family: 'Times New Roman';">RFID readers and tags
          nodes;</span></li>
      <li><span style=" font-family: 'Times New Roman';">Q algorithm
          anti-collision mechanism;<br>
        </span></li>
      <li><span style=" font-family: 'Times New Roman';">Trace file including
          all nodes identification, time and identified collisions;</span></li>
      <li><span style=" font-family: 'Times New Roman';">QoS mechanism for use
          in Internet of Things (IoT) scenarios.&nbsp;</span></li>
      <li><span style=" font-family: 'Times New Roman';">Configurable variables:
          Q initial value; Constant c; type of service (tracking is the only
          service implemented until now); Nodes ID.</span></li>
      <li><span style=" font-family: 'Times New Roman';">MAC and PHYSICAL layer
          based on ns-2 wireless-phy (wireless-phy.cc) and mac (mac.cc). &nbsp;
          <br>
        </span></li>
    </ul>
    <h2 style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-style:
      normal; font-variant: normal; letter-spacing: normal; line-height: normal;
      orphans: 2; text-align: start; text-indent: 0px; text-transform: none;
      white-space: normal; widows: 2; word-spacing: 0px;
      -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px;"><a
        id="Instalation" name="installation">Installation</a></h2>
    <p style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-size:
      medium; font-style: normal; font-variant: normal; font-weight: normal;
      letter-spacing: normal; line-height: normal; orphans: 2; text-align:
      start; text-indent: 0px; text-transform: none; white-space: normal;
      widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto;
      -webkit-text-stroke-width: 0px;">To install the module, follow the
      instructions below:</p>
    <ol style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-size:
      medium; font-style: normal; font-variant: normal; font-weight: normal;
      letter-spacing: normal; line-height: normal; orphans: 2; text-align:
      start; text-indent: 0px; text-transform: none; white-space: normal;
      widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto;
      -webkit-text-stroke-width: 0px;">
      <li>Download the software<span class="Apple-converted-space">&nbsp;</span><a
          target="_blank"
href="http://sourceforge.net/projects/nsnam/files/allinone/ns-allinone-2.35/ns-allinone-2.35.tar.gz/download">ns-allinone-2.35































          package<br>
        </a></li>
      <li>Download the latest ns-2<span class="Apple-converted-space"> </span><a
          href="https://github.com/rafaelperazzo/ns-2_rfid/archive/master.zip"
          title="RFID Module">RFID module</a><span class="Apple-converted-space">&nbsp;</span>source

























        code from <span style="font-style: italic;">github</span>.</li>
      <li>Unzip the ns-2 RFID module source code file inside <span
          style="font-weight: bold;">ns-allinone-2.35</span> folder.</li>
      <li>Go to the <span style="font-weight: bold;">ns-allinone-2.35/ns-2.35</span>
        directory and execute "<span style="font-family: Courier
          New,Courier,monospace;">./configure</span>", "<span
          style="font-family: Courier New,Courier,monospace;">make clean</span>"
        and "<span style="font-family: Courier New,Courier,monospace;">make</span>".</li>
      <li>If you have root privileges execute "<span style="font-family: Courier
          New,Courier,monospace;">make</span><span style="font-family: Courier
          New,Courier,monospace;"> install</span>".</li>
    </ol>
    <span style="font-family: Times New Roman,Times,serif;"><span style="color:
        rgb(34, 34, 34); font-size: 13px; font-style: normal; font-variant:
        normal; font-weight: normal; letter-spacing: normal; line-height:
        normal; orphans: 2; text-align: start; text-indent: 0px; text-transform:
        none; white-space: normal; widows: 2; word-spacing: 0px;
        background-color: rgb(255, 255, 255); display: inline ! important;
        float: none;">Bellow you will find a video</span></span><span
      style="font-family: Times New Roman,Times,serif;"> </span><span
      style="font-family: Times New Roman,Times,serif;"><span style="color:
        rgb(34, 34, 34); font-size: 13px; font-style: normal; font-variant:
        normal; font-weight: normal; letter-spacing: normal; line-height:
        normal; orphans: 2; text-align: start; text-indent: 0px; text-transform:
        none; white-space: normal; widows: 2; word-spacing: 0px;
        background-color: rgb(255, 255, 255); display: inline ! important;
        float: none;">showing the installation of the module</span></span><br>
    <span style="color: rgb(34, 34, 34); font-family: arial, sans-serif;
      font-size: 13px; font-style: normal; font-variant: normal; font-weight:
      normal; letter-spacing: normal; line-height: normal; orphans: 2;
      text-align: start; text-indent: 0px; text-transform: none; white-space:
      normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto;
      -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);
      display: inline !important; float: none;"></span>
    <ol style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-size:
      medium; font-style: normal; font-variant: normal; font-weight: normal;
      letter-spacing: normal; line-height: normal; orphans: 2; text-align:
      start; text-indent: 0px; text-transform: none; white-space: normal;
      widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto;
      -webkit-text-stroke-width: 0px;">
      <iframe src="http://www.youtube.com/embed/D2w6deoJTJg" allowfullscreen=""
        frameborder="0" height="315" width="420"></iframe><br>
    </ol>
    <br>
    <h2 style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-style:
      normal; font-variant: normal; letter-spacing: normal; line-height: normal;
      orphans: 2; text-align: start; text-indent: 0px; text-transform: none;
      white-space: normal; widows: 2; word-spacing: 0px;
      -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px;"><a
        name="download">Downloads</a></h2>
    <table style="width: 100%" border="1">
      <tbody>
        <tr>
          <td style="background-color: rgb(192, 192, 192); text-align: center;"><span
              style="font-weight: bold;">Description</span></td>
          <td style="background-color: rgb(192, 192, 192); text-align: center;"><span
              style="font-weight: bold;">Link</span></td>
          <td style="vertical-align: top; background-color: rgb(192, 192, 192);"><span
              style="font-weight: bold;">Usage</span></td>
        </tr>
        <tr>
          <td>RFID ns-2 module</td>
          <td><a
              href="https://github.com/rafaelperazzo/ns-2_rfid/archive/master.zip">Download

























              source code version 1.0 (31/01/2013)</a></td>
          <td style="vertical-align: top; text-align: center;">---</td>
        </tr>
        <tr>
          <td style="text-align: left;">tcl example</td>
          <td style="text-align: left;"><a
              href="http://www.ime.usp.br/%7Eperazzo/rfid.tcl">rfid.tcl</a></td>
          <td style="vertical-align: top;"><span style="font-family: Courier
              New,Courier,monospace;">$ ns rfid.tcl</span></td>
        </tr>
        <tr>
          <td style="vertical-align: top;">awk script to calcule number of
            identified tags and elapsed time</td>
          <td style="vertical-align: top;"><a
              href="http://www.ime.usp.br/%7Eperazzo/nodes.awk">nodes.awk</a></td>
          <td style="vertical-align: top;"><span style="font-family: Courier
              New,Courier,monospace;">$ awk -f nodes.awk rfid.tr<br>
            </span>Output: Number of identified tags: <span style="font-style:
              italic;">x</span> during <span style="font-style: italic;">y</span>
            seconds</td>
        </tr>
        <tr>
          <td style="vertical-align: top;">Gnuplot plt, data files (used to
            generate the comparison graphics above) and eps graphic file</td>
          <td style="vertical-align: top;"><a href="graph.tar.gz">graph.tar.gz</a></td>
          <td style="vertical-align: top;"><span style="font-family: Courier
              New,Courier,monospace;">$ gnuplot graficos.plt</span></td>
        </tr>
        <tr>
          <td style="vertical-align: top;">Simulation scripts used to generate
            values used on graphics above</td>
          <td style="vertical-align: top;"><a href="simulation.tar.bz2">simulation.tar.bz2</a></td>
          <td style="vertical-align: top;"><span style="font-family: Courier
              New,Courier,monospace;">$ ./calculate.sh 51 501 50 100<br>
            </span>Simulate number of nodes from 50 to 500, steps of 50, 100
            iterations.<br>
            It will generate around 40Gb of trace files.<br>
            Time: +- 160 minutes (Core i7 - Quad-Core, 16Gb RAM)</td>
        </tr>
      </tbody>
    </table>
    &nbsp;<span style="color: rgb(0, 0, 238);"><span style="font-family: 'Times
        New Roman';"><span style="text-decoration: underline;"></span></span></span>
    <h2 style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-style:
      normal; font-variant: normal; letter-spacing: normal; line-height: normal;
      orphans: 2; text-align: start; text-indent: 0px; text-transform: none;
      white-space: normal; widows: 2; word-spacing: 0px;
      -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px;"><a
        id="Documentation" name="documentation">Documentation</a></h2>
    <p style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-size:
      medium; font-style: normal; font-variant: normal; font-weight: normal;
      letter-spacing: normal; line-height: normal; orphans: 2; text-align:
      start; text-indent: 0px; text-transform: none; white-space: normal;
      widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto;
      -webkit-text-stroke-width: 0px;">Read on-line:</p>
    <p style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-size:
      medium; font-style: normal; font-variant: normal; font-weight: normal;
      letter-spacing: normal; line-height: normal; orphans: 2; text-align:
      start; text-indent: 0px; text-transform: none; white-space: normal;
      widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto;
      -webkit-text-stroke-width: 0px;"><a href="rfid_module-doc.php">ONLINE
        DOCUMENTATION</a></p>
    <h2 style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-style:
      normal; font-variant: normal; letter-spacing: normal; line-height: normal;
      orphans: 2; text-align: start; text-indent: 0px; text-transform: none;
      white-space: normal; widows: 2; word-spacing: 0px;
      -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px;"><a
        id="publications" name="documentation">Publications</a><a
        id="publications" name="documentation"></a></h2>
    <p>No publications yet.</p>
    <p>If you publish any paper using this module, please send me an email. I
      will put the paper link in this page.&nbsp;</p>
    <p><br>
    </p>
    <hr>
    <div style="text-align: center;"><span style="color: rgb(0, 0, 0);
        font-family: 'Times New Roman'; font-size: medium; font-style: normal;
        font-variant: normal; font-weight: normal; letter-spacing: normal;
        line-height: normal; orphans: 2; text-align: start; text-indent: 0px;
        text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;
        -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; display:
        inline !important; float: none;" <a=""
        href="http://www.easycounter.com/"><span style="font-weight: bold;">
          <table style="width: 100%;" border="0">
            <tbody>
              <tr>
                <td style="text-align: center;"><span style="font-weight:
                    normal;"><a href="#introduction">INTRODUCTION</a></span></td>
                <td style="text-align: center;"><span style="font-weight:
                    normal;"><a href="#validation">COMPARISON</a></span></td>
                <td style="text-align: center;"><span style="font-weight:
                    normal;"><a href="#features">FEATURES</a></span></td>
                <td style="text-align: center;"><span style="font-weight:
                    normal;"><span style="color: rgb(0, 0, 238);"><span
                        style="text-decoration: underline;">INSTALLATION</span></span></span></td>
                <td style="text-align: center;"><span style="font-weight:
                    normal;"><a href="#download">DOWNLOADS</a></span></td>
                <td style="text-align: center;"><span style="font-weight:
                    normal;"><a href="#documentation">DOCUMENTATION</a></span></td>
                <td style="vertical-align: top;"><a href="#publications"><span
                      style="font-weight: normal;">P</span><span
                      style="font-weight: normal;">UBLICATIONS</span></a></td>
              </tr>
            </tbody>
          </table>
          <br>
          <br>
          &nbsp;V</span><span style="font-weight: bold;">isitors count:</span> <img
          src="http://www.easycounter.com/counter.php?rafaelperazzo"
          alt="Website Hit Counters" border="0"> </span><br>
      <span style="color: rgb(0, 0, 0); font-family: 'Times New Roman';
        font-size: medium; font-style: normal; font-variant: normal;
        font-weight: normal; letter-spacing: normal; line-height: normal;
        orphans: 2; text-align: start; text-indent: 0px; text-transform: none;
        white-space: normal; widows: 2; word-spacing: 0px;
        -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; display:
        inline !important; float: none;" <a=""
        href="http://www.easycounter.com/"></span></div>
    <span style="color: rgb(0, 0, 0); font-family: 'Times New Roman'; font-size:
      medium; font-style: normal; font-variant: normal; font-weight: normal;
      letter-spacing: normal; line-height: normal; orphans: 2; text-align:
      start; text-indent: 0px; text-transform: none; white-space: normal;
      widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto;
      -webkit-text-stroke-width: 0px; display: inline !important; float: none;"
      <a="" href="http://www.easycounter.com/"><br>
    </span>
    <table style="width: 1297px; height: 81px;" border="0">
      <tbody>
        <tr>
          <td style="text-align: right;"><img style="width: 101px; height:
              101px;" alt="logo_usp" src="logo_usp.jpg"><br>
          </td>
          <td><span style="color: rgb(0, 0, 0); font-family: 'Times New Roman';
              font-size: medium; font-style: normal; font-variant: normal;
              font-weight: normal; letter-spacing: normal; line-height: normal;
              orphans: 2; text-align: start; text-indent: 0px; text-transform:
              none; white-space: normal; widows: 2; word-spacing: 0px;
              -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px;
              display: inline !important; float: none;">I would like to thank my
              advisor Prof. <a target="_blank"
                href="http://www.ime.usp.br/%7Ebatista">Daniel Macêdo Batista</a>,
              <a href="http://www.usp.br">USP</a>, <a
                href="http://www.ime.usp.br">IME</a>.</span><span style="color:
              rgb(0, 0, 238);"><span style="font-family: 'Times New Roman';"><span
                  style="text-decoration: underline;"><span style="color: rgb(0,
                    0, 0);"></span></span></span></span><br>
            <span style="color: rgb(0, 0, 0); font-family: 'Times New Roman';
              font-size: medium; font-style: normal; font-variant: normal;
              font-weight: normal; letter-spacing: normal; line-height: normal;
              orphans: 2; text-align: start; text-indent: 0px; text-transform:
              none; white-space: normal; widows: 2; word-spacing: 0px;
              -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px;
              display: inline !important; float: none;"><span style="font-style:
                italic;"><br>
                Developed by Rafael Perazzo Barbosa Mota (perazzo [at] ime [dot]
                usp [dot] br)</span></span></td>
        </tr>
      </tbody>
    </table>
    <br>
  </body>
</html>
