<!-- Firstname Field -->
<div class="form-group">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{{ $booking->firstname }}</p>
</div>

<!-- Surname Field -->
<div class="form-group">
    {!! Form::label('surname', 'Surname:') !!}
    <p>{{ $booking->surname }}</p>
</div>

<!-- Membertype Field -->
<div class="form-group">
    {!! Form::label('membertype', 'Membertype:') !!}
    <p>{{ $booking->membertype }}</p>
</div>

