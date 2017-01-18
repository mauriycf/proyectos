
class HolaMundo
    def initialize()
        
    end
    def saluda()
        hora = 8
        if hora < 12
            puts "Buenos Dias"
        elsif hora >12 && hora < 18
            puts "Buenas Tardes"
        elsif hora > 18
            puts "Buenas Noches"
        end
    end
end

objeto = HolaMundo.new()
objeto.saluda
