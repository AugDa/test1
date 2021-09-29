
def kto(pesel):
     
     ostcyfra=pesel%10
     pesel-=ostcyfra
     pesel/=10 #pesel 10 liczbowy
     czy_parzyste(pesel)


def czy_parzyste(wynik):
    if wynik%2==0:     
       print("K")
    else:
           print("M")


pesel = int(input('podaj pesel kolego:'))
kto(pesel)
'''
punkty = int(input('podaj punkty klasy:'))
frekwncja = float(input('podaj frekwencje klasy:'))
srednia = float(input('podaj średnią klasy:'))
if frekwncja>94.0 and srednia>=4.0:
    punkty+=20
    print('Aktualna liczba puntktów wynosi:'+ str(punkty))
else:print('Aktualna liczba puntktów wynosi:'+str(punkty))
'''