# test-vaimo

Simple PHP script that imitates the elevator. 
Scripts get a GET-Request with the current floor and destination floor and the elevator starts moving. (As the output is in web-browser or Postman it will appear after elevator reaches the point of destination). 
The elevator implemented as a class. Class attributes are current floor, maximum and minimum floor and time that was spent in the way.
If the destination floor will be upper maximum floor or lower minimum script outputs that there is no such floor.
