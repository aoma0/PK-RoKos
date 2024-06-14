// Функция для сохранения ID заявки в сессии
function saveApplIdToSession(applId) {
    // Сохранение ID заявки в сессии
    sessionStorage.setItem('appl_id', applId);
}