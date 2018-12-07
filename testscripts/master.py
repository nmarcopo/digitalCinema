#!/usr/bin/env python3

import sys
import os
import time

mydict = {"ip-172-31-17-11.ec2.internal:50075":"18.212.239.105:50075",
          "ip-172-31-19-105.ec2.internal:50075":"34.224.223.65:50075",
          "ip-172-31-27-32.ec2.internal:50075":"52.201.254.137:50075"}


if(len(sys.argv)) is not 3:
    print("have a path as an argument")
    exit(1)

PATH=sys.argv[1]
SAVE=sys.argv[2]

def createURL(myinput):
    for line in myinput.splitlines():

     if "Location:" in line:
         #print(line)
         OLDIP=line.split()[1]
         #print(OLDIP)
         data=OLDIP.split("//")
         firsthalf=data[0]
         secondhalf=data[1]
         newdata=secondhalf.split("/")
         out=newdata[0]

         newurl=mydict[out]
         buildurl=""
         for item in newdata[1:]:
              buildurl=buildurl+"/"+item

         fullurl=firsthalf+"//"+newurl+buildurl

         command ="curl -i -L --output "+SAVE+" \""+fullurl+"\" -w \"%{speed_download},%{size_download}\n\""
         #command = fullurl
         return command
                                                                                                                



HOST= "ec2-54-152-241-221.compute-1.amazonaws.com"
PORT=str(50070)


command = "curl -i -L "
command += "\"http://" +HOST+":"+PORT+"/webhdfs/v1/"+PATH+"?op=OPEN\""

myerrormessage=os.popen(command).read()
#print(myerrormessage)
#for line in myerrormessage:
secondcommand = createURL(myerrormessage)

#print(secondcommand)

mycommand = open("command.txt","w")
mycommand.write(secondcommand)
mycommand.close()


#hello = open("command.txt","r")
#mycommandnew=hello.read()

#os.popen(secondcommand)
#secondcommand = "echo \"" +myerrormessage+"\" | ./executecommand.py"

#hello.close()
#sys.out.write("SPEED: ")
os.system("bash command.txt")
#lastmessage=os.popen("bash command.txt").read()
#print(lastmessage)
#try:
 #   os.popen(secondcommand) 
#except:
#    pass
#curl -i -L "http://<HOST>:<PORT>/webhdfs/v1/<PATH>?op=OPEN
 #                   [&offset=<LONG>][&length=<LONG>][&buffersize=<INT>]"
