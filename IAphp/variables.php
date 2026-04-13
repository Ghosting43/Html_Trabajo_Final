<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor PHP - Variables y Tipos de Datos</title>
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
        <li><a href="Variables.php" class="active">Variables</a></li>
        <li><a href="Formularios.php">Formularios</a></li>
        <li><a href="Modelosia.php">Modelos IA</a></li>
        <li><a href="ApiKey.php">Api key IA</a></li>
        <li><a href="Condicionales.php">Condicionales</a></li>
        <li><a href="Ciclos.php">Ciclos</a></li>
        <li><a href="Funciones.php">Funciones</a></li>
        <li><a href="BaseDatos.php">BaseDatos</a></li>
    </ul>
</nav>

<main>
    <section>
        <div class="module-header">
            <h2>📚 Conceptos Básicos: Variables</h2>
            <p>En PHP, las variables son contenedores para almacenar información. Son fundamentales para cualquier desarrollo dinámico en el <strong>Colegio Mayor del Cauca</strong>.</p>
        </div>

        <div class="theory-card">
            <h3>📌 Reglas de Oro</h3>
            <ul>
                <li>Todas las variables comienzan con el símbolo <code>$</code>.</li>
                <li>No pueden empezar con números, pero sí contenerlos.</li>
                <li>Son "case-sensitive" (diferencian entre mayúsculas y minúsculas).</li>
            </ul>
        </div>

        <div class="code-example">
            <h3>💻 Ejemplo de Sintaxis</h3>
            <div class="code-box">
                <code>// Así se declara una variable numérica</code><br>
                <code>$variable = 5;</code>
            </div>
            
            <div class="php-output">
                <h4>🖥️ Salida del Servidor:</h4>
                <div class="terminal">
                    <?php 
                        $nombre = "Profesora web: Yola Rayo";
                        $year = 2026;
                        echo "<p><strong>Docente:</strong> " . $nombre . "</p>";
                        echo "<p><strong>Año Académico:</strong> " . $year . "</p>";
                    ?>
                </div>
            </div>
        </div>

        <div class="table-area">
            <h3>📊 Progreso del Módulo</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Concepto</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Declaración</strong></td>
                            <td>Uso del signo $ y asignación de valores.</td>
                            <td><span class="status-badge">✅ Dominado</span></td>
                        </tr>
                        <tr>
                            <td><strong>Tipos de Datos</strong></td>
                            <td>Strings, Integers y Booleans.</td>
                            <td><span class="status-active">🟢 Activo</span></td>
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