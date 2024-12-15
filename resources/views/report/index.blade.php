@extends('layouts.app')

@section('content')
    <h1>Мои заявления</h1>

    <a href="{{ route('reports.create') }}">Создать новое заявление</a>

    <ul>
        @foreach ($reports as $report)
            <li>
                <strong>Номер заявления:</strong> {{ $report->report_number }}<br>
                <strong>Описание:</strong> {{ $report->description }}<br>
                <strong>Статус:</strong> {{ $report->status->name }}<br>
                <strong>Дата создания:</strong> {{ $report->created_at->format('d.m.Y H:i') }}
            </li>
        @endforeach
    </ul>
@endsection

