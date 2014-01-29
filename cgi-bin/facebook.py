#!G:/python2.7.3/python.exe
import cgi, cgitb 
import urllib
from urllib import urlopen
import urllib2


##facebook
def printlinkfb(page):
    fname=''
    lname=''
    age=''
    sex=''
    glink=''
    fblink=''
    friends=''
    interests=''
    homecity=''
    currentcity=''
    homestate=''
    currentstate=''
    homecountry=''
    currentcountry=''
    birthday=''
    school1=''
    school2=''
    college1=''
    college2=''
    company1=''
    company2=''
    contact1=''
    contact2=''
    email=''
        
    flag=0
    #print name
    start_name=page.find('<strong>')
    if start_name==-1:
        flag=1
    if flag==0:
        end_name=page.find('</strong>',start_name+1)
        name=page[start_name+8:end_name]
        #print name
        print "<h2>%s</h2>"%(name)
        fname=name
    if flag==1:
        exit
        
            #cursor.execute("INSERT INTO search5(Fname)VALUES(%s)",name)
    """flag=0
    #print image
    start_image=page.find('<hr /><img src="')
    if start_image==-1:
        flag=1
    if flag==0:
        end_image=page.find('"',start_image+20)
        picture_page=page[start_image+16:end_image]
        opener1 = urllib2.build_opener()
        page1 = opener1.open(picture_page)
        my_picture = page1.read()
        filename = "my_image" + str(x)+picture_page[-4:]
        print filename  
        fout = open(filename, "wb")
        fout.write(my_picture)
        fout.close()
        webbrowser.open(filename)
    #print url
    flag=0
    start_link=page.find('<a href="/r.php?next=')
    if start_link==-1:
        flag=1
    if flag==0:
        start_link=start_link+21
        end_link=page.find('">Sign Up</a>')
        link=page[start_link:end_link]
        link=link.replace('%3A%2F%2Fm','://www')
        link=link.replace('%2F','/')
        print link
        fblink=link
    #print friends
    flag=0
    start_friends=page.find('friends:')
    if start_friends==-1:
        flag=1
    if flag==0:
        print 'FRIENDS'
        while True:
            temp=page.find('width="50" height="50" /></a>',start_friends)
            if temp==-1:
                break
            friend_start_name=page.find('rel="friend">',temp)
            friend_end_name=page.find('</a>',friend_start_name)
            friend_name=page[friend_start_name+13:friend_end_name]
            friends+=friend
            print friend
            start_friends=friend_end_name
    #print likes
    flag=0
    end_test=page.find('</td></tr></table><br /><small><b>English (US)')
    end_test=end_test-10
    page_like=page.find('likes:')
    if page_like==-1:
        flag=1
    if flag==0:
        print 'LIKES:'
        while page_like<end_test:
            page_like2=page.find('<a href="/',page_like)
            start_like=page.find('">',page_like2)
            end_like=page.find('</a>',start_like)
            like=page[start_like+2:end_like]
            interests+=like
            print like            
            page_like=end_like
    #insert into database
    conn=MySQLdb.connect(host="localhost",user="root",passwd="jaimatadi",db="peoplesearch")
    with conn:
        cursor=conn.cursor()
        cursor.execute("INSERT INTO search5(Fname,Lname,Sex,Age,Home_City,Current_City,Home_State,Current_State,Home_Country,Current_Country,School1,School2,College1,College2,Company1,Company2,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES(%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)",(fname,lname,sex,age,homecity,currentcity,homestate,currentstate,homecountry,currentcountry,school1,school2,college1,college2,company1,company2,friends,fblink,glink,email,contact1,contact2,interests,birthday))"""


##google+
def printlinkgoogle(page):
    fname=''
    lname=''
    age=''
    sex=''
    glink=''
    fblink=''
    friends=''
    interests=''
    homecity=''
    currentcity=''
    homestate=''
    currentstate=''
    homecountry=''
    currentcountry=''
    birthday=''
    school1=''
    school2=''
    college1=''
    college2=''
    company1=''
    company2=''
    contact1=''
    contact2=''
    email=''

    #print name
    start_name=page.find('ss="a-o h-q-o-ca fn a-f-e dK">')
    if start_name<>-1:
        end_name=page.find('</a>',start_name)
        name=page[start_name+30:end_name]
        print "<h2>%s</h2>"%(name)
        fname=name
    """#print gender
    temp_gender=page.find('Gender')
    if temp_gender<>-1:
        start_gender=page.find('class="Ga a-f-e">',temp_gender)
        end_gender=page.find('</div>',start_gender)
        gender=page[start_gender+17:end_gender]
        print gender
        if gender=='Male':
            sex='m'
        else:
            sex='f'
            
    #print image url
    temp=page.find('profile_photo"><')
    if temp<>-1:
        start_image=page.find('<img src="',temp)
        end_image=page.find('" width="250px"',start_image)
        image_url=page[start_image+10:end_image]
        image_url='http:'+image_url
        print image_url
    #print friends
    start_friends=page.find('max-width:104px>')
    while start_friends<>-1:
        end_friends=page.find('</a>',start_friends)
        friend=page[start_friends+16:end_friends]
        print friend
        start_friends=page.find('max-width:104px>',end_friends)
        #friends+=friend
        
    #print education
    temp_education=page.find('Education')
    if temp_education<>-1:
        start_education=page.find('<div class="yz">',temp_education)
        while start_education<>-1:
            end_education=page.find('</div>',start_education)
            education=page[start_education+16:end_education]
            start_duration=page.find('<div class="Sx">',end_education)
            end_duration=page.find('</div>',start_duration)
            duration=page[start_duration+16:end_duration]
            print education+"------>"+duration
            start_education=page.find('<div class="yz">',end_duration)
            #school1+=education
    #insert into databse
    conn=MySQLdb.connect(host="localhost",user="root",passwd="jaimatadi",db="peoplesearch")
    with conn:
        cursor=conn.cursor()
        cursor.execute("INSERT INTO search5(Fname,Lname,Sex,Age,Home_City,Current_City,Home_State,Current_State,Home_Country,Current_Country,School1,School2,College1,College2,Company1,Company2,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES(%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)",(fname,lname,sex,age,homecity,currentcity,homestate,currentstate,homecountry,currentcountry,school1,school2,college1,college2,company1,company2,friends,fblink,glink,email,contact1,contact2,interests,birthday))       """


form = cgi.FieldStorage()
Fname=form.getvalue('Fname')
Lname=form.getvalue('Lname')
print "Content-type:text/html\r\n\r\n"
print "<html>"
print "<head>"
print "</head>"
print "<body>"

urlfb='http://www.facebook.com/public/'+Fname+'%20'+Lname
urlgoogle="http://plus.google.com/s/"+Fname+'%20'+Lname+'/people'
urllinked="http://in.linkedin.com/pub/dir/"+Fname+"/"+Lname


##facebook
pagefb=urlopen(urlfb).read()
start=-1
while 1:
    start=pagefb.find('largeImage lfloat" href="http://www.facebook.com/')
    if start==-1:
        break
    end=pagefb.find('" onclick="if (event.button == 0)',start+5)
    linkfb=pagefb[start+25:end]
    print "<h2>%s</h2>"%(linkfb)
    pagefb=pagefb[end:]
    #pagefb1=urlopen(linkfb).read()
    #printlinkfb(pagefb1)


##google+
pageg=urlopen(urlgoogle).read()
start=pageg.find("key: '39'")
pageg=pageg[start:]
start=pageg.find("https://plus.google.com/")
while start<>-1:
    end=pageg.find('"]',start)
    linkgoogle=pageg[start:end]
    print "<h2>%s</h2>"%(linkgoogle)
    pageg=pageg[end:]
    start=pageg.find("https://plus.google.com/")
    #pageg1=urlopen(linkgoogle).read()
    #printlinkgoogle(pageg1)



##linkedin
pagel=urlopen(urllinked).read()
temp=pagel.find("<strong>View Full Profile")
pagel=pagel[temp+3:]
start=pagel.find("<strong>")
while start<>-1:
    #page=page[start:]
    end=pagel.find('" title="',start)
    print "<h2>%s</h2>"%(pagel[start+18:end])
    pagel=pagel[end:]
    temp=pagel.find("<strong>View Full Profile")
    pagel=pagel[temp+3:]
    start=pagel.find("<strong>")
    #print page

print "</body>"
print "</html>"
