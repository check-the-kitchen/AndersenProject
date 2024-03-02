@extends('layouts.app')

@section('content')
    <div>
        <h2>Messages</h2>

        @if(session('success'))
            <p class="text-green-500">{{ session('success') }}</p>
        @endif

        @if ($errors->any())
            <ul class="text-red-500">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('messages.store') }}" method="post">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>

            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>

            <label for="message">Message:</label>
            <textarea name="message" required>{{ old('message') }}</textarea>

            <button type="submit">Submit</button>
        </form>

        <hr>

        @forelse($messages as $message)
            <div>
                <strong>Name:</strong> {{ $message->name }}<br>
                <strong>Email:</strong> {{ $message->email }}<br>
                <strong>Message:</strong> {{ $message->message }}<br>
                <strong>Created At:</strong> {{ $message->created_at->diffForHumans() }}<br>
            </div>
            <hr>
        @empty
            <p>No messages available.</p>
        @endforelse
    </div>
@endsection
