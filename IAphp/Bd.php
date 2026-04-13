<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor PHP - Gestión de Base de Datos</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500&family=Inter:wght@400;700&display=swap" rel="stylesheet">
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
            <h2>🗄️ Gestión de Bases de Datos</h2>
            <p>Domina el almacenamiento de información persistente utilizando <strong>MySQL</strong> y el lenguaje de consultas estructuradas <strong>SQL</strong>.</p>
        </div>

        <div class="info-cards">
            <div class="card">
                <h3>¿Qué aprenderás?</h3>
                <ul>
                    <li>Diseño de Modelos Relacionales</li>
                    <li>Sentencias SELECT, INSERT, UPDATE y DELETE</li>
                    <li>Conexión de PHP con MySQLi o PDO</li>
                    <li>Seguridad y prevención de Inyección SQL</li>
                </ul>
            </div>
        </div>

        <div class="table-area">
            <h3>📊 Hoja de Ruta del Módulo</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Recurso</th>
                            <th>Tecnología</th>
                            <th>Estado de Acceso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Base de Datos</strong></td>
                            <td>MySQL Server / MariaDB</td>
                            <td><span class="status-online">✅ Disponible</span></td>
                        </tr>
                        <tr>
                            <td><strong>Consultas Avanzadas</strong></td>
                            <td>SQL / Joins</td>
                            <td><span class="status-soon">⏳ Próxima semana</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="code-preview">
            <p>💻 <em>Ejemplo de conexión rápida:</em></p>
            <code>$conexion = mysqli_connect("localhost", "root", "", "colegio_mayor");</code>
        </div>
    </section>
</main>

<footer>
    <p>Colegio Mayor del Cauca - Todos los derechos reservados © 2026</p>
    <p>📍 Calle 5 # 8-20, Popayán | 📞 (602) 8234567</p>
</footer>

</body>
</html>