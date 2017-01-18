=begin
    Tipos de variables en Ruby.
=end

=begin
          to_i que convierte a enteros
          to_f que convierte a flotante
          to_s que convierte a cadenas

          conversion Estrictos
          to_str
          to_int  
=end

class HolaMundo

    def initialize()
        
    end
    def Saluda()
        nombre = "1.9"
        nombre = nombre.to_f
        valorDos = 2
        puts nombre + valorDos
    end

end

objeto = HolaMundo.new()
objeto.Saluda
