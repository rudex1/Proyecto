@extends('plantilla')


@section("navbar")



@endsection

@section('section')
    <form action="pagina2.php" method="post">
        <input type="text" name="n1">
            <select class="" name="opciones">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            </select>
        <input type="text" name="n2">
        <input type="submit"  value="Calcular">
    </form>
    @endsection


@endsection


@section("footer")


@endsection

