#!/usr/bin/env python3

import sys
import os
import time

mydict = {"ip-172-31-26-8.ec2.internal:50075":"100.26.36.129:50075",
          "ip-172-31-31-46.ec2.internal:50075":"34.203.213.13:50075",
          "ip-172-31-31-55.ec2.internal:50075":"34.224.89.168:50075"}



if(len(sys.argv)) is not 2:
    print("have a path as an argument")
    exit(1)

PATH=sys.argv[1]

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

         #      command ="curl -i -L \""+fullurl+"\""
         command = fullurl
         return command
                                                                                                                



HOST= "ec2-54-88-201-242.compute-1.amazonaws.com"
PORT=str(50070)


command = "curl -i -L "
command += "\"http://" +HOST+":"+PORT+"/webhdfs/v1/"+PATH+"?op=OPEN\""
#print(command)
#command+=" | tac | tac "
#print(command)
myerrormessage=os.popen(command).read()


#sys.stdout.flush()
#sys.stdin.flush()








# time.sleep(1)
#for line in myerrormessage:
secondcommand = createURL(myerrormessage)

print(secondcommand)

#mycommand = open("command.txt","w")
#mycommand.write(secondcommand)
#mycommand.close()


#hello = open("command.txt","r")
#mycommandnew=hello.read()

#os.popen(secondcommand)
#secondcommand = "echo \"" +myerrormessage+"\" | ./executecommand.py"

#hello.close()

#os.system("bash command.txt")
#try:
 #   os.popen(secondcommand) 
#except:
#    pass
#curl -i -L "http://<HOST>:<PORT>/webhdfs/v1/<PATH>?op=OPEN
 #                   [&offset=<LONG>][&length=<LONG>][&buffersize=<INT>]"
