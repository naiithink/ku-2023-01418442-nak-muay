<body>
    <h1>You've successfully joined the event '{{ $event->event_name }}'!</h1>

    <p>
        The event will be held on {{ $event->date }}.

        {{-- <a href="{{ route('event.show', ['event' => $event]) }}">See event details</a> --}}
    </p>
</body>

<footer>
    Best regards,<br />
    KU Events Team
</footer>
