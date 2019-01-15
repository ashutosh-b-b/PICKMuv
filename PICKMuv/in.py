import bs4
import requests
import mysql.connector
 
 
 
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="NO",
  database="moviereg"   
)
 
mycursor = mydb.cursor()
sql = "SELECT name FROM addmovie WHERE id = LAST_INSERT_ID()"
 
mycursor.execute(sql)
name = mycursor.fetchall()

for n in name : 
	s = n[0]
	print(n[0])
s = s.lower()
s = s.replace(" ", "_")
link = 'https://www.rottentomatoes.com/m/'
link = link + s
res= requests.get(link)
txt = res.text
soup = bs4.BeautifulSoup(res.text)
points = soup.select("span.meter-value.superPageFontColor")
cast = soup.select("div.media-body")
print(points)
sql = """Update addmovie set rottom = %s where name = %s"""
   rottom = points[50] + points[51]
   name = n[0]
mycursor.execute(sql)
 
mydb.commit()
 
print(mycursor.rowcount, "record inserted.")