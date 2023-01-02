<!DOCTYPE html>
<html>
    <title>Browse</title>
    
    
            <table class="dtbl">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Cover</th>
                        <th>Audio</th>
                        {{-- <th>Posted By</th> --}}
                        <th>Posted Author</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($post_image as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->message}}</td>
                        <td>
                            <img src="/Images/{{$item->pics}}" width="100" height="100">
                            </td>
                            <td>  
                                <audio controls>
                                    <source src="/Audio/{{($item->audio)}}" type="audio/mpeg">
                                </audio>
                             </td>
                             @if (Auth::check())
                            
                            <td> 
                                
                                    {{$item->user_post_name}}, ID=> {{ $item->post_id}}
                                
                             @endif
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
           
             
 
</html>
