#bin/env/python3

import os, sys, random
from colorama import Fore, Style, Cursor, Back

os.system("clear")
os.system("apt install toilet")
os.system("apt install rig")
os.system("apt install cowsay")
os.system("apt install ruby")
os.system("gem install cowsay")
os.system("clear")
os.system("toilet -f mono12 -F gay Random")
os.system("toilet -f mono12 -F gay Address")
print(Fore.RED + Back.GREEN + "")
os.system("cowsay -f ghostbusters Viperzcrew")
print(Style.RESET_ALL)
print("")
print(Fore.MAGENTA + "[1] - Generate Addresses (Kali Users)")
print(Fore.MAGENTA + "[2] - Generate Address + Creditcards (Termux Users)")
print(Fore.MAGENTA + "[3] - Reset your generated address (do it after restarting the tool)")
print(Fore.MAGENTA + "[4] - Credits")
print(Fore.MAGENTA + "[99] - Exit")
print(" ")
inp1 = input(Fore.RED + "< u0_a245@localhost ~> ")

if inp1=="1":
        os.system('history -c')
        inp2 = int(input(Fore.GREEN + "How many addresses do you want to generate?: "))
        inp3 = input(Fore.RED + "Do you want to save the addresses into a text file [Y/N]?: ")
        if inp3=="y" or inp3=="Y":
                y = inp2
                while y > 0:
                       	y -= 1
                        os.system('echo " " >> addresses.txt && echo "- by MrBlackX -" >> addresses.txt && echo " " >> addresses.txt && echo "================" >> addresses.txt && echo " " >> addresses.txt && rig >> addresses.txt && echo " " >> addresses.txt && echo "================" >> addresses.txt && echo " " >> addresses.txt')
                        print(Fore.GREEN + "Successfully saved!")
                        print(" ")
                print(Fore.BLUE + "Type : cat addresses.txt")
        else:
                n = inp2
                while n > 0:
                        n -= 1
                        os.system("rig")

if inp1=="2":
        os.system("apt install php")
        os.system("php file.php")


if inp1=="4":
        print(Fore.CYAN + "Created by MrBlackX")
        print(Fore.CYAN + "Join us: t.me/viperzcrew")
        sys.exit(3)

if inp1=="3":
        os.system("cd /root/random-address/")
        os.system("rm -rf addresses.txt")
        sys.exit(3)

if inp1=="99":
        print("thanks for using our script :)")
        sys.exit(3)
