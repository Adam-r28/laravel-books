 @php
    $links = [
        'homepage' => 'Home',
        'about-us' => 'About us'
    ]   
 @endphp
 <nav>
    @foreach ($links as  $route => $label)

        @if($current_page == $route)
        <span>{{ $label }}</span>
        @else
        <a href="{{route($route)}}">{{$label}}</a>
        @endif 

    @endforeach
        {{-- <a href="{{route('homepage')}}">Home</a>

        @if($current_page == 'about-us')
        <span>About us</span>
        @else
        <a href="{{route('about-us')}}">About us</a>
        @endif --}}
    </nav>
