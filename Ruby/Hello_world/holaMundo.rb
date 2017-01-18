
class HolaMundo
    def initialize()
        
    end
    def saluda()

        puts "Ingrese un número: "
        STDOUT.flush
        num1 = gets.to_i

        puts "Ingrese un número: "
        STDOUT.flush
        num2 = gets.to_i

        resultado = num1 + num2

        puts resultado

    end

end

objeto = HolaMundo.new()
objeto.saluda