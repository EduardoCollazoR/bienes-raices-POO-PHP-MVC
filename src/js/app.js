document.addEventListener("DOMContentLoaded", function () {
  eventListener();
  darkMode();
});

function darkMode() {
  const prefiereDarkMode = window.matchMedia("(prefers-color-scheme: dark)");

  if (prefiereDarkMode.matches) {
    document.body.classList.add("dark-mode");
  } else {
    document.body.classList.remove("dark-mode");
  }

  prefiereDarkMode.addEventListener("change", function () {
    if (prefiereDarkMode.matches) {
      document.body.classList.add("dark-mode");
    } else {
      document.body.classList.remove("dark-mode");
    }
  });
  const botonDarlMode = document.querySelector(".dark-mode-boton");

  botonDarlMode.addEventListener("click", function () {
    document.body.classList.toggle("dark-mode");
  });
}

function eventListener() {
  const mobileMenu = document.querySelector(".mobile-menu");

  mobileMenu.addEventListener("click", navegacionResponsive);

  //muestra campos condicionales
  const metodoContacto = document.querySelectorAll(
    'input[name="contacto[contacto]"]'
  );
  metodoContacto.forEach((input) =>
    input.addEventListener("click", mostrarMetodos)
  );
}

function navegacionResponsive() {
  const navegacion = document.querySelector(".navegacion");
  navegacion.classList.toggle("mostrar");
}

function mostrarMetodos(e) {
  const contactoDiv = document.querySelector("#contacto");

  if (e.target.value === "telefono") {
    contactoDiv.innerHTML = `
    <label for="tel">Numero Telefono</label>
            <input type="tel" placeholder="Telefono" id="tel" name="contacto[telefono]" />
            <p>Elija la fecha y hora para la llamada</p>
            <label for="fecha">Fecha</label>
            <input type="date" placeholder="Fecha" id="fecha" name="contacto[fecha]" />
            <label for="hora">Hora</label>
            <input type="time" placeholder="Hora" id="hora" min="09:00" max="18:00" name="contacto[hora]" />
    `;
  } else {
    contactoDiv.innerHTML = `
    <label for="correo">Correo Electronico</label>
    <input type="email" placeholder="Correo Electronico" id="correo" name="contacto[email]" required />
    `;
  }
}
