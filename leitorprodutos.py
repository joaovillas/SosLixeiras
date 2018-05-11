f = open("linhasdelimpeza.txt","r")

texto = f.readlines()




nomearquivo = "linhaslimpezasql.txt"
start = 0
fim = 0

nome = ""
uso = ""
apresentacao = ""
fragrancia = ""



r = open(nomearquivo,"w")
db = "insert into produtos_limpeza (nome, uso, apresentacao, fragrancia,imagem) VALUES "
r.write(db)
for linha in texto:
    
    if linha[0] != "\n" or linha[0]!=" ":
        
        for posicao , char in enumerate(linha):
            if char ==":" :
                start = posicao+1
                fim = len(linha)
                if linha [0] == "N":
                    nome =linha[start:fim]              
                    nome = nome.replace("\n","")
                    
                if linha [0] == "U":
                    uso =linha[start:fim]              
                    uso = uso.replace("\n","")
                    
                if linha [0] == "A":
                    apresentacao =linha[start:fim]              
                    apresentacao = apresentacao.replace("\n","")
                    
                if linha [0] == "F" :
                    fragrancia =linha[start:fim]              
                    fragrancia = fragrancia.replace("\n","")           
                    r.write ("('"+nome+"', '"+uso+"', '"+apresentacao+"' , '"+fragrancia+"','(Imagem)' \n),")

r.write(";")
f.close()
r.close()



        
        
            
            

                
            


        