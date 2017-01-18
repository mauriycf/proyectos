$ejemplo = "Hola codigo global"

class HolaMundo
    def initialize()
        @ejemplo = "Soy una variable de instancia"
        $ejemplo = "Fui modificado"
    end
    def saluda()
        puts @ejemplo
        puts $ejemplo
    end
end
objeto = HolaMundo.new()
objeto.saluda
