@extends('layouts.app')

@section('content')
    <h1>Создать новое заявление</h1>

    <form action="{{ route('reports.store') }}" method="POST">
        @csrf

        <div>
            <label for="report_number">Номер заявления:</label>
            <input type="text" name="report_number" id="report_number" required>
        </div>

        <div>
            <label for="description">Описание:</label>
            <textarea name="description" id="description" rows="5" required></textarea>
        </div>

        <button type="submit">Создать</button>
    </form>
@endsection