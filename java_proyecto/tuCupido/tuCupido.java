/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package tucupidotaller;
import java.util.*;

/**
 *
 * @author Mauricio Viana C.I: 24.773.396
 * @author Carlos Lozano  C.I:
 */
public class TuCupidoTaller {
    /**
     * @param args the command line arguments
     * Inicio del programa Main
     */
    public static void main(String[] args) {
        // TODO code application logic here

        /**
        * Inicializacion de variables
        */
        final short j=20;
        int validar;
        String vl=null;
        short n,m;
        int g = 0;

        /**
         * Objeto Scanner para introducir datos
         */

        Scanner sc = new Scanner(System.in);

        /**
         * Ciclo while Para volver a ejecutar el programa.
         */

        do {

            /**
             * Asignar a las variables la cantidad de hombres y mujeres.
             */

            System.out.println("Ingrese cantidad de hombres: ");
            n = sc.nextShort();
            System.out.println("Ingrese cantidad de mujeres: ");
            m = sc.nextShort();

            /**
             * Validar que la cantidad de hombres y mujeres sea menor a 20
             */

            if (n < 20 && m < 20) {

                /**
                 * Inicializacion de los arreglos
                 */

                int[][] hombres_caracteristicas = new int[n][j];
                int[][] mujeres_caracteristicas = new int[m][j];
                String[] hombres = new String[n];
                String[] mujeres = new String[m];
                String[] preguntas = new String[j];

                /**
                 * Ciclo para ingresar las preguntas
                 */

                sc.nextLine();

                for (int i = 0 ;i < j ;i++ ) {

                  System.out.println("Ingrese la pregunta N°"+ i+1 +": ");
                  preguntas[i] = sc.nextLine();

                }

                /**
                 * Ciclo para Ingresar el nombre de los hombres
                 */

                for (int i = 0 ;i < n ;i++ ) {

                  System.out.println("Ingrese el nombre del hombre N°" + i+1 + ": ");
                  hombres[i] = sc.nextLine();

                  /**
                   * Ciclo para ingresar las Caracteristicas de cada hombre
                   */

                  for (int k = 0 ;k < j ;k++ ) {

                    /**
                     * Ciclo Do-while para validar que el valor ingresado sea 1 o 0
                     */

                    do {

                      System.out.println("Pregunta N°"+ k+1);
                      System.out.println(preguntas[k] + " (1)-Si | (0)-No ");
                      validar = sc.nextInt();

                      /**
                       * Condicional para validar la pregunta del 1 al 0
                       */
                      if (validar == 1 || validar == 0) {
                        hombres_caracteristicas[i][k] = validar;
                      }else{
                          System.out.println("!Usted debe ingresar un N° entre el 1 y 0¡");
                      }



                    } while (validar>1 || validar<0);

                    sc.nextLine();

                  }
                }

                /**
                 * Ciclo para Ingresar el nombre de las mujeres.
                 */

                for (int i = 0 ;i < m ;i++ ) {

                  System.out.println("Ingrese el nombre de la mujer N°" + i+1 + ": ");
                  mujeres[i] = sc.nextLine();

                  /**
                   * Ciclo para ingresar las Caracteristicas de cada mujer
                   */

                  for (int k = 0 ;k < j ;k++ ) {

                    /**
                     * Ciclo Do-while para validar que el valor ingresado sea 1 o 0
                     */

                    do {

                      System.out.println("Pregunta N°"+ k+1);
                      System.out.println(preguntas[k] + "(1)-Si | (0)-No ");
                      validar = sc.nextInt();

                      /**
                       * Condicional para validar la pregunta del 1 al 0
                       */
                      if (validar == 1 || validar == 0) {
                        mujeres_caracteristicas[i][k] = validar;
                      }else{
                          System.out.println("!Usted debe ingresar un N° entre el 1 y 0¡");
                      }

                    } while (validar>1 || validar<0);
                    sc.nextLine();
                  }
                }

                //Arreglo para Calcular las almas gemelas posibles

                int[][] almasGemelas = new int[n][m];

                /**
                 * Ciclos Para calcular las almas gemelas
                 * condicional para comparar Caracteristicas
                 */

                for (int i = 0 ;i < n ;i++ ) {
                  for (int k = 0 ;k < m ;k++ ) {
                      g=0;
                    for (int l = 0 ;l < j ;l++ ) {

                      if (hombres_caracteristicas[i][l] == mujeres_caracteristicas[k][l]) {

                        g = g + 1;
                        almasGemelas[i][k] = g;

                      }

                    }
                  }
                }

                /**
                 * Mostrar Resultado en pantalla sobre Almas gemelas
                 */

                for (int i = 0 ;i < n ;i++ ) {
                  for (int k = 0 ;k < m ;k++ ) {
                      if (almasGemelas[i][k] == j) {
                        System.out.println(hombres[i] + " Es alma gemela de " + mujeres[k]);
                  }
                }

                /**
                 * Else para Cantidad excedida de hombres y mujeres
                 */

            }else{
                System.out.println("Cantidad excedida de Hombres Y/O Mujeres.");
            }

            /**
             * Ciclo Do-while para repetir otra vez el programa desde el comienzo
             */

            sc.nextLine();
            System.out.println("Quiere volver a comenzar? (s)-si o (n)-no");
            vl = sc.nextLine();

        } while (!vl.equals("n"));

    }

}
