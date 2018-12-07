#!/usr/bin/env python3

import sys
import os
import time

mydict = {"ip-172-31-17-11.ec2.internal:50075":"18.212.239.105:50075",
          "ip-172-31-19-105.ec2.internal:50075":"34.224.223.65:50075",
          "ip-172-31-27-32.ec2.internal:50075":"52.201.254.137:50075"}



if(len(sys.argv)) is not 3:
    print("have a path as an argument and then localfile as argument")
    exit(1)

PATH=sys.argv[1]
local=sys.argv[2]

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

         command ="curl -i -X PUT -T "+local+" \""+fullurl+"\" -w \"%{speed_upload},%{size_upload}\n\""
         return command
                                                                                                                



HOST= "ec2-54-152-241-221.compute-1.amazonaws.com"
PORT=str(50070)


command = "curl -i -X PUT "
command += "\"http://" +HOST+":"+PORT+"/webhdfs/v1/"+PATH+"?op=CREATE\""

myerrormessage=os.popen(command).read()




secondcommand = createURL(myerrormessage)


mycommand = open("command.txt","w")
mycommand.write(secondcommand)
mycommand.close()


os.system("bash command.txt")
print("DATA")
