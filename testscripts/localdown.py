#!/usr/bin/env python3                                                                                                                                                       

import sys
import os
import time


command = "curl -i -L --output hello.testing \"http://34.227.65.12/videos/45sec.ogv\" -w \"%{speed_download},%{speed_upload}\""
myerrormessage=os.popen(command).read()
print(myerrormessage)

