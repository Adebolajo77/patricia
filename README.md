# [Project Overview](https://github.com/5ran6/patricia) [![Tweet](https://img.shields.io/twitter/url/http/shields.io.svg?style=social&logo=twitter)](https://twitter.com/5ran6)


 ![version](https://img.shields.io/badge/version-1.0.0-blue.svg)  ![license](https://img.shields.io/badge/license-APACHE-blue.svg) [![GitHub issues open](https://img.shields.io/github/issues/5ran6/patricia.svg?maxAge=2592000)](https://github.com/5ran6/patricia/issues?q=is%3Aopen+is%3Aissue) [![GitHub issues closed](https://img.shields.io/github/issues-closed-raw/5ran6/patricia.svg?maxAge=2592000)](https://github.com/5ran6/patricia/issues?q=is%3Aissue+is%3Aclosed) (https://badges.gitter.im/NIT-dgp/General.svg)](https://gitter.im/creative-tim-general/Lobby) [![Chat](https://img.shields.io/badge/chat-on%20discord-7289da.svg)](https://discord.gg/E4aHAQy)


![Product Gif](https://images.squarespace-cdn.com/content/v1/59b037304c0dbfb092fbe894/1585520436123-MWPLA6SVPPW9PJGYUYLL/ke17ZwdGBToddI8pDm48kM8ovl2IWJKCHB5zy2s-rqZ7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QHyNOqBUUEtDDsRWrJLTm3Qo48J5H1zFfLA8ErqpsRm2Z5pNfU6V0Zw_Wt0I4bsz0mfBzWOFLv680Lk3cXuzo/main_RGB_LED_animation.gif?format=1000w)

Arduino client - PHP Server project is a simple communication system designed with Arduino and PHP. PHP acts the server, while arduino acts as the client who communicates to the server. The client makes a post request to the server using an API and the server responds back. 

The objective of this project was to use and Arduino to read a sensor and send the values to the internet, to be stored in a Web Server and displayed.

It consists in an Arduino Uno with an Ethernet Shield and a DHT 11 temperature / moisture sensor, acting as a Web Client. It sends POST requests with the readings to a web server running a custom Database and PHP application.

The PHP app stores the values when new POST requests are received and also serves the pages that display the information.
The D3.js to dynamically show the data stored in the Database.

The Arduino it's configured to use a Dynamic IP Address, in order to solve any conflicting IP issues, and also to work easily with most home networks/routers.

This project is divided in 2 main parts:

# PART 1
- Arduino Web client Application: reads the sensor values and sends them to the webserver.
- PHP/MySQL Application: handles the POST requests that are sent to the server and serves the pages to clients who connect 
# PART 2
- Data Visualization: The PHP application will use the Javascript Framework D3.js to display the values stored in the DB with graphics. It will allow to navigate to the past days to observe the readings
REQUIREMENTS


# HARDWARE

*Arduino Uno
Ethernet Shield (eBay clone)
DHT 11 sensor
breadboard
10k Ohm resistor
USB cable
Ethernet cable
wires
piece of acrylic
PCB spacers
Software

- To use this project, you need access to a web server ( can be from a free hosting company ) with capability to run PHP applications and also to create databases. ( possibly cPanel with phpMyAdmin)





## Table of Contents

* [Quick Start](#quick-start)
* [Documentation](#documentation)
* [File Structure](#file-structure)
* [Licensing](#licensing)



## Quick start

- Clone the repo: `git clone https://github.com/5ran6/patricia.git`.
- [Download from Github](https://github.com/5ran6/patricia/archive/master.zip).
- Edit `wificlient.ino` and edit the WiFi parameters which include SSID and PASSWORD to those of your router. 
- Edit `api.php` configurations to suit yours


## Documentation
The documentation for this project is hosted on [website](https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html).


## File Structure
Within the download you'll find the following directories and files:

```
patricia/
├── server/
|   ├── server/
|   |   ├── index.php
|   |   └── api.php
|   └── arduino/
|        └── wificlient.ino
|
```


## Technical Support or Questions

If you have questions or need help integrating the product please [contact me](https://github.com/5ran6/patricia/issues) instead of opening an issue.



## Licensing

- Licensed under APACHE 2.0 (https://github.com/5ran6/patricia/LICENSE)



