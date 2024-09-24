document.addEventListener('DOMContentLoaded', function() {
    // Получаем элементы уведомлений
    const successNotification = document.getElementById('push-notification');
    const errorNotification = document.getElementById('push-error-notification');

    // Показываем уведомление об успехе, если оно существует
    if (successNotification) {
        successNotification.style.display = 'block';
        setTimeout(() => {
            successNotification.style.display = 'none';
        }, 3500);
    }

    // Показываем уведомление об ошибке, если оно существует
    if (errorNotification) {
        errorNotification.style.display = 'block';
        setTimeout(() => {
            errorNotification.style.display = 'none';
        }, 3500);
    }
});
