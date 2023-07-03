@include('common/header')

<h1>La pagina privada</h1>

@foreach($empanadas as $empanada)
    {{ $empanada -> nombre }} - {{ $empanada -> precio }} - {{ $empanada -> created_at }} <br>
@endforeach
@include('common/footer')
