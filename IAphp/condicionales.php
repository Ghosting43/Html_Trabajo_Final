<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor PHP - Estructuras Condicionales</title>
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
            <h2>⚖️ Estructuras de Control: Condicionales</h2>
            <p>Las condicionales permiten que tu programa tome decisiones basadas en si una instrucción es verdadera o falsa. ¡Es el corazón de la lógica de programación!</p>
        </div>

        <div class="theory-grid">
            <div class="card">
                <h3>🔍 Sentencias Principales</h3>
                <ul>
                    <li><strong>if:</strong> Ejecuta código si la condición es cierta.</li>
                    <li><strong>else:</strong> Ejecuta código si la condición es falsa.</li>
                    <li><strong>elseif:</strong> Evalúa una nueva condición si la anterior falló.</li>
                </ul>
            </div>
        </div>

        <div class="code-example">
            <h3>💻 Ejemplo: Sistema de Calificaciones</h3>
            <div class="code-box">
<pre>
$nota = 3.5;

if ($nota >= 3.0) {
    echo "¡Aprobaste!";
} else {
    echo "Debes recuperar.";
}
</pre>
            </div>
            
            <div class="php-output">
                <h4>🖥️ Resultado del Servidor (Lógica PHP):</h4>
                <div class="terminal">
                    <?php 
                        $nota = 3.8;
                        echo "<p><strong>Nota obtenida:</strong> " . $nota . "</p>";

                        if ($nota >= 4.5) {
                            echo "<p class='status-excelente'>🌟 Estado: Excelente desempeño.</p>";
                        } elseif ($nota >= 3.0) {
                            echo "<p class='status-aprobado'>✅ Estado: Asignatura aprobada.</p>";
                        } else {
                            echo "<p class='status-reprobado'>❌ Estado: No aprobado.</p>";
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="table-area">
            <h3>📊 Comparadores Comunes</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Operador</th>
                            <th>Significado</th>
                            <th>Ejemplo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>==</code></td>
                            <td>Igual a</td>
                            <td>$a == $b</td>
                        </tr>
                        <tr>
                            <td><code>!=</code></td>
                            <td>Diferente de</td>
                            <td>$a != $b</td>
                        </tr>
                        <tr>
                            <td><code>&gt;=</code></td>
                            <td>Mayor o igual</td>
                            <td>$nota >= 3.0</td>
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