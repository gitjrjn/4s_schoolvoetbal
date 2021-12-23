@extends('pages.base')

@section('content')




    <table class="table">
        <thead>
        <tr>
            <th>Velden</th>

        </tr>
        </thead>
        <tbody>
        @foreach($fields as $field)
            <tr>
                <td>
                    <a href="{{route('fields.show', $field->id)}}">{{$field->naam}}</a></td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @auth()
        <a href="{{route('fields.create')}}" class="btn btn-primary"><i class="bi bi-plus-square"></i> Nieuwe Veld</a>
    @endauth
@endsection
