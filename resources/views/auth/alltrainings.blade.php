<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            All Trainings
        </h2>
    </x-slot>

    <div class="py-12">
        <h1>All Trainings</h1>

        @if ($trainings->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Approach</th>
                        <th>Provider</th>
                        <th>Venue</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trainings as $training)
                        <tr>
                            <td>{{ $training->name }}</td>
                            <td>{{ $training->location }}</td>
                            <td>{{ $training->approach }}</td>
                            <td>{{ $training->provider }}</td>
                            <td>{{ $training->venue }}</td>
                            <td>
                                <form method="post" action="{{ route('updatetraining', ['id' => $training->id]) }}">
                                    @csrf
                                    @method('put')
    
            <input type="text" name="name" value="{{ $training->name }}" placeholder="Name">
            <input type="text" name="location" value="{{ $training->location }}" placeholder="Location">
            <input type="text" name="approach" value="{{ $training->approach }}" placeholder="Approach">
            <input type="text" name="provider" value="{{ $training->provider }}" placeholder="Provider">
            <input type="text" name="venue" value="{{ $training->venue }}" placeholder="Venue">
            
                                    <button type="submit">Update Training</button>
                                </form>
                            </td>
                            <td>
    
                                <form method="post" action="{{ route('deletetraining', ['id' => $training->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No trainings available.</p>
        @endif
    </div>
</x-app-layout>
