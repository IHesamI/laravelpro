@props(['item'])
<tr class="border-gray-300">
    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
        <a href="show.html">
            {{$item->title}}
        </a>
    </td>
    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
        <a href="/listings/{{$item->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i class="fa-solid fa-pen-to-square"></i>
            Edit</a>
    </td>
    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
        <form action="/listings/{{$item->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="text-red-600">
                <i class="fa-solid fa-trash-can"></i>
                Delete
            </button>
        </form>
    </td>
</tr>
