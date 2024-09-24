# simpleBruteforcePHP
This is a simple proof of concept of a brute force attack with Python on HTML and PHP login forms.

--------
First the local server with php or other such as xampp, apache, python, etc. must be set up.
```
php -S 0.0.0.0:3737 > /dev/null 2>&1 &
```
The above command raises php in the background, so to stop it at the end of the test we use kill (linux).
```
killall -9 php
```

-------
luego ejecutar el script con python.
```
python bruteForce.py
```

To see the login panel, in your browser paste the local ip and the port used:
```
0.0.0.0:3737
```
