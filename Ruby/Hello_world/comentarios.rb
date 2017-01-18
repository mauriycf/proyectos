=begin
    Aqui hacemos la definicion de la clase Hola Mundo
    Colocamos el método constructor
    y por ultimo creamos un método saluda.
=end
rescue => exception
    
end
class HolaMundo

    def initialize()
        
    end

    def saluda()
        puts "Hola mundo" #Imprimimos el mensaje de "Hola Mundo"
    end

end

# Creamos el objeto de la clase Hola Mundo
objeto = HolaMundo.new()
objeto.saluda