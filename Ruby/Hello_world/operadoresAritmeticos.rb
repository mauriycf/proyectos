
class HolaMundo
    def initialize()
        
    end
    def saluda()
        suma = 2 + 3
        resta = 2 - 3
        multiplicacion = 2 * 3
        division = 2 / 3
        exponente = 2**3
        puts suma,resta,multiplicacion,division,exponente
    end
    def variable()
        variable = (10+2)/(3*2)
        puts variable
    end
end

objeto = HolaMundo.new()
objeto.variable