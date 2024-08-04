@props(['employer', 'width' => 90])
{{-- @php
    dd($employer->logo);
@endphp --}}
{{-- <img src="http://picsum.photos/seed/{{rand(8,180000)}}/{{$width}}" alt="" class="rounded-xl" width="{{ $width }}"> --}}
{{-- <img src="{{ asset($employer->logo) }}" alt="no img found" class="rounded-xl" width="{{ $width }}"> --}}
<img src="{{ asset('storage/' . $employer->logo) }}" alt="no img found" class="rounded-xl" width="{{ $width }}">
