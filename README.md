# [Documentation](https://github.com/5ran6/patricia) [![Tweet](https://img.shields.io/twitter/url/http/shields.io.svg?style=social&logo=twitter)](https://twitter.com/5ran6)


 ![version](https://img.shields.io/badge/version-1.0.0-blue.svg)  ![license](https://img.shields.io/badge/license-APACHE-blue.svg) [![GitHub issues open](https://img.shields.io/github/issues/5ran6/patricia.svg?maxAge=2592000)](https://github.com/5ran6/patricia/issues?q=is%3Aopen+is%3Aissue) [![GitHub issues closed](https://img.shields.io/github/issues-closed-raw/5ran6/patricia.svg?maxAge=2592000)](https://github.com/5ran6/patricia/issues?q=is%3Aissue+is%3Aclosed) [![Chat](https://img.shields.io/badge/chat-on%20whatsapp-7289da.svg)](https://wa.me/2348036339292)


![Circuit Design](https://www.makerguides.com/wp-content/uploads/2019/08/DHT11-with-Arduino-UNO-wiring-diagram-schematic.jpg)

Arduino client - PHP Server project is a simple communication system designed with Arduino and PHP. PHP acts the server, while arduino acts as the client who communicates to the server. The client makes a post request to the server using an API and the server responds back. 

The objective of this project was to use and Arduino to read a sensor and send the values to the internet, to be stored in a Web Server and displayed.

It consists in an Arduino Uno with an Ethernet Shield and a DHT 11 temperature / moisture sensor, acting as a Web Client. It sends POST requests with the readings to a web server running a custom Database and PHP application.

The PHP app stores the values when new POST requests are received and also serves the pages that display the information.
The D3.js to dynamically show the data stored in the Database.

The Arduino it's configured to use a Dynamic IP Address, in order to solve any conflicting IP issues, and also to work easily with most home networks/routers.

This project is divided in 2 main parts:

### PART 1
- Arduino Web client Application: reads the sensor values and sends them to the webserver.
- PHP/MySQL Application: handles the POST requests that are sent to the server and serves the pages to clients who connect 
### PART 2
- Data Visualization: The PHP application will use the Javascript Framework D3.js to display the values stored in the DB with graphics. It will allow to navigate to the past days to observe the readings


## REQUIREMENTS


### HARDWARE

Arduino Uno

Ethernet Shield (eBay clone)

DHT 11 sensor

breadboard

10k Ohm resistor

USB cable

Ethernet cable

Jumper wires

Piece of acrylic

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
The documentation for this project is hosted on [website](https://docs.google.com/document/d/103eUxL32lZrsbmdlP5TmienL40dRTqspvDHs4G36-_U/edit?usp=sharing).


## File Structure
Within the download you'll find the following directories and files:

```
patricia/
├── arduino_php_server/
|   ├── server/
|   |   ├── add.php
|   |   ├── connect.php
|   |   └── index.php
|   ├── others/
|   |   └── DHT Library.zip
|   └── arduino/
|        └── wificlient.ino
|
```


## Technical Support or Questions

If you have questions or need help integrating the product please [contact me](https://github.com/5ran6/patricia/issues) instead of opening an issue.



## Licensing

- Licensed under APACHE 2.0 (https://github.com/5ran6/patricia/LICENSE)



