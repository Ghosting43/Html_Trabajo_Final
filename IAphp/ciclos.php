<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor PHP - Estructuras Repetitivas (Ciclos)</title>
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
            <h2>🔄 Estructuras de Repetición: Ciclos</h2>
            <p>Los ciclos nos permiten ejecutar un mismo bloque de código varias veces. ¡Ideal para mostrar listas de bases de datos o repetir tareas tediosas!</p>
        </div>

        <div class="theory-grid">
            <div class="card">
                <h3>🔁 Tipos de Bucles</h3>
                <ul>
                    <li><strong>For:</strong> Lo usamos cuando sabemos exactamente cuántas veces queremos repetir algo.</li>
                    <li><strong>While:</strong> Lo usamos cuando queremos repetir algo mientras se cumpla una condición.</li>
                    <li><strong>Foreach:</strong> El mejor amigo de los arreglos (arrays).</li>
                </ul>
            </div>
        </div>

        <div class="code-example">
            <h3>💻 Ejemplo Práctico: Generando una lista</h3>
            <div class="code-box">
                <pre>
// Generar los números del 1 al 5
for ($i = 1; $i <= 5; $i++) {
    echo "Número: " . $i;
}
                </pre>
            </div>
            
            <div class="php-output">
                <h4>🖥️ Resultado del Servidor:</h4>
                <div class="terminal">
                    <p><strong>Generando tabla de multiplicar del 5:</strong></p>
                    <ul class="loop-list">
                        <?php 
                            $tabla = 5;
                            for ($i = 1; $i <= 10; $i++) {
                                $resultado = $tabla * $i;
                                echo "<li>$tabla x $i = <strong>$resultado</strong></li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="table-area">
            <h3>📊 Comparativa de Ciclos</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Ciclo</th>
                            <th>¿Cuándo usarlo?</th>
                            <th>Dato clave</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>for</code></td>
                            <td>Contadores definidos</td>
                            <td>Usa una variable controladora (índice).</td>
                        </tr>
                        <tr>
                            <td><code>while</code></td>
                            <td>Condiciones inciertas</td>
                            <td>¡Cuidado con los ciclos infinitos! ⚠️</td>
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