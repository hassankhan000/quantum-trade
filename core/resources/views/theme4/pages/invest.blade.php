@extends(template() . 'layout.master2')

@section('content2')


@endsection

@push('script')
<script>
    $(function() {
        'use strict'
        $('.balance').on('click', function() {
            const modal = $('#invest');
            modal.find('input[name=plan_id]').val($(this).data('plan').id);
            modal.find('input[name=plan_percentage]').val($(this).data('plan_percentage'));
            modal.modal('show')
        })
    })
</script>
<script>
    $('.plan-wrapper').hide()
    $('.show-plans').click(function() {
        $('.plan-wrapper').slideDown()
    });
</script>
<script>
    $('.modal-table').hide()
    $('.submit-payment').attr('disabled', true)
    $('.submit-payment').text('Enter Amount')
    $('.modal_amount').keyup(function(e) {
        if ($(this).val() < 1) {
            $('.submit-payment').attr('disabled', true)
        } else {
            $('.submit-payment').attr('disabled', false)
            $('.submit-payment').text('Invest')
        }
        let expected = $(this).val() * $('#invest').find('input[name=plan_percentage]').val() / 100 +
            parseFloat($(this).val());
        $('.exp-profit').text(`$${expected} to $${expected*2}`)
        $('.bot-fee').text(`$${(expected / 2).toFixed(2)}`)
        $('.modal-tax').text(`$${(expected / 3).toFixed(2)}`)
        if ($(this).val().length > 0) {
            $('.modal-table').slideDown()
        } else {
            $('.modal-table').slideUp()
        }
    });
</script>
<script>
    let invest_form = $('.invest-form')
    $('.success-img-wrapper').hide()
    $('.payment-loading').hide()

    $('.submit-payment').click(function(e) {
        e.preventDefault();
        $('.payment-loading').fadeIn()
        $('.payment-loading h4').text('Loading ...')
        setTimeout(function() {
            $('.payment-loading h4').text('Bot Is Finding Accurate Pair For You');
        }, 3000);
        setTimeout(function() {
            // FETCHING SYMBOL
            fetch('https://quantummtradeai.com/api/cryptoSymbols')
                .then(response => response.json())
                .then(data => {
                    // FETCHING PRICE
                    $.ajax({
                        method: 'GET',
                        url: 'https://api.api-ninjas.com/v1/cryptoprice?symbol=' + data,
                        headers: {
                            'X-Api-Key': 'j/maOGmZgHTpjSrL7e+paA==GZJHhvIFnZGIa8zR'
                        },
                        contentType: 'application/json',
                        success: function(result) {
                            invest_form.find('input[name=pair_name]').val(result.symbol)
                            invest_form.find('input[name=pair_price]').val(result.price)
                            invest_form.find('input[name=timestamp]').val(result
                                .timestamp)
                            $('.payment-loading h4').text(
                                `Bot Selected ${result.symbol} For You, The Initial Pair Price Is ${result.price}`
                            );
                            setTimeout(function() {
                                $('.payment-loading h4').text(
                                    `Processing With ${result.symbol}, Please Wait ...`
                                );
                            }, 5000);
                            setTimeout(function() {
                                $('.success-img-wrapper').hide()
                                $('.payment-loading').hide()
                                const modal = $('#invest');
                                modal.modal('hide')
                                invest_form.submit()
                            }, 10000);
                        },
                        error: function ajaxError(jqXHR) {
                            console.error('Error: ', jqXHR.responseText);
                        }
                    });
                    // FETCHING PRICE
                })
                .catch(error => console.error('Error fetching data:', error));
            // FETCH SYMBOL
        }, 9000);
        // FINAL
    })
</script>
@endpush
