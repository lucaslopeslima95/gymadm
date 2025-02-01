@extends('layouts.guest')
@section('content')
<div class="flex flex-row">
    <div class="flex flex-col">
        <p class="font-bold text-3xl">{{__('NEED A SYSTEM, E-COMMERCE, WEBSITE, BLOG OR OFFICE AUTOMATION?')}}</p>
        <p class="">{{__('Dymob is a company specialized in software development, prepared to meet your needs.')}}</p>
        <div class="">
            <h3>{{__('What do we need to know for an accurate budget?')}}</h3>
            <p class=""><span class="">{{__('Automations')}}:</span>
            {{__('Describe how what needs to be automated works')}}</p>
            <p class=""><span class="">{{__('Custom systems')}}:</span>
            {{__('Briefly describe which features may/should be necessary;')}}</p>
            <p class=""><span class="">{{ __('Institutional website')}}:</span>
            {{__('Tell me a little about how the site is imagined')}}</p>
        </div>
    </div>
    <div class="flex flex-col">
        <img src="https://dymob.com.br/wp-content/uploads/2024/08/logo-dymob-png-1.svg" >
        <form class="flex flex-col" method="post" action="{{ route('budget.store') }}">
            @csrf
            <label for="name" class="">
                {{__('Name')}}
                <input
                    type="text"
                    placeholder="Type here"
                    class="input input-bordered input-md w-full max-w-xs" require />
            </label>

            <label for="" class="">
                {{__('Telephone')}}
                <input
                    type="text"
                    placeholder="Type here"
                    class="input input-bordered input-md w-full max-w-xs" require />
            </label>

            <label for="" class="">
                {{__('E-mail')}}
               <x-text-input class="block mt-1 w-full"/>
            </label>

            <label for="" class="">
                {{__('Description')}}
                <textarea
                        placeholder="{{__('Description')}}"
                        class="textarea textarea-bordered textarea-xs w-full max-w-xs" 
                        name="description"></textarea>
            </label>

            <button class="btn btn-info"> {{ __('Request a quote') }}</button>
           
        </form>
    </div>
    
</div>
@endsection