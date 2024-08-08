<form action="{{route('store_bagi')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Number 1</label>
        <input type="text" name="number1">
    </div>
    <div class="form-group">
        <label for="">Number 2</label>
        <input type="text" name="number2">
    </div>

    <div class="form-group">
        <button type="submit">Hasil</button>
    </div>
</form>

<!--<h1>Jumlahnya adalah : @php echo $jumlah @endphp</h1>-->

<h1>Jumlahnya adalah: {{$jumlah}}</h1>