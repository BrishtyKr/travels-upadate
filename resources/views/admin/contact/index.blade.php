@extends('layouts.master_admin')
@section('title')
   contact
@endsection

@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
      <div class="module">
        <div class="module-head">
            <h3>
                All messages</h3>
        </div>
        <div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                   width="100%">
                <thead>
                <tr>
                    <th>S/N</th>
                    <th>name </th>
                    <th>email </th>
                    <th>subject </th>
                    <th>message</th>
					<th>Send Time</th>
                
                </tr>
                </thead>
                <tbody>
                    @php
                        $i=1
                    @endphp
                    @foreach ($message as $item)
                        <tr class="odd gradeX">
                            <td>{{$i++}}</td>
                          
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
							 <td>{{$item->subject}}</td>
							
                            <td>{{\Illuminate\Support\Str::limit($item->message,50,'...')}}</td>
                            <td >
                             {{$item->created_at}}
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>


@endsection
