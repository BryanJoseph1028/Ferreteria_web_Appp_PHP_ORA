

document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente
  
    // Obtiene los valores de usuario y contraseña ingresados
    var username = document.getElementById("user").value;
    var password = document.getElementById("pass").value;
  
    // Verifica si la contraseña es incorrecta
    if (password !== "contraseña_correcta") {
      document.getElementById("errorMessage").style.display = "block";
    } else {
      // Aquí puedes redirigir a la página de inicio o realizar otras acciones
      alert("Inicio de sesión exitoso");
      // ...
    }
  });
  