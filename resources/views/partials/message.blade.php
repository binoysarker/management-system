{{-- displying message --}}
  @if (session()->has('message'))

    <center><h2 class="title_two singlecourse_price wow fadeInRight">{{$msg = session()->get('message')}}</h2></center>
  @endif