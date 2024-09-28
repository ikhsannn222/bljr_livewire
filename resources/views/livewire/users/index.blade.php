<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Joined</th>
          </tr>
        </thead>
        @foreach ($users as $user)
        <tbody>
            <tr wire:key="{{ $user->id }}">
              <th scope="row">{{ $loop->index + $users->firstItem() }}</th>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->created_at->format('d F,Y') }}</td>
            </tr>
        @endforeach
      </table>
      <x-pagination :items="$users"/>
</div>
