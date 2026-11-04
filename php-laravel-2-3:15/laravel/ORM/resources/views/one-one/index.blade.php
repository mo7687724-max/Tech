<main>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
            {{ $user->profile?->phone ?? 'No Profile' }}
        @endforeach
    </ul>
</main> 
