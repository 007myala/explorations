# SOS : An Emotion AI
Digital Futures Explorations
Course No. 6909-001

# About
SOS is an emotion artificial intelligence that attempts to reduce occurences of suicide by allowing people with depression and suicidal ideation to seek help or counsel from their friends and family without fear or judgement. The application tracks certain physical and psychological metrics which it then uses to guage the user's emotional vulnerability. The emotion AI then chooses the correct course of action e.g call a warrior or alert 911 that the person is in danger. 

# License 

Copyright (C) 2018 Maria. A. Yala

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

# Technologies used by the application:
Geolocation
Voice Recognition
Emotion Artificial Intelligence
Facial recognition
geolocation, voice recognition and 

# To Do:
1. Make calls to the Google Glass rest API to display messages and instructions or launch a virtual hangout.
2. Incorporate Google Maps to track location
3. Figure out how to mark or pin a location on a google map as a danger zone.
4. Incorporate p5.js animations to simpulate the "impossible" parts of the technology
5. Add some css to correctly layout elements on the pages
6. Fix the multi-step form functionality
7. Add functionality and pages to handle a warrior's perspective

# Program Files
index.php

The landing page which will display a message about the application and two buttons - login & signup

login.php

A page displaying a form to collect a username and a password

signup.php

A page to collect the user's initial data such as age and gender. This page leads to the initialize.php page which presents a questionnaire for a self-care checklist so that a user can set boundaries and danger zones.

initialize.php

A page presenting a self-care checklist that allows the user to set boundaries for different metrics that the emotion AI will track. This page leads to caibrate.php    
    1. Isolation - How many hours a day/week does the user want of face-to-face interaction?
    2. Drinking - How much alcohol is the user consuming?
    3. Insomnia - How many hours a night does the user need?
    4. Activity Level - How many hours a day has the user been active?
    5. Excercise - How much exercise is the user getting?
    6. Eating - Is the user under/overeating?
    7. Trigger words - What kind of words does the user user when depressed?
    8. Trigger thoughts - What kinds of negative thoughts does the user have?
    9. Self-care activities - a list of possible self-care activities for the user to pick

calibrate.php

A page displaying the BVELF Test, a calibration process of the sensors and devices needed by the emotion AI

    B - Biometric data calibration - This data is collected via an injectable bio-chip and a wearable wrist band that tracks activity
    V - Voice recognition - This sensor records and analyzes user's speech patterns in real-time. It is part of wearable headgear
    E - Emotion recognition - This sensor is attached to a wearable headgear device that has neurosensors which are in contact with a user's temples
    L - Geo-location tracking - This data is collected using the Google Maps API
    F - Facial recognition - At initialization, the user's face is scanned in and is stored in the database. This data is then used to track and identify the user for example if they visit a designated suicide zone. 

# Reference Links
Creating a multi-step form - https://www.w3schools.com/howto/howto_js_form_steps.asp

