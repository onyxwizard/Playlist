<form action = "{{url('updatecomments')}}/{{$edit->id}}"  method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
    <input type="hidden" name="cpost_id" id="cpost_id" value={{$edit->id}}>
    <input type="hidden" name="cuser_id" id="cuser_id" value={{Auth::user()->getId()}}>
    <input type="hidden" name="user_name" id="user_name" value={{Auth::user()->name}}>
    <textarea class="form-control" placeholder="Enter your comment..." name="comment_bdy" id="comment_bdy" msg cols="30" rows="5" required>{{$edit->cbody}}</textarea>
    <button type="submit" id="ajsub"> Submit </button>
</form>    