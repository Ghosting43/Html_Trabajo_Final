<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor PHP - Colegio Mayor del Cauca</title>
    <link rel="stylesheet" href="css/stylephp.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <div class="logo-container">
        <span class="logo-icon">🎓</span>
        <div class="brand-text">
            <h1>Tutor<span>PHP</span></h1>
            <p>Facultad de Ingeniería - Colegio Mayor del Cauca</p>
        </div>
    </div>
</header>

<nav>
    <ul>
        <li><a href="inicio.php" class="active">Inicio</a></li>
        <li><a href="Variables.php">Variables</a></li>
        <li><a href="Formularios.php">Formularios</a></li>
        <li><a href="Modelosia.php">Modelos IA</a></li>
        <li><a href="ApiKey.php">Api Key</a></li>
        <li><a href="Condicionales.php">Condicionales</a></li>
        <li><a href="Ciclos.php">Ciclos</a></li>
        <li><a href="Funciones.php">Funciones</a></li>
        <li><a href="BaseDatos.php">Base de Datos</a></li>
    </ul>
</nav>

<main>
    <section class="hero">
        <div class="hero-content">
            <h2>🚀 ¡Bienvenido a la Ruta de Aprendizaje!</h2>
            <p>Explora los fundamentos de PHP y la integración de nuevas tecnologías en un entorno académico de excelencia.</p>
        </div>
    </section>

    <section class="content-wrapper">
        <h3>📊 Módulos Académicos</h3>
        <p>Sigue tu progreso en las diferentes áreas del desarrollo backend:</p>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Módulo</th>
                        <th>Descripción Técnica</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Fundamentos</strong></td>
                        <td>Variables, tipos de datos y operadores.</td>
                        <td><span class="badge active">✅ Activo</span></td>
                    </tr>
                    <tr>
                        <td><strong>Interactividad</strong></td>
                        <td>Manejo de formularios y métodos GET/POST.</td>
                        <td><span class="badge active">✅ Activo</span></td>
                    </tr>
                    <tr>
                        <td><strong>Inteligencia Artificial</strong></td>
                        <td>Consumo de APIs de OpenAI y Gemini.</td>
                        <td><span class="badge soon">🚀 Próximamente</span></td>
                    </tr>
                    <tr>
                        <td><strong>Persistencia</strong></td>
                        <td>Conexión a MySQL y sentencias SQL.</td>
                        <td><span class="badge active">✅ Activo</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="form-container">
            <h3>📩 Consultas Académicas</h3>
            <p>¿Tienes dudas sobre algún ejercicio? Escríbenos.</p>
            
            <form action="#" method="POST">
                <div class="form-grid">
                    <div class="field">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ej: Juan Pérez">
                    </div>
                    <div class="field">
                        <label for="email">Correo Institucional</label>
                        <input type="email" id="email" name="email" placeholder="usuario@unimayor.edu.co">
                    </div>
                </div>

                <div class="field">
                    <label for="mensaje">Descripción de la duda</label>
                    <textarea id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu pregunta detalladamente..."></textarea>
                </div>

                <div class="button-group">
                    <button type="submit" class="btn-main">Enviar Mensaje</button>
                    <button type="reset" class="btn-alt">Limpiar Formulario</button>
                </div>
            </form>
        </div>
    </section>
</main>

<footer>
    <div class="footer-grid">
        <div class="footer-info">
            <p><strong>Colegio Mayor del Cauca</strong></p>
            <p>Institución de Educación Superior</p>
        </div>
        <div class="footer-contact">
            <p>📍 Calle 5 # 8-20, Popayán, Colombia</p>
            <p>© 2026 - Área de Tecnología</p>
        </div>
    </div>
</footer>

</body>
</html>