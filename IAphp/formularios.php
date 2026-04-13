<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor PHP - Formularios</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
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
        <div class="info-box">
            <h2>📚 Módulo de Formularios</h2>
            <p>Los formularios son la puerta de entrada para los datos del usuario. Sin ellos, la web sería solo lectura.</p>
        </div>

        <div class="cards-container">
            <h3>¿Para qué sirven?</h3>
            <div class="features-grid">
                <div class="feature-item">🔐 Iniciar sesión</div>
                <div class="feature-item">📝 Registro</div>
                <div class="feature-item">🔍 Buscadores</div>
                <div class="feature-item">📩 Contacto</div>
                <div class="feature-item">🛒 Compras</div>
                <div class="feature-item">☁️ Subir archivos</div>
            </div>
        </div>

        <hr>

        <div class="demo-area">
            <h3>📊 Ejemplo Práctico</h3>
            <p class="subtitle">Interactúa con el servidor mediante el método <code>POST</code></p>
            
            <form action="formularios.php" method="POST" class="custom-form">
                <div class="form-card">
                    <div class="header-card">Datos de Usuario</div>
                    
                    <div class="form-body">
                        <div class="input-group">
                            <label for="nombre">Nombre Completo:</label>
                            <input type="text" id="nombre" name="nombre" placeholder="Ej: Juan Pérez" required>
                        </div>
                    </div>

                    <div class="form-footer">
                        <input type="reset" value="Limpiar" class="btn-reset">
                        <input type="submit" value="Dale Clic mi pez 🚀" class="btn-submit">
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>

<footer>
    <p>Colegio Mayor del Cauca - Todos los derechos reservados © 2026</p>
    <p>📍 Calle 5 # 8-20, Popayán | 📞 (602) 8234567</p>
</footer>

</body>
</html>