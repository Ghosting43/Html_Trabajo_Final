<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor PHP - Funciones y Modularización</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500&family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <div class="logo-container">
        <span class="logo-icon">🏛️</span>
        <div>
            <h1>Tutor PHP</h1>
            <p>Innovación, Tecnología y Excelencia</p>
        </div>
    </div>
</header>

<nav>
    <ul>
        <li><a href="inicio.php">Inicio</a></li>
        <li><a href="variables.php" class="active">Variables</a></li>
        <li><a href="formularios.php">Formularios</a></li>
        <li><a href="modelosia.php">Modelos IA</a></li>
        <li><a href="apikey.php">Api key IA</a></li>
        <li><a href="condicionales.php">Condicionales</a></li>
        <li><a href="ciclos.php">Ciclos</a></li>
        <li><a href="funciones.php">Funciones</a></li>
        <li><a href="Bd.php">BaseDatos</a></li>
    </ul>
</nav>

<main>
    <section>
        <div class="module-header">
            <h2>🛠️ El Poder de las Funciones</h2>
            <p>Una función es un bloque de código que solo se ejecuta cuando se le llama. Nos ayuda a reutilizar lógica y evitar repetir código innecesariamente.</p>
        </div>

        <div class="theory-card">
            <h3>🧩 Anatomía de una Función</h3>
            <p>Para crear una función en PHP, necesitamos tres cosas clave:</p>
            <ul>
                <li><strong>Nombre:</strong> Cómo llamaremos a la función.</li>
                <li><strong>Parámetros:</strong> La información que la función recibe para trabajar.</li>
                <li><strong>Retorno (return):</strong> El resultado que la función nos devuelve.</li>
            </ul>
        </div>

        <div class="code-example">
            <h3>💻 Ejemplo: Calculadora de IVA</h3>
            <div class="code-box">
                <pre>
function calcularIVA($precio) {
    $total = $precio * 1.19; // IVA del 19%
    return $total;
}

echo "Total con IVA: " . calcularIVA(100);
                </pre>
            </div>
            
            <div class="php-output">
                <h4>🖥️ Resultado del Servidor:</h4>
                <div class="terminal">
                    <?php 
                        // Definimos la función "a la manera Junior"
                        function saludarEstudiante($nombre, $materia) {
                            return "Hola <strong>$nombre</strong>, bienvenido al módulo de <strong>$materia</strong>.";
                        }

                        function calcularDescuento($precio, $descuento) {
                            $ahorro = ($precio * $descuento) / 100;
                            return $precio - $ahorro;
                        }

                        // Llamamos a las funciones
                        echo "<p>" . saludarEstudiante("Estudiante del Mayor", "PHP Avanzado") . "</p>";
                        
                        $precioOriginal = 50000;
                        $precioFinal = calcularDescuento($precioOriginal, 15);
                        
                        echo "<p>Precio original: $$precioOriginal</p>";
                        echo "<p>Precio con descuento (15%): <strong>$$precioFinal</strong></p>";
                    ?>
                </div>
            </div>
        </div>

        <div class="table-area">
            <h3>📊 Ventajas de usar Funciones</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Ventaja</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Reutilización</strong></td>
                            <td>Escribes la lógica una vez y la usas en todo el sitio.</td>
                        </tr>
                        <tr>
                            <td><strong>Mantenimiento</strong></td>
                            <td>Si hay un error, solo corriges la función y se arregla en todo lado.</td>
                        </tr>
                        <tr>
                            <td><strong>Legibilidad</strong></td>
                            <td>El código es mucho más fácil de leer y entender.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

<footer>
    <p>Colegio Mayor del Cauca - Todos los derechos reservados © 2026</p>
    <p>📍 Calle 5 # 8-20, Popayán | 📞 (602) 8234567</p>
</footer>

</body>
</html>