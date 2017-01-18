class HolaMundo
	def initialize()
		
	end

	def saludar()

		puts "Ingrese un número: "
		STDOUT.flush
		numero = gets.chomp

		puts "Ingrese otro número: "
		STDOUT.flush
		numero2 = gets.chomp

		resultado = numero + numero2

		print resultado

	end
end

objeto = HolaMundo.new()
objeto.saludar