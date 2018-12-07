#!/usr/bin/env python3  

import sys
import os
args=sys.argv

if len(args) is not 1:
    print("incorrect input")
    sys.exit()

movies="45sec.ogv"

for item in range(1):
    file=open("test.submit"+str(item+1),"w+")
    file.write("stream_output = True\n")
    file.write("universe = vanilla\n")
    file.write("output = out.$(PROCESS)\n")
    file.write("executable = /tmp/asura/newmaster.py\n")
    file.write("arguments = videos/mystore$(PROCESS).ogv 45sec.ogv\n")
    file.write("transfer_input_files = 45sec.ogv\n")
    file.write("should_transfer_files = yes\n")
    file.write("when_to_transfer_output = on_exit\n")
    file.write("log = test.logfile\n")
    file.write("queue 500\n")

    command = "condor_submit test.submit" +str(item+1)
    file.close()
    os.system(command)
    deletecommand = "rm test.submit"+str(item+1)
    os.system(deletecommand)
print("\nWaiting for jobs to complete\n\n")
os.system("condor_wait test.logfile")
    


