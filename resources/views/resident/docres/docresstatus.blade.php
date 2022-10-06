<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">USER_ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">LAST NAME </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">FIRST NAME</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">DOCUMENT NAME</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">STATUS</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider" style="text-align:center ;">ACTIONS
                        </tr>
                        @foreach ($docres as $docress)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{$docress->user_id}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$docress->lname}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$docress->fname}}</td>
                            @foreach($doclist as $document)
                            @if($docress->document_id == $document->id)
                            <td class="px-6 py-4 whitespace-nowrap">{{$document->document_name}}</td>
                            @if($docress->status == "pending")
                            <td class="px-6 py-4 whitespace-nowrap"><button type="button" class="btn btn-primary" disabled>{{$docress->status}}</button></td>
                            @elseif($docress->status == "approved")
                            <td class="px-6 py-4 whitespace-nowrap"><button type="button" class="btn btn-secondary" disabled>{{$docress->status}}</button></td>
                            @elseif($docress->status == "for_claiming")
                            <td class="px-6 py-4 whitespace-nowrap"><button type="button" class="btn btn-success" disabled>{{$docress->status}}</button></td>
                            @elseif($docress->status == "claimed")
                            <td class="px-6 py-4 whitespace-nowrap"><button type="button" class="btn btn-danger" disabled>{{$docress->status}}</button></td>
                            @endif                            <td class="px-6 py-4 whitespace-nowrap">
                                <form action="{{ route('pdf.show',$docress->id) }}">
                                    <button type="submit" class="btn btn-success">Show</button>
                                </form>
                            </td>
                            @endif
                            
                            @endforeach
                        </tr>
                        @endforeach
                        {{$docres->links()}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
