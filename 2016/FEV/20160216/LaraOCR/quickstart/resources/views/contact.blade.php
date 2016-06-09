@extends('template')

@section('contenu')
            <div class="contact">Contactez-moi</div>
            <div class="formulaire"> 
                {!! Form::open(['url' => 'contact/form']) !!}
                    <div class="identite">
                        {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
                    </div>
                    <div class="mail">
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
                    </div>
                    <div class="msg">
                        {!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
                    </div>
                    {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
