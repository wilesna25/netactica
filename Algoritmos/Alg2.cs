using System;
using System.Collections.Generic;

//WILMER ESCOBAR
namespace HelloWorldApplication

{
    class HelloWorld
    {
        static void Main(string[] args)
        { 
            
            int[] secuencia =  new int[]{6,2,3,8};
            hacerConsecutiva(secuencia);

        }

        public static void hacerConsecutiva(int[] secuencia)
        {   
            int menor = buscarMenor(secuencia);
            int mayor = buscarMayor(secuencia);
            int[] secuencia_completa = secuenciaCompleta(menor,mayor);
            int difSecuencias = secuencia_completa.Length - secuencia.Length;
            Console.WriteLine("Número mínimo de adiciones para consecutivo : "+difSecuencias);
        
        }

        private static int buscarMenor(int[] array)
        {
            int menor;
            menor=array[0];
            for(int i=1;i < array.Length;i++) 
            {
                if (array[i] < menor) 
                {
                    menor=array[i];
                }
            }
            return menor;
        }

        private static int buscarMayor(int[] array)
        {
            int mayor;
            mayor=array[0];
            for(int i=1;i < array.Length;i++) 
            {
                if (array[i] > mayor) 
                {
                    mayor=array[i];
                }
            }
            return mayor;
        }


        private static int[] secuenciaCompleta(int inicio, int fin)
        {
            int[] secuencia_full = new int[(fin+1)-inicio];
            int j = 0;
            for (int i = inicio; i <= fin; i++)
            {   
                    secuencia_full[j] = i;
                    j++;
            }
            return secuencia_full;
        }


        
    }
}   