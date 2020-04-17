@extends('layouts.main')

@section('content')
<div class="row days">
    <div class="day" data-day="1">
        <div class="row percent">
            <div>
                <i class="fas fa-chart-bar"></i> &nbsp;<span class="percentage"></span>
            </div>
            <div class="check">
                <i class="fas fa-check"></i>
            </div>
        </div>
        <div class="row value">
            <h5>Lundi</h5>
        </div>
        <div class="bet">
            <i class="fas fa-coins"></i>
            <span class="amount"></span>
        </div>
    </div>

    <div class="day" data-day="2">
        <div class="row percent">
            <div>
                <i class="fas fa-chart-bar"></i> &nbsp;<span class="percentage"></span>
            </div>
            <div class="check">
                <i class="fas fa-check"></i>
            </div>
        </div>
        <div class="row value">
            <h5>Mardi</h5>
        </div>
        <div class="bet">
            <i class="fas fa-coins"></i>
            <span class="amount"></span>
        </div>
    </div>

    <div class="day" data-day="3">
        <div class="row percent">
            <div>
                <i class="fas fa-chart-bar"></i> &nbsp;<span class="percentage"></span>
            </div>
            <div class="check">
                <i class="fas fa-check"></i>
            </div>
        </div>
        <div class="row value">
            <h5>Mercredi</h5>
        </div>
        <div class="bet">
            <i class="fas fa-coins"></i>
            <span class="amount"></span>
        </div>
    </div>

    <div class="day" data-day="4">
        <div class="row percent">
            <div>
                <i class="fas fa-chart-bar"></i> &nbsp;<span class="percentage"></span>
            </div>
            <div class="check">
                <i class="fas fa-check"></i>
            </div>
        </div>
        <div class="row value">
            <h5>Jeudi</h5>
        </div>
        <div class="bet">
            <i class="fas fa-coins"></i>
            <span class="amount"></span>
        </div>
    </div>

    <div class="day" data-day="5">
        <div class="row percent">
            <div>
                <i class="fas fa-chart-bar"></i> &nbsp;<span class="percentage"></span>
            </div>
            <div class="check">
                <i class="fas fa-check"></i>
            </div>
        </div>
        <div class="row value">
            <h5>Vendredi</h5>
        </div>
        <div class="bet">
            <i class="fas fa-coins"></i>
            <span class="amount"></span>
        </div>
    </div>

    <div class="day" data-day="6">
        <div class="row percent">
            <div>
                <i class="fas fa-chart-bar"></i> &nbsp;<span class="percentage"></span>
            </div>
            <div class="check">
                <i class="fas fa-check"></i>
            </div>
        </div>
        <div class="row value">
            <h5>Samedi</h5>
        </div>
        <div class="bet">
            <i class="fas fa-coins"></i>
            <span class="amount"></span>
        </div>
    </div>

    <div class="day" data-day="7">
        <div class="row percent">
            <div>
                <i class="fas fa-chart-bar"></i> &nbsp;<span class="percentage"></span>
            </div>
            <div class="check">
                <i class="fas fa-check"></i>
            </div>
        </div>
        <div class="row value">
            <h5>Dimanche</h5>
        </div>
        <div class="bet">
            <i class="fas fa-coins"></i>
            <span class="amount"></span>
        </div>
    </div>
</div>
<div class="row bets_btn">
    <div class="eight columns">
        <span id="bet-msg">Vous n'avez pas encore misé. Dépêchez vous, il vous reste 09h43min pour tenter de gagner 1 million de FCFA.</span>
    </div>
    <div class="four columns buttons">
        <button disabled class="button button-primary bet-btn">Sélectionnez un jour</button>
    </div>
</div>

<!-- Bet Modal -->
<div class="modal_container" id="bet-modal">
    <div class="modal">
        <div class="row modal_header">
            <h5><i class="fas fa-calendar-check"></i> &nbsp;Nouvelle mise</h5>
        </div>
        <form action="#" id="bet-form">
            <div class="modal_body">
                <div class="row amounts_container">
                    <div class="eight columns">
                        <div class="row">
                            <span style="font-family: 'Gilroy Bold', sans-serif; color: #0c152e; font-size: .9em;">Combien voulez-vous miser?</span>
                        </div>
                        <div class="bets_amount">
                            <div class="bet_amount selected" data-amount="300">
                                <i class="fas fa-coins"></i>
                                <span>300 points</span>
                            </div>
                            <div class="bet_amount" data-amount="500">
                                <i class="fas fa-coins"></i>
                                <span>500 points</span>
                            </div>
                            <div class="bet_amount" data-amount="1000">
                                <i class="fas fa-coins"></i>
                                <span>1000 points</span>
                            </div>
                            <div class="bet_amount" data-amount="1500">
                                <i class="fas fa-coins"></i>
                                <span>1500 points</span>
                            </div>
                            <div class="bet_amount" data-amount="2000">
                                <i class="fas fa-coins"></i>
                                <span>2000 points</span>
                            </div>
                            <div class="bet_amount" data-amount="5000">
                                <i class="fas fa-coins"></i>
                                <span>5000 points</span>
                            </div>
                            <div class="bet_amount" data-amount="10000">
                                <i class="fas fa-coins"></i>
                                <span>10.000 points</span>
                            </div>
                            <div class="bet_amount" data-amount="30000">
                                <i class="fas fa-coins"></i>
                                <span>30.000 points</span>
                            </div>
                            <div class="bet_amount" data-amount="custom">
                                <i class="fas fa-edit"></i>
                                <span>Montant personnalisé</span>
                            </div>
                        </div>
                        <div class="row buy_coins">
                            <span>Pas assez de points?</span>
                            <a href="#">Cliquez ici pour recharger</a>
                        </div>
                    </div>
                    <div class="four columns">
                        <div class="modal_day">
                            <i class="fas fa-calendar"></i>
                            <h5>Lundi</h5>
                            <span class="amount">300 points</span>
                            <input type="number" name="bet_amount" id="bet-amount" min="300" value="300">
                        </div>
                    </div>
                </div>
                <div class="row tips">
                    <p class="tip">1. Vous ne pouvez miser qu'une seule fois</p>
                    <p class="tip">2. Après avoir validé votre mise, vous disposez d'une heure pour la modifier; après quoi votre mise sera verrouillée</p>
                    <p class="tip">3. Le jeu s'arrête à 23h, vous recevrez un message vous indiquant si votre jour a gagné ou non</p>
                </div>
            </div>
            <div class="modal_footer">
                <a href="#" class="button dismiss-modal" data-modal="bet-modal">Annuler</a>
                <button type="submit" class="button button-success bold" data-modal="bet-modal"><i class="fas fa-check"></i>&nbsp; Valider la mise</button>
            </div>
        </form>
    </div>
</div>

<!-- Topup Modal -->
<div class="modal_container" id="topup-modal">
    <div class="modal">
        <div class="row modal_header">
            <h5><i class="fas fa-upload"></i> &nbsp;Rechargez votre compte</h5>
        </div>
        <form action="#" id="topup-form">
            <div class="modal_body">
                <div class="row amounts_container">
                    <div class="eight columns">
                        <div class="row">
                            <span style="font-family: 'Gilroy Bold', sans-serif; color: #0c152e; font-size: .9em;">Achetez des points et pariez</span>
                        </div>
                        <div class="bets_amount">
                            <div class="bet_amount selected" data-points="300" data-amount="310">
                                <i class="fas fa-coins"></i>
                                <span>300 points</span>
                            </div>
                            <div class="bet_amount" data-points="500" data-amount="510">
                                <i class="fas fa-coins"></i>
                                <span>500 points</span>
                            </div>
                            <div class="bet_amount" data-points="1000" data-amount="1010">
                                <i class="fas fa-coins"></i>
                                <span>1000 points</span>
                            </div>
                            <div class="bet_amount" data-points="1500" data-amount="1520">
                                <i class="fas fa-coins"></i>
                                <span>1500 points</span>
                            </div>
                            <div class="bet_amount" data-points="2000" data-amount="2030">
                                <i class="fas fa-coins"></i>
                                <span>2000 points</span>
                            </div>
                            <div class="bet_amount" data-points="5000" data-amount="5050">
                                <i class="fas fa-coins"></i>
                                <span>5000 points</span>
                            </div>
                            <div class="bet_amount" data-points="10000" data-amount="10100">
                                <i class="fas fa-coins"></i>
                                <span>10.000 points</span>
                            </div>
                            <div class="bet_amount" data-points="30000" data-amount="30500">
                                <i class="fas fa-coins"></i>
                                <span>30.000 points</span>
                            </div>
                            <div class="bet_amount" data-points="custom" data-amount="300">
                                <i class="fas fa-edit"></i>
                                <span>Montant personnalisé</span>
                            </div>
                        </div>
                    </div>
                    <div class="four columns">
                        <div class="modal_day">
                            <i style="color: #c5ae23" class="fas fa-coins"></i>
                            <h5>300 points</h5>
                            <span class="amount">Coût: 310 FCFA</span>
                            <input type="number" name="topup_amount" id="topup-amount" min="300" value="300">
                        </div>
                    </div>
                </div>
                <div class="row tips">
                    <p class="tip">1. Assurez vous d'avoir votre téléphone avec vous</p>
                    <p class="tip">2. Vous allez recevoir une requête de retrait d'argent dans vore compte Mobile Money</p>
                    <p class="tip">3. Validez la requête et votre compte sera rechargé dans les 10 minutes suivantes</p>
                </div>
            </div>
            <div class="modal_footer">
                <a href="#" class="button dismiss-modal" data-modal="topup-modal">Annuler</a>
                <button type="submit" class="button button-success bold" data-modal="topup-modal"><i class="fas fa-check"></i>&nbsp; Recharger mon compte</button>
            </div>
        </form>
    </div>
</div>

<div class="row" style="display: flex; justify-content: flex-end; align-items: center; margin-top: 5%;">
    <h4 style="margin: 0; font-family: 'Gilroy Bold', sans-serif;">Historique des mises</h4>
</div>
<div class="row history">
    <table class="u-full-width hovered" style="margin-top: 2%;">
        <thead>
            <tr>
                <th>#</th>
                <th>Statut</th>
                <th>Date</th>
                <th>Montant misé</th>
                <th>Montant gagné</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <span class="badge badge-success">Gagnant</span>
                </td>
                <td>18/08/2020</td>
                <td>400 points</td>
                <td>1400 XAF</td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    <span class="badge badge-success">Gagnant</span>
                </td>
                <td>18/08/2020</td>
                <td>400 points</td>
                <td>1400 XAF</td>
            </tr>
            <tr>
                <td>3</td>
                <td>
                    <span class="badge badge-success">Gagnant</span>
                </td>
                <td>18/08/2020</td>
                <td>400 points</td>
                <td>1400 XAF</td>
            </tr>
            <tr>
                <td>4</td>
                <td>
                    <span class="badge badge-success">Gagnant</span>
                </td>
                <td>18/08/2020</td>
                <td>400 points</td>
                <td>1400 XAF</td>
            </tr>
        </tbody>
    </table>
</div>
@stop

@section('styles')
    <link rel="stylesheet" href="/assets/css/dashboard.css">
@stop

@section('scripts')
<script>
    let day = null;
    let locked = false;
    const dash_user = JSON.parse(sessionStorage.getItem('user'));
    checkPercents();

    /* Check user bets */
    if (dash_user.actual_bet != null) {
        const bet = dash_user.actual_bet;
        const div = $('div.day[data-day=' + bet.day + ']');
        div.find('span.amount').text(bet.amount + 'pts misés');
        div.addClass('active').addClass('selected');

        if (bet.locked == false) {
            $('span#bet-msg').text("Vous avez misez " + bet.amount + " points sur " + div.find('h5').text() + ". Il vous reste " + bet.remaining + " minutes pour modifier votre mise.");

            setInterval(() => {
                $.ajax({
                    url: API_ENDPOINT + '/bets/' + bet.id,
                    method: 'GET',
                    success: (response) => {
                        $('span#bet-msg').text("Vous avez misez " + response.bet.amount + " points sur " + div.find('h5').text() + ". Il vous reste " + response.bet.remaining + " minutes pour modifier votre mise.");
                    }
                });
            }, 30000);
        } else {
            $('span#bet-msg').text("Vous avez misez " + bet.amount + " points sur " + div.find('h5').text() + ". Le jour gagnant sera annoncé à 23h00(UTC).");
            lockBets();

            setInterval(() => {
                lockBets();
            }, 1000);
        }
    }

    /* Days percents */
    setInterval(() => {
        checkPercents();
    }, 5000);

    function checkPercents() {
        $.ajax({
            url: API_ENDPOINT + '/percents',
            method: 'GET',
            success: (response) => {
                const percents = response.percents;
                
                const days = $('div.day');
                
                for (let day of days) {
                    const number = day.dataset['day'];
                    $(day).find('span.percentage').text(percents[number] + '%');
                }
            }
        })
    }

    $('div.day').click(function () {
        if (canBet) {
            if ($(this).hasClass('active')) {
                $('div.day.active').removeClass('active');
                $(this).removeClass('active');
                $('button.bet-btn').text("Sélectionnez un jour").attr('disabled', true);
                day = null;
            } else {
                $('div.day.active').removeClass('active');
                $(this).addClass('active');
                $('button.bet-btn').text("Miser sur " + $(this).find('h5').text()).attr('disabled', false);
                day = $(this)[0].dataset['day'];
            }
        } else {
            toastr.info("Vous ne pouvez plus modifier votre mise, elle a été verrouillée.", "Opération impossible");
        }
    });

    $('button.bet-btn').click(function () {
        let selected_day = $('div.day[data-day=' + day + ']').find('h5').text();
        $('div.modal_day h5').text(selected_day);

        if (dash_user.points < 300) {
            toastr.warning("Vous avez moins de 300 points, veuillez recharger pour miser.", "Points insuffisants");
            showModal('#topup-modal');
        } else {
            showModal('#bet-modal');
        }
    });

    $('div#bet-modal div.bet_amount').click(function () {
        const amount_input = $('input#bet-amount');
        const selected_amount = $(this)[0].dataset['amount'];
        const amount_span = $('div#bet-modal span.amount');

        $('div#bet-modal div.bet_amount').removeClass('selected');
        $(this).addClass('selected');

        amount_input.val(selected_amount);
        amount_span.text(selected_amount + ' points');

        if (selected_amount === 'custom') {
            amount_input.val(300);
            amount_input.show();
            amount_span.text(amount_input.val() + ' points');
        } else {
            amount_input.hide();
        }
    });

    $('div#topup-modal div.bet_amount').click(function () {
        const points_input = $('input#topup-amount');
        const selected_points = $(this)[0].dataset['points'];
        const selected_amount = $(this)[0].dataset['amount'];
        const amount_span = $('div#topup-modal span.amount');
        const points_span = $('div#topup-modal div.modal_day h5');

        $('div#topup-modal div.bet_amount').removeClass('selected');
        $(this).addClass('selected');

        points_input.val(selected_amount);
        points_span.text(selected_points + ' points');
        amount_span.text(selected_amount + ' FCFA');

        if (selected_points === 'custom') {
            points_input.val(300);
            points_input.show();
            points_span.text(points_input.val() + ' points');
        } else {
            points_input.hide();
        }
    });

    $('input#bet-amount').keyup(function () {
        $('div#bet-modal span.amount').text($(this).val() + ' points');
    });

    $('input#bet-amount').change(function () {
        $('div#bet-modal span.amount').text($(this).val() + ' points');
    });

    $('input#topup-amount').keyup(function () {
        $('div#topup-modal div.modal_day h5').text($(this).val() + ' points');
        $('div#topup-modal span.amount').text($(this).val() + ' FCFA');
    });

    $('input#topup-amount').change(function () {
        $('div#topup-modal div.modal_day h5').text($(this).val() + ' points');
        $('div#topup-modal span.amount').text($(this).val() + ' FCFA');
    });

    $('form#bet-form').submit(function (e) {
        e.stopPropagation();
        e.preventDefault();

        const id = user.id;
        const amount = $('input#bet-amount').val();

        $.ajax({
            url: API_ENDPOINT + '/bets',
            method: 'POST',
            data: { user: id, day: day, amount: amount },
            success: (response) => {
                toastr.success(response.message, "Mise validée");
                hideModal('#bet-modal');
            },
            error: (response) => {
                console.log(response);
                toastr.error(response.responseJSON.message, "Erreur");
            }
        });
    });

    function random(length) {
        var result           = '';
        var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for ( var i = 0; i < length; i++ ) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }

    $('form#topup-form').submit(function (e) {
        e.stopPropagation();
        e.preventDefault();

        const api_token = "$2y$10$sirU/olgPeGlIaHVqFOdb.4aJXGkeTDNVf/wrQpNRnEAloYawuEuO";
        const amount = $('input#topup-amount').val();
        const phone = dash_user.phone.startsWith("237") ? dash_user.phone : "237" + dash_user.phone;
        let client_ref = random(10);
        let ref = null;

        $.ajax({
            url: "https://view-pay.com/api/repo/cash/in",
            method: "POST",
            data: { operator_code: "MTN_CMR", amount: amount, token: api_token, number: phone, client_reference: client_ref, have_prefix: false, callback: "s" },
            success: (response) => {
                console.log("Success");
                console.log(response);
                ref = response.data.reference;

                setInterval(() => {
                    $.ajax({
                        url: "https://view-pay.com/api/repo/cashout/verify/" + ref,
                        method: "POST",
                        data: { token: api_token },
                        success: (response) => {
                            if (response.data.status === "SUCCESS") {
                                $.ajax({
                                    url: API_ENDPOINT + '/users/' + dash_user.id,
                                    method: "PUT",
                                    data: { points: dash_user.points + amount },
                                    success: (response) => {
                                        toastr.success(response.message, "Compte rechargé");
                                        setTimeout(() => {
                                            window.location.replace('/dashboard');
                                        }, 3000);
                                    }
                                });
                            }
                        }
                    })
                }, 10000);
            },
            error: (response) => {
                console.log("Error");
                console.log(response);
            }
        });
    });
</script>
@stop