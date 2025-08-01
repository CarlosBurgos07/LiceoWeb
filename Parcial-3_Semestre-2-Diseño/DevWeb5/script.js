function actualizarReloj() {
  const ahora = new Date();
  let horas = ahora.getHours();
  let minutos = ahora.getMinutes();
  let segundos = ahora.getSeconds();

  // Agregar ceros a la izquierda si son menores de 10
  horas = (horas < 10) ? '0' + horas : horas;
  minutos = (minutos < 10) ? '0' + minutos : minutos;
  segundos = (segundos < 10) ? '0' + segundos : segundos;

  const horaActual = `${horas}:${minutos}:${segundos}`;
  document.getElementById('reloj').textContent = horaActual;
}

// Actualiza el reloj cada segundo
setInterval(actualizarReloj, 1000);

// Llamar una vez al cargar para evitar ver 00:00:00
actualizarReloj();