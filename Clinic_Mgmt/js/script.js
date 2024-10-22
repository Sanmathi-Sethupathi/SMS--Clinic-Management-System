document.getElementById('signup-title').addEventListener('click', function () {
    document.getElementById('login-form').classList.remove('active');
    document.getElementById('signup-form').classList.add('active');
    document.getElementById('signup-title').classList.add('active');
    document.getElementById('login-title').classList.remove('active');
});

document.getElementById('login-title').addEventListener('click', function () {
    document.getElementById('signup-form').classList.remove('active');
    document.getElementById('login-form').classList.add('active');
    document.getElementById('login-title').classList.add('active');
    document.getElementById('signup-title').classList.remove('active');
});

document.getElementById('go-to-signup').addEventListener('click', function () {
    document.getElementById('login-form').classList.remove('active');
    document.getElementById('signup-form').classList.add('active');
});

document.getElementById('go-to-login').addEventListener('click', function () {
    document.getElementById('signup-form').classList.remove('active');
    document.getElementById('login-form').classList.add('active');
});

document.getElementById('switch-signup').addEventListener('click', function () {
    document.getElementById('login-form').classList.remove('active');
    document.getElementById('signup-form').classList.add('active');
});

document.getElementById('switch-login').addEventListener('click', function () {
    document.getElementById('signup-form').classList.remove('active');
    document.getElementById('login-form').classList.add('active');
});
