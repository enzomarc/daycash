let name = null;
let phone = null;
let email = null;
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

    if (step === 3) {
        $('#step_3').addClass('hide');

        setTimeout(() => {
            $('#step_3').hide();
            $('#step_2').removeClass('hide').addClass('show').show();
            $('div#step_2').find('input').focus();
            changeButtonText("Continuer");
            changeButtonIcon('fa-check', 'fa-chevron-right');
        }, 400);

        step--;
    }
});

$('a#send-btn').click(function () {
    if (step === 1) {
        const input = $('div#step_1 input');

        if (input.val() !== "" && input.val() !== null) {
            $('#step_1').addClass('hide');
            name = input.val();

            setTimeout(() => {
                $('#step_1').hide();
                $('#step_2').removeClass('hide').addClass('show').show();
                $('div#step_2').find('input').focus();
            }, 400);

            step++;
        } else {
            showMessage("Veuillez renseigner votre nom", 'info');
        }
    } else if (step === 2) {
        const input = $('div#step_2 input');

        if (input.val() !== "" && input.val() !== null) {
            $('#step_2').addClass('hide');
            phone = input.val();

            setTimeout(() => {
                $('#step_2').hide();
                $('#step_3').removeClass('hide').addClass('show').show();
                $('div#step_3').find('input').focus();
                changeButtonText("Soumettre");
                changeButtonIcon('fa-chevron-right', 'fa-check');
            }, 400);

            step++;
        } else {
            showMessage("Veuillez renseigner votre numéro de téléphone", 'info');
        }
    } else if (step === 3) {
        const input = $('div#step_3 input');
        email = input.val();

        $.ajax({
            url: API_ENDPOINT + '/users',
            method: 'POST',
            data: {name: name, phone: phone, email: email},
            success: (response) => {
                $('#step_3').addClass('hide');

                setTimeout(() => {
                    $('#step_3').hide();
                    $('#step_4').removeClass('hide').addClass('show').show();
                    $('div#step_4').find('input').focus();
                    $('a#send-btn').attr('href', "/sign-in");
                    changeButtonText("Connectez vous");
                    changeButtonIcon('fa-check', 'fa-sign-in');
                    showMessage(response.message, 'success');
                }, 400);

                step++;
            },
            error: (response) => {
                console.log(response);
                showMessage(response.responseJSON.message, 'error');
            }
        });
    }
});

$('div.step input').keydown(function (e) {
    if (e.key === "Enter") {
        $('a#send-btn').click();
    }
});