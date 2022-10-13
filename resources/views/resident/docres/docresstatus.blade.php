<x-app-layout >
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-dark table-hover">
                        <tr>
                            <th>USER_ID</th>
                            <th>LAST NAME </th>
                            <th>FIRST NAME</th>
                            <th>DOCUMENT NAME</th>
                            <th>STATUS</th>
                            <th>ACTIONS</th>
                        </tr>
                        @foreach ($docres as $docress)
                        <tr>
                            <td>{{$docress->user_id}}</td>
                            <td>{{$docress->lname}}</td>
                            <td>{{$docress->fname}}</td>
                            @foreach($doclist as $document)
                            @if($docress->document_id == $document->id)
                            <td>{{$document->document_name}}</td>
                            @if($docress->status == "pending")
                            <td><button type="button" class="btn btn-primary" disabled>{{$docress->status}}</button></td>
                            @elseif($docress->status == "approved")
                            <td><button type="button" class="btn btn-secondary" disabled>{{$docress->status}}</button></td>
                            @elseif($docress->status == "for_claiming")
                            <td><button type="button" class="btn btn-success" disabled>{{$docress->status}}</button></td>
                            @elseif($docress->status == "claimed")
                            <td><button type="button" class="btn btn-danger" disabled>{{$docress->status}}</button></td>
                            @endif                            
                            <td>
                                <form action="{{ route('residentpdf.show',$docress->id) }}">
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
