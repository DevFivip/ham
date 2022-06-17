<script type='application/ld+json'>
        {
            "@context": "http://schema.org",
            "@type": "Article",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "{{ url()->current() }}"
            },
            "headline": "{{$cortarTitle($censor::replace($clear($group->name)))}} {{$group->social->name}} {{__("
            Account ")}}",
            "image": [
                "{{env('APP_CDN')}}/thumbnail/{{$group->imagen}}"
            ],
            "datePublished": "{{$fecha($group->created_at)}}",
            "dateModified": "{{$fecha($group->updated_at)}}",
            "author": {
                "@type": "Organization",
                "name": "OnlyHam"
            },
            "publisher": {
                "@type": "Organization",
                "name": "OnlyHam",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{env('APP_CDN')}}/assets/images/1.png"
                }
            },
            "description": "{{$group->social->name}} {{__("Account ")}} {{$clear($group->name)}}. {{__('Free')}} {{$clear($group->name)}} {{$group->social->name}} {{__('Account')}}, Post."
        }
    </script>
    <script type='application/ld+json'>
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                [{
                        "@type": "Question",
                        "name": "{{__('profile.faq_how_money',['name'=>$clear($group->name)])}}",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "{{__('profile.faq_how_money_resp',['name'=>$clear($group->name),'social'=>$group->social->name])}}"
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "{{__('profile.faq_free_access',['name'=>$clear($group->name),'social'=>$group->social->name])}}",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "{{__('profile.faq_free_access_resp_true',['name'=>$clear($group->name),'social'=>$group->social->name])}}"
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "{{__('profile.faq_leaks',['name'=>$clear($group->name),'social'=>$group->social->name])}}",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "{{__('profile.faq_leaks_resp_true',['name'=>$clear($group->name),'social'=>$group->social->name])}}"
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "{{__('profile.can_talk',['name'=>$clear($group->name)])}}",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            @if(!!$group->usuarios_comunicación)"text": "{{__('profile.can_talk_resp_true',['name'=>$clear($group->name),'social'=>$group->social->name])}}"@else"text": "{{__('profile.can_talk_resp_false',['name'=>$clear($group->name),'social'=>$group->social->name, 'type'=>$group->type->name])}}"@endif
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "{{__('profile.can_join',['name'=>$clear($group->name),'social'=>$group->social->name, 'type'=>$group->type->name])}}",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            @if($group->precio_membresia == 0)"text":"{{__('profile.can_join_resp_true',['name'=>$clear($group->name),'social'=>$group->social->name, 'type'=>$group->type->name])}}"@else"text":"{{__('profile.can_join_resp_false',['price'=>$group->precio_membresia,'name'=>$group->name,'social'=>$group->social->name, 'type'=>$group->type->name])}}"@endif

                        }
                    }
                ]
            ]
        }
    </script>