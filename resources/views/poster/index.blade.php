@extends('poster.main')
<table class="dtbl">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Cover</th>
            <th>Audio</th>
        </tr>
    </thead>
    <tbody>
        @foreach($post_image as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->message}}</td>
            <td>
                <img src="{{asset($item->pics)}}" width="50" height="50">
                </td>
                <td>  
                    <audio controls>
                    <source src="{{asset($item->audio)}}">
                        {{-- <a class="btn btn-primary" id="next" href="/tmp/{{$item->audio}}" onclick="return playAudio();">Play</a> --}}
                    </audio>
                    {{-- <embed src="{{asset($item->audio)}}" height="50" width="250"/> --}}
                    {{-- <object data="{{asset($item->audio)}}" height="50" width="250">
                    </object> --}}
                </td>
        
        </tr>
        @endforeach
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
    </tbody>
  </table>
  
