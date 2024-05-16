<?php

# Route.php es el enrutador de la aplicacion.
# Un enrutador es un script que permite redirigir las rutas,
# ya sean GET o POST.
# Se encarga de llamar a las funciones de los controladores.

namespace Lib;

class Route 
{
    # Necesitamos almacenar todas las rutas disponibles en nuestra aplicacion,
    # y las vamos a discriminar por GET o POST. Estas rutas se guardan en un arreglo.
    private static $routes = [];

    # Como se guardan? Asi, mira:
    /*
        $routes = [
            'GET' => [
                'contact' => 'contacto()',
                'home' => 'home()'
                ]
            ],
            'POST' => [
                'agregar' => 'agregar()',
                'eliminar' => 'eliminar()'
                ]
            ]
        ];    
    
    */

    # Te suena get? Asi es, aqui guardamos las rutas GET en el arreglo $routes. 
    # Necesitamos la URI, y $callback, que será la función que se va a ejecutar.
    public static function get($uri, $callback)
    {
        # Para evitar problemas con las rutas que creemos,
        # recortaremos las diversas / que existen SOLO EN EL PRINCIPIO O EN EL FINAL.
        # Por ejemplo, /contact/ sera ahora solo contact.
        # Si hay un /contact/sales/ sera solamente contact/sales.
        $uri = trim($uri, '/');
        # Ahora, vamos a agregar la ruta a nuestro arreglo.
        self::$routes['GET'][$uri] = $callback;
    }

    # Exactamente lo mismo que la anterior, solo que ahora son rutas POST.
    public static function post($uri, $callback)
    {
        $uri = trim($uri, '/');
        self::$routes['POST'][$uri] = $callback;
    }

    # dispatch es una funcion para ejecutar la direccion que se haya escrito en la barra.
    # Veamos como funciona.
    public static function dispatch()
    {
        # Obtenemos la URI que se ha escrito en la barra de direcciones. 
        # Esto se logra accediendo a las variables SERVER.
        $uri = $_SERVER['REQUEST_URI'];
        # Ajustamos la URI sin / al principio o al final.
        $uri = trim($uri, '/');

        # Obtenemos el metodo HTTP (GET o POST) que se ha usado para hacer la peticion.
        $method = $_SERVER['REQUEST_METHOD'];

        # Ahora, has visto el archivo 'routes/web.php'?
        # Es un archivo que contiene todas las rutas que existen en
        # el proyecto.
        # Lo que hacemos ahora es recorrer el arreglo $routes (si, el que 
        # almacena todas las rutas GET y POST), para ver si
        # la direccion URI con el METODO es el MISMO que la ruta ya existente.
        foreach (self::$routes[$method] as $route => $callback) 
        {

            # Primero tenemos que comparar si existen parametros en las rutas.
            # Esto se logra encontrando en $route algun caracter :, ya que
            # ese es el indicador donde salen todas las rutas.
            # Si de alguna forma lo encuentra, entonces alteramos ese valor de ruta.
            # Por ejemplo, si la ruta es /contact/:id, entonces
            # $route sera contact, y $params sera el id.

            # Todo esto lo logramos con Regex.
            # '#:[a-zA-Z]+#' significa cualquier secuencia alfanumerica de 1 o mas caracteres, seguido del :
            # '[a-zA-Z]+ sera la transformacion de la ruta, ya sin los dos puntos.

            if(strpos($route, ':') !== false) {
                $route = preg_replace('#:[a-zA-Z]+#', '([a-zA-Z]+)', $route);
            }

            # Si el metodo es exactamente igual a la URI, entonces
            # ejecutamos la funcion que se encuentra en el arreglo, $callback!

            # Esto se hace utilizando una expresion regular. Por que?
            # Simple. En las URI probablemente haya mas slashes para hacer cierta accion,
            # por ejemplo, /contact/sales/ o /contact/1/ o /contact/1/2/3/4/5/
            # Asi que, para que la comparacion funcione, debemos
            # agregar un par de caracteres especiales.
            # Esta expresion (Regex) dice lo siguiente: que encuentre el contenido de $route (#$route#),
            # pero que sea de inicio (^) a fin ($).

            # La variable $matches nos permite recuperar los diversos parametros que hayamos escrito 
            # en la barra de direcciones.
            # Con $params, generalizamos estos parámetros.
            
            if(preg_match("#^$route$#", $uri, $matches)) { # Si existe, lo logramos!
                
                # $params guarda todos los parametros separados en un array.
                # Usando array_slice, ponemos $matches y colocamos un 1 para que comience
                # directamente en los parametros.
                $params = array_slice($matches, 1);

                # Los ... indican que el arreglo de $params, sera dividido en 
                # varias variables.
                # Necesitamos una respuesta para mandarla a llamar.
                // $response = $callback(...$params);
                if(is_callable($callback)) {
                    $response = $callback(...$params);
                }
                if(is_array($callback)) {
                    $controller = new $callback[0];
                    $response = $controller->{$callback[1]}(...$params);
                }


                # Como no podemos imprimir un arreglo (pues $response puede serlo),
                # evaluamos lo siguiente.

                # Si la respuesta es un arreglo o un objeto, que lo imprima a json.
                if (is_array($response) || is_object($response))
                {
                    header('Content-Type: application/json');
                    echo json_encode($response);
                }
                else 
                {
                    # De lo contrario, imprime solo la respuesta.
                    echo $response;
                } 
               
                # Salimos del ciclo. Logramos lo cometido.
                return;
            }

        }
        # Si no la encontramos en el ciclo, pues ya esta, no existe.
        echo '404 NOT FOUND';
    }
}

# URI: es la URL, pero con la diferencia de que ya no empieza en http://localshalala.com/,
# sino que es despues del sitio. Por ejemplo /usuarios/agregar es una URI.

# Funciones estaticas? Asi es, como necesitamos manipular esta clase sin instanciar nada,
# las hacemos estaticas para que se puedan usar las dos funciones sin andar poniendo un
# $route = new Route()...
# Esto se logra poniendo static al toda la clase en sus atributos y metodos.
# self:: es una sentencia para hacer referencia a un mismo elemento de la clase.