document.addEventListener("DOMContentLoaded", function () {
    // Configuración inicial del tiempo restante (en segundos)
    const timers = [
        { id: "timer-1", time: 7 * 3600 + 5 * 60 + 20 }, // 7 horas, 5 minutos, 20 segundos
        { id: "timer-2", time: 6 * 3600 + 45 * 60 + 10 }, // 6 horas, 45 minutos, 10 segundos
        { id: "timer-3", time: 5 * 3600 + 30 * 60 + 0 },  // 5 horas, 30 minutos
        { id: "timer-4", time: 4 * 3600 + 15 * 60 + 50 }, // 4 horas, 15 minutos, 50 segundos
    ];

    // Función para actualizar el temporizador
    function updateTimers() {
        timers.forEach((timer) => {
            const element = document.getElementById(timer.id);
            if (timer.time > 0) {
                timer.time--; // Reducir el tiempo en 1 segundo
                const hours = Math.floor(timer.time / 3600);
                const minutes = Math.floor((timer.time % 3600) / 60);
                const seconds = timer.time % 60;
                element.textContent = `Finaliza en ${hours
                    .toString()
                    .padStart(2, "0")}:${minutes
                    .toString()
                    .padStart(2, "0")}:${seconds.toString().padStart(2, "0")}`;
            } else {
                element.textContent = "Oferta finalizada"; // Mensaje cuando el tiempo llega a 0
            }
        });
    }

    // Actualizar los temporizadores cada segundo
    setInterval(updateTimers, 1000);
});