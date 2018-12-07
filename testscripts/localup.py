#!/usr/bin/env python3  
import sys
import os
import time
import random
import string
from subprocess import Popen, PIPE, STDOUT

rand= ''.join(random.choice(string.ascii_uppercase + string.digits) for _ in range(7))
command ="scp -v -i old_cloud_project.pem 45sec.ogv ubuntu@34.227.65.12:/var/www/html/videos/TESTING"+str(rand)+" >/dev/null"

p = Popen(command, shell=True, stdin=PIPE, stdout=PIPE, stderr=STDOUT, close_fds=True)
output = p.stdout.read()
print (output)


