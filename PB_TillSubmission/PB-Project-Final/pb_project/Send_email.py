import datetime
import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
from email.mime.base import MIMEBase
from email import encoders
import sys


name = sys.argv[2]
toaddr = sys.argv[1]
fromaddr = "parthgarg9@gmail.com"
msg = MIMEMultipart()
msg['From'] = fromaddr
msg['To'] = toaddr

msg['Subject'] = "Registration Successful " + name

body = "Dear "+name+",\nYou have been succesfully registered\nTo use our services simply login to the application from the home page!\n\nHoping you are and will remain safe\nTeam WeConnect"

msg.attach(MIMEText(body, 'plain'))
server = smtplib.SMTP('smtp.gmail.com', 587)
server.starttls()

server.login(fromaddr, "Hollow-Man")
text = msg.as_string()

server.sendmail(fromaddr, toaddr, text)
server.quit()

print(fromaddr)