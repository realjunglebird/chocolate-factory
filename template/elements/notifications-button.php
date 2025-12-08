<div class="notification-container">
    <button id="notification-button" class="notification-button glass-effect-new round-button" type="button">
        <i class="fa-solid fa-bell bell-icon"></i>
        <i class="fa-solid fa-xmark close-icon" style="display: none"></i>
        <span class="notification-badge">3</span>
    </button>

    <div class="notification-panel">
        <div class="notification-header">
            <h3>Уведомления</h3>
        </div>

        <div class="notification-list">

        </div>

        <div class="test-controls">
            <button class="test-btn" id="add-notification">Добавить уведомление</button>
            <button class="test-btn" id="clear-all">Очистить все</button>
        </div>

        <div class="notification-footer">
            <button class="mark-all-read">Отметить все как прочитанные</button>
        </div>
    </div>
</div>
<script type="text/javascript">
    // Элементы DOM
    const notificationBtn = document.querySelector('.notification-button');
    const bellIcon = document.querySelector('.bell-icon');
    const closeIcon = document.querySelector('.close-icon');
    const notificationBadge = document.querySelector('.notification-badge');
    const notificationPanel = document.querySelector('.notification-panel');
    const notificationList = document.querySelector('.notification-list');
    const markAllReadBtn = document.querySelector('.mark-all-read');
    const addNotificationBtn = document.getElementById('add-notification');
    const clearAllBtn = document.getElementById('clear-all');

    // Массив уведомлений
    let notifications = [
        { id: 1, title: 'Новое сообщение', message: 'У вас новое сообщение от пользователя', time: '10 минут назад', read: false },
        { id: 2, title: 'Обновление системы', message: 'Запланировано обновление системы завтра в 03:00', time: '2 часа назад', read: false },
        { id: 3, title: 'Приветствие', message: 'Добро пожаловать в наше приложение!', time: '5 часов назад', read: true }
    ];

    // Инициализация
    function init() {
        updateNotificationBadge();
        renderNotifications();

        // Обработчики событий
        notificationBtn.addEventListener('click', toggleNotificationPanel);
        markAllReadBtn.addEventListener('click', markAllAsRead);
        addNotificationBtn.addEventListener('click', addRandomNotification);
        clearAllBtn.addEventListener('click', clearAllNotifications);

        // Закрытие панели при клике вне её
        document.addEventListener('click', (e) => {
            const isDeleteButton = e.target.classList.contains('delete-btn') || e.target.closest('.delete-btn');


            if (!isDeleteButton && !notificationPanel.contains(e.target) && !notificationBtn.contains(e.target)) {
                closeNotificationPanel();
            }
        });
    }

    // Переключение панели уведомлений
    function toggleNotificationPanel() {
        if (notificationPanel.classList.contains('active')) {
            closeNotificationPanel();
        } else {
            openNotificationPanel();
        }
    }

    // Открытие панели уведомлений
    function openNotificationPanel() {
        notificationPanel.classList.add('active');
        bellIcon.style.display = 'none';
        closeIcon.style.display = 'block';
    }

    // Закрытие панели уведомлений
    function closeNotificationPanel() {
        notificationPanel.classList.remove('active');
        bellIcon.style.display = 'block';
        closeIcon.style.display = 'none';
    }

    // Обновление счетчика уведомлений
    function updateNotificationBadge() {
        const unreadCount = notifications.filter(notification => !notification.read).length;
        notificationBadge.textContent = unreadCount;

        if (unreadCount === 0) {
            notificationBadge.style.display = 'none';
        } else {
            notificationBadge.style.display = 'flex';
        }
    }

    // Отметить все как прочитанные
    function markAllAsRead() {
        notifications.forEach(notification => {
            notification.read = true;
        });
        updateNotificationBadge();
        renderNotifications();
    }

    // Отрисовка уведомлений
    function renderNotifications() {
        if (notifications.length === 0) {
            notificationList.innerHTML = '<div class="empty-notifications">Нет уведомлений</div>';
            return;
        }

        notificationList.innerHTML = '';

        notifications.forEach(notification => {
            const notificationItem = document.createElement('div');
            notificationItem.className = `notification-item ${notification.read ? '' : 'unread'}`;
            notificationItem.innerHTML = `
                    <div class="notification-content">
                        <div class="notification-title">${notification.title}</div>
                        <div class="notification-message">${notification.message}</div>
                        <div class="notification-time">${notification.time}</div>
                    </div>
                    <div class="notification-actions">
                        <button class="notification-action delete-btn" data-id="${notification.id}">✕</button>
                    </div>
                `;
            notificationList.appendChild(notificationItem);
        });

        // Добавляем обработчики для кнопок удаления
        document.querySelectorAll('.delete-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const id = parseInt(e.target.getAttribute('data-id'));
                deleteNotification(id);
            });
        });
    }

    // Удаление уведомления
    function deleteNotification(id) {
        notifications = notifications.filter(notification => notification.id !== id);
        updateNotificationBadge();
        renderNotifications();
    }

    // Добавление случайного уведомления
    function addRandomNotification() {
        const titles = [
            'Новое уведомление',
            'Обновление статуса',
            'Новый комментарий',
            'Задача выполнена',
            'Системное сообщение'
        ];

        const messages = [
            'У вас появилось новое уведомление в системе',
            'Статус вашей задачи был обновлен',
            'Пользователь оставил комментарий к вашему посту',
            'Задача была успешно выполнена',
            'Система была обновлена до последней версии'
        ];

        const times = [
            'Только что',
            '1 минуту назад',
            '5 минут назад',
            '10 минут назад'
        ];

        const randomTitle = titles[Math.floor(Math.random() * titles.length)];
        const randomMessage = messages[Math.floor(Math.random() * messages.length)];
        const randomTime = times[Math.floor(Math.random() * times.length)];

        const newId = notifications.length > 0 ? Math.max(...notifications.map(n => n.id)) + 1 : 1;

        notifications.unshift({
            id: newId,
            title: randomTitle,
            message: randomMessage,
            time: randomTime,
            read: false
        });

        updateNotificationBadge();
        renderNotifications();
    }

    // Очистить все уведомления
    function clearAllNotifications() {
        notifications = [];
        updateNotificationBadge();
        renderNotifications();
    }

    // Запуск приложения
    init();
</script>