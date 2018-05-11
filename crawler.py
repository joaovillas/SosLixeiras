# -*- coding: utf-8 -*-

from urllib.request import urlopen as req 
from bs4 import BeautifulSoup as soup 

my_url = 'http://ramon.salvador.br/sos/site/produtos.html'


cliente = req(my_url)

pagina_html = cliente.read()
cliente.close()

pagina_soup = soup(pagina_html,'html.parser')
containers = pagina_soup.findAll('div',{'class':'col-md-3 col-sm-6 col-xs-6'})


name = 'produtos.txt'
f = open(name,'w')
DB = 'Insert Into "produtos" ("Nome","Categoria","Imagem") Values '
f.write(DB)
for container in containers :
    content = container.find('div',{'class' :'collection-img'})
    img=content.img['src']
    

    nome = container.find('div',{'class':'collection-content'})
    nomeprod = nome.text.replace('\n','')
    
    sql = '('+"'"+nomeprod+"'"+','+"'"+nomeprod+"'"+','"'"+img+"'"+'),'
    
    f.write(sql)

f.write(';')
f.close()
