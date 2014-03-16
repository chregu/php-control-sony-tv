<?php

include "lib.php";
$tvip = "192.168.50.24";


switchHDMI(3);

sendCommand("Options");
usleep(600000);
sendCommand("Down");
usleep(10000);
sendCommand("Down");
usleep(10000);
sendCommand("Return");


