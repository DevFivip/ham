@extends('layouts.app')
<script src="https://www.paypal.com/sdk/js?client-id=AXX2_MQO52FZAjbMh1_hy3kVqLOCYDfKlbpFqt0KqU_QVAVAody4ZjNPj7JC0psX_Qdp-fQqBwpMeil1&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
@section('content')

<main class="sm:container sm:mx-auto sm:mt-10">
    <section class="bg-[#F4F7FF]  lg:py-[120px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="relative mx-auto max-w-[525px] overflow-hidden rounded-lg bg-white py-16 px-10 text-center sm:px-12 md:px-[60px]">
                        <img src="{{(!!$group->imagen ? '/storage/img/'. $group->imagen : '/storage/placeholder/placeholder-avatar.jpg')}}" alt="img" class="shadow-xl relative rounded-lg h-auto align-center border-none absolute -ml-20 lg:-ml-16" style="margin-left: 16vh; max-height:100px;" />
                        <h3 class="text-bold text-lg">Publicación +15 dias</h3>
                        <div>
                            <p class="text-bold text-lg"><em>{{$group->name}}</em></p>
                            <p class="text-bold text-lg"><strong>Pagar Ahora :</strong> $ {{$precio}}</p>
                        </div>
                        <br>
                        <div style="width:40vh" id="paypal-button-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        (() => {
            window.CSRF_TOKEN = '{{ csrf_token() }}';
            console.log("{{$token}}");
            paypal.Buttons({
                createOrder: function(data, actions) {
                    // This function sets up the details of the transaction, including the amount and line item details.
                    return actions.order.create({
                        application_context: {
                            brand_name: 'OnlyHam Payment Service',
                            user_action: 'PAY_NOW',
                        },
                        purchase_units: [{
                            amount: {
                                value: "{{$precio}}"
                            }
                        }],
                    });
                },
                onApprove: function(data, actions) {
                    // This function captures the funds from the transaction.
                    return actions.order.capture().then(async function(details) {
                        // This function shows a transaction success message to your buyer.
                        const {
                            id,
                            payer: {
                                name: {
                                    given_name,
                                    surname,
                                    payer_id
                                }
                            },
                            purchase_units
                        } = details
                        const {
                            amount: {
                                currency_code,
                                value
                            }
                        } = purchase_units[0];

                        await save(id, given_name, surname, payer_id, currency_code, value);
                        window.location.href = "/home";
                    });
                },
                onCancel: function(data) {
                    console.log("cancelada")
                },
                onError: function(err) {
                    console.log(err)
                    // window.location.href = "/home";
                }
            }).render('#paypal-button-container');


            async function save(id, given_name, surname, payer_id, currency_code, value) {

                const res = await fetch('/getPayment', {
                    method: 'POST',
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-Token": window.CSRF_TOKEN
                    },
                    body: JSON.stringify({
                        payer_id,
                        value,
                        id,
                        surname,
                        given_name,
                        currency_code,
                        token: "{{$token}}",
                        gid: "{{$group->id}}",
                        uid: "{{$group->user_id}}",
                    })
                })

                body = await res.json()

                if (body.status == "success") {
                    window.location.href = "/home";
                }
            }


        })()
    </script>


    @include("layouts.footer")


</main>
@endsection