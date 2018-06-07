using System;
using System.Collections.Generic;

//WILMER ESCOBAR
namespace HelloWorldApplication

{
    class HelloWorld
    {
        static void Main(string[] args)
        { 
            //int[] secuencia = new int[4]{ 1,3,2,1};
            int[] secuencia =  new int[]{ 1,3,2};

            esIncremental(secuencia);

        }

        public static void esIncremental(int[] secuencia)
        {   
            int i = 0;
            bool incremental = false;
            int[] auxSecuencia;
            while(i<secuencia.Length && !incremental)
            {
                auxSecuencia =  removerElemento(secuencia,i);
                incremental = evaluarSencuencia(auxSecuencia);
                i++;
            }
            if(incremental){
                Console.WriteLine("Es posible secuencia incremental");
            }else{
                Console.WriteLine("No es posible secuencia incremental");
            }
        }

        private static int[] removerElemento(int[] array, int indice)
        {
            int[] newarray = new int[array.Length - 1];
            int i = 0;
            int j = 0;
            while (i < array.Length)
            {
                if (i != indice)
                {
                    newarray[j] = array[i];
                    j++;
                }
                i++;
            }
            return newarray;
        }

        private static bool evaluarSencuencia(int[] array)
        {
            for (int i = 1; i < array.Length; i++)
            {
                if (array[i - 1] > array[i])
                {
                return false;
                }
            }
            return true;
        }
        
    }
}   