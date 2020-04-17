let phone = "";
let password = "";
let step = 1;

$('div#step_1').find('input').focus();

$('a#back-btn').click(function () {
    if (step === 2) {
        $('#step_2').addClass('hide');

        setTimeout(() => {
            $('#step_2').hide();
            $('#step_1').removeClass('hide').addClass('show').show();
            $('div#step_1').find('input').focus();
        }, 400);

        step--;
    }
});

$('a#send-btn').click(function () {
    if (step === 1) {
        const input = $('div#step_1 input');

        if (input.val() !== "" && input.val() !== null) {
            $('#step_1').addClass('hide');
            phone = input.val();

            setTimeout(() => {
                $('#step_1').hide();
                $('#step_2').removeClass('hide').addClass('show').show();
                $('div#step_2').find('input').focus();
                changeButtonText("Connexion");
                changeButtonIcon('fa-unlock', 'fa-sign-in');
            }, 400);

            step++;
        } else {
            showMessage("Veuillez renseigner votre numéro de téléphone", 'info');
        }
    } else if (step === 2) {
        const input = $('div#step_2 input');

        if (input.val() !== "" && input.val() !== null) {
            password = input.val();

            $.ajax({
                url: API_ENDPOINT + '/login',
                method: 'POST',
                data: {phone: phone, password: password},
                success: (response) => {
                    authenticate(response);

                    checkAuth();
                    window.location.replace('/dashboard');
                },
                error: (response) => {
                    console.log(response);
                    showMessage(response.responseJSON.message, 'error');
                }
            });
        } else {
            showMessage("Veuillez renseigner votre mot de passe, celui que vous avez reçu par SMS", 'info');
        }
    }
});

$('div.step input').keydown(function (e) {
    if (e.key === "Enter") {
        $('a#send-btn').click();
    }
});
