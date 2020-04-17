/* Vars */

const API_ENDPOINT = "http://localhost:3000/api";
let canBet = true;




/* Misc Functions */

function changeButtonText(text) {
    const span = $('span.text');
    span.addClass('hide').removeClass('show');

    setTimeout(() => {
        span.text(text);
        span.removeClass('hide').addClass('show');
    }, 400);
}

function changeButtonIcon(prev, icon) {
    const span = $('span.icon');
    const iconic = $('span.icon i');
    span.addClass('hide').removeClass('show');

    setTimeout(() => {
        iconic.removeClass(prev);
        iconic.addClass(icon);
        span.removeClass('hide').addClass('show');
    }, 400);
}

function showMessage(message, type) {
    const div = $('div.msg-container');

    if (type === 'info')
        div.find('span').css('color', '#378dff');
    else if (type === 'error')
        div.find('span').css('color', '#f3113b');
    else if (type === 'warning')
        div.find('span').css('color', '#cc9e00');
    else if (type === 'success')
        div.find('span').css('color', '#02b250');
    else
        div.find('span').css('color', '#0c152e');

    div.find('span').text(message);
    div.show().removeClass('hide').addClass('show');

    setTimeout(() => {
        div.removeClass('show').addClass('hide');
    }, 5000);
}

function authenticate(data) {
    sessionStorage.clear();
    sessionStorage.setItem('user', JSON.stringify(data.user));
    sessionStorage.setItem('acc_token', data.token);
}

function logout() {
    const token = sessionStorage.getItem('acc_token');

    $.get(API_ENDPOINT + '/logout/' + token);
    sessionStorage.clear();
    window.location.replace('/sign-in');
}

function checkAuth() {
    if (sessionStorage.getItem('user') == null || sessionStorage.getItem('acc_token') == null || sessionStorage.getItem('user') == "undefined" || sessionStorage.getItem('acc_token') == "undefined") {
        logout();
    } else {
        const logged_phone = JSON.parse(sessionStorage.getItem('user')).phone;
        const token = sessionStorage.getItem('acc_token');

        $.ajax({
            url: API_ENDPOINT + '/check',
            method: 'GET',
            data: { acc_token: token, phone: logged_phone },
            success: (response) => {
                authenticate(response);
            },
            error: () => {
                logout();
            }
        });
    }
}

function lockBets() {
    canBet = false;
    const days = $('div.day');

    for (let day of days) {
        if (!$(day).hasClass('active'))
            $(day).addClass('locked').removeClass('active');
        else
            $(day).addClass('locked');
    }
}


/* Modals */

function showModal(selector) {
    $(selector).removeClass('hidden').addClass('visible').show();
}

function hideModal(selector) {
    $(selector).addClass('hidden');

    setTimeout(() => {
        $(selector).removeClass('visible').hide();
    }, 500);
}

$('.show-modal').click(function () {
    const modal = $(this)[0].dataset['modal'];
    showModal('#' + modal);
});

$('.dismiss-modal').click(function () {
    const modal = $(this)[0].dataset['modal'];
    hideModal('#' + modal);
});