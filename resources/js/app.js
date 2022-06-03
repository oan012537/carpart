require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

Echo.private('chat')
.listen('MessageSent', (e) => {
    this.messages.push({
        message: e.message.message,
        user: e.user
    });
});