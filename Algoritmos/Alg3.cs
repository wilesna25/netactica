using System;
using System.Collections.Generic;

//WILMER ESCOBAR
namespace HelloWorldApplication

{
    class HelloWorld
    {
        static void Main(string[] args)
        { 
            int[,] matriz;
            Console.WriteLine("Iniciando");
            //PARA PROBAR LOS TIPOS DE MATRICES 
            matriz = inicializarMatrizConvexa();

           //matriz = inicializarMatrizNoConvexa();

            bool conexo = esGrafoConexo(matriz);
            if(conexo)
            {
                Console.WriteLine("New road system : TRUE");
            }else
            {
                Console.WriteLine("New road system : FALSE");
            }
        }

        public static int[,] inicializarMatrizConvexa()
        {   
            //EJemplo 1
            // int[,] matriz = new int[,] {
            //      { 0,1,0,0}, 
            //      { 0,0,1,0}, 
            //      { 1,0,0,1 }, 
            //      { 0,0,1,0 }
            // };

            //Ejemplo 2
            int[,] matriz = new int[,] {
                 { 0,1,0,0,0,0,0}, 
                 { 1,0,0,0,0,0,0}, 
                 { 0,0,0,1,0,0,0},
                 { 0,0,1,0,0,0,0}, 
                 { 0,0,0,0,0,0,1}, 
                 { 0,0,0,0,1,0,0}, 
                 { 0,0,0,0,0,1,0}
            };
            return matriz;
        }

        public static int[,] inicializarMatrizNoConvexa()
        {   
            //Del Ejemplo
            int[,] matriz = new int[,] {
                 { 0,1,0}, 
                 { 0,0,0}, 
                 { 1,0,0}
            };

            return matriz;
        }

        private static bool esGrafoConexo(int[,] rsult)
        {
            int rowLength = rsult.GetLength(0);
            int colLength = rsult.GetLength(1);
            mostrarMatriz(rsult);
            int x = 0;
            if (rsult.Length > 0) {
                for (int i = 0; i < rowLength ; i++) 
                {
                    Console.WriteLine("i : "+i);
                    for (int j = 0; j < colLength ; j++) 
                    {
                        if (i != j)
                        {
                            Console.WriteLine("rsult["+i+","+j+"]= " + rsult[i,j]+"== 0? && rsult["+j+","+i+"]="+rsult[j,i]+"==0?");

                            if (rsult[i,j] == 0 && 
                            rsult[j,i] == 0) 
                            {
                                x += 1;
                            }
                        } 
                    }
                        Console.WriteLine("x : "+x);
                        Console.WriteLine("");
                    if (x == rowLength) 
                    {
                      return false;
                    }
                    x = 0;
                }
                    return true;
            }
            return false;
        }

        private static void mostrarMatriz(int[,] rawNodes)
        {
            Console.WriteLine("Matriz : ");
            int rowLength = rawNodes.GetLength(0);
            int colLength = rawNodes.GetLength(1);
            string arrayString = "";
            for (int i = 0; i < rowLength; i++)
            {
                for (int j = 0; j < colLength; j++)
                {
                    arrayString += string.Format("{0} ", rawNodes[i, j]);
                }
                arrayString += System.Environment.NewLine + System.Environment.NewLine;
            }
            Console.WriteLine("");
            Console.WriteLine(""+arrayString);
        }
    }
}   