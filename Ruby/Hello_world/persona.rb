
public class Persona
    
     sexoDef='H'.to_s   
     intraPeso=-1.to_i
     pesoIdeal=0.to_i
     sobrePeso=1.to_i

     nombre.to_s
     edad.to_i
     cedula.to_s
     sexo.to_s
     peso.to_f
     altura.to_f

    def comprobarSexo(sexo)
        if sexo!='H' && sexo!='M'
            this.sexo='H';
        else
            this.sexo=sexo;
        end
    end

    def generarCedula
    
        divisor=23

        numCedula=((to_i)Math.floor(Math.random()*(100000000-10000000)+10000000))
        res = numCedula - (numCedula/divisor*divisor)

        letraCedula = generaLetraCedula(res);

        cedula =to_s(numCedula)+letraCedula

    end

end