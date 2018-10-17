@extends('welcome')


@section("navbar")



@endsection


@section("content")
    
    @section("conte")
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

