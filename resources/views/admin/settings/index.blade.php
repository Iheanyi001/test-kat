@extends('layouts.app')

@section('content')
    <h1>Site Settings</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siteSettings as $siteSetting)
                <tr>
                    <td>{{ $siteSetting->key }}</td>
                    <td>{{ $siteSetting->value }}</td>
                    <td>
                        <a href="{{ route('site-settings.edit', $siteSetting->id) }}">Edit</a>
                        <form action="{{ route('site-settings.destroy', $siteSetting->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('site-settings.create') }}">Create New Site Setting</a>
    @endsection
