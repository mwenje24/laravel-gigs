<x-layout>
    <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Job Title</th>
            <th colspan="2">actions</th>
          </tr>
        </thead>
        <tbody>
            @unless($listings->isEmpty())
            @foreach($listings as $listing)
                <tr>
                    <td>{{$listing->title}}</td>
                    <td>
                        <a class="btn btn-sm btn-outline-dark flex-shrink-0 mx-2 mb-2" type="button" href="/listings/{{$listing->id}}/edit">Edit Job</a>
                    </td>
                    <td>
                        <form method="POST" action="/listings/{{$listing->id}}" class="mx-2 mb-2">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-sm btn-outline-danger" type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
            @else
                <tr>
                    <td>No Listing Found</td>
                </tr>
          @endunless
        </tbody>
      </table>
    </div>
</x-layout>