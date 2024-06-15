function openModal(apl_id) {
    fetch("./assets/php/get_application.php?applId=" + apl_id)
        .then(response => response.json())
        .then(data => {
            // Создаем модальное окно
            const modal = document.getElementById('applicationModal');
            const modalContent = document.getElementById('modalContent');

            // Заполняем контент модального окна
            modalContent.innerHTML = `
                <p>Название заявки: ${data.applName}</p>
                <p>Текст заявки: ${data.text}</p>
                <p>Статус: ${data.status}</p>

            `;
            const button = document.createElement("button");
            button.textContent = "Закрыть";
            button.classList.add("close");
            button.onclick = () => { modal.style.display = 'none' };
            modalContent.appendChild(button);
            // Показываем модальное окно
            modal.style.display = 'flex';
        })
        .catch(error => {
            console.error('Ошибка:', error);
        });
}