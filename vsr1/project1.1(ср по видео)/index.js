import moment from 'moment';
const d = moment().format('DD/MM/YYYY HH:mm');
document.body.innerHTML = `<h1>Сейчас ${d}</h1>`;
document.body.innerHTML += `<h2>${top.location.href}</h2>`;