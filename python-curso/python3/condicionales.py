
#Inicializacion de Variables

x = int(input("Ingresa un entero, por favor: "))

if x<0:
    x = 0
    print('Negativo cambiado a cero')
elif x == 0:
    print('cero')
elif x == 1:
    print('simple')
else:
    print('Mas')

input()