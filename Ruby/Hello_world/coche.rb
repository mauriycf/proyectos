class Coche
    
     ruedas = 4
     motor = "450"
     gasolina = true
    
    def initialize
        
    end
    def arrancar
         puts "está arrancando"
    end
    def frenar
        puts "estoy frenando"
    end
    def girar
        puts "estoy girando"
    end
end

mazda = Coche.new()
mazda.arrancar
mazda.frenar
mazda.girar