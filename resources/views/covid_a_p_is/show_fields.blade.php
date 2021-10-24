<!-- Country Field -->
<div class="col-sm-12">
    {!! Form::label('country', 'Country:') !!}
    <p>{{ $covidAPI->country }}</p>
</div>

<!-- Code Field -->
<div class="col-sm-12">
    {!! Form::label('code', 'Code:') !!}
    <p>{{ $covidAPI->code }}</p>
</div>

<!-- Confirm Field -->
<div class="col-sm-12">
    {!! Form::label('confirm', 'Confirm:') !!}
    <p>{{ $covidAPI->confirm }}</p>
</div>

<!-- Recovered Field -->
<div class="col-sm-12">
    {!! Form::label('recovered', 'Recovered:') !!}
    <p>{{ $covidAPI->recovered }}</p>
</div>

<!-- Critical Field -->
<div class="col-sm-12">
    {!! Form::label('critical', 'Critical:') !!}
    <p>{{ $covidAPI->critical }}</p>
</div>

<!-- Death Field -->
<div class="col-sm-12">
    {!! Form::label('death', 'Death:') !!}
    <p>{{ $covidAPI->death }}</p>
</div>

<!-- Latitude Field -->
<div class="col-sm-12">
    {!! Form::label('latitude', 'Latitude:') !!}
    <p>{{ $covidAPI->latitude }}</p>
</div>

<!-- Longitude Field -->
<div class="col-sm-12">
    {!! Form::label('longitude', 'Longitude:') !!}
    <p>{{ $covidAPI->longitude }}</p>
</div>

