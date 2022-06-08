@extends('layouts.app')

@section('content')
<div class="container_for_contact">
    <div class="form_for_contact">
        <h1 class="contact_h1">Kontakt</h1>
        <div class="form-group">
   	 	    <input type="text" placeholder="Imię i nazwisko *" name="contact" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" placeholder="E-mail *" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" placeholder="Telefon" name="phone" class="form-control">
        </div>
        <div class="form-group">
    	    <input type="text" placeholder="Temat *" name="title" class="form-control">
        </div>
        <div class="form-group">
    	    <textarea placeholder="Wiadomość *" name="message" class="form-control" style="margin: 0px -3px 0px 0px; height: 179px;"></textarea>   
        </div>
        <button>Wyślij wiadomość</button>
    </div>
    <div class="contact_info">
        <h4>
            <span>Ul. Nowy Świat 22</span>, <br>
            <span>00-029</span>
            <span>Warszawa</span><br>
            <br>
            <span>+48 22 435 00 21</span><br>
            <br>
            <span>Pon-Czw</span><br>
            <span>12:00 - 21:40</span><br>
            <span>Pt-Sob</span><br>
            <span>12:00 - 22:30</span><br>
            <span>Nd</span><br>
            <span>12:00 - 21:40</span><br>
            <br>
            <span>contact@tajfun.pl</span>
        </h4>
    </div>
</div>
@endsection