@include('partial.top')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <h1>{{$data->title}}</h1>
                <h3 class="text-muted">{{ $data->author }}</h3>
                <img class="thumbnail" src="{{ asset($data->thumbnail) }}">
                <i>Image from https://google.com/</i>

                <p>{{ $data->content }}</p>

                <h2 class='text-muted'>More by {{ $data->author }}</h2>
            </div>
            <div class="col-12 col-md-4">
                <h1>Related Articles</h1>
                <hr>
                <div class="row">

                    <div class="col-12">
                        <h2>A Real Nice Tree</h2>
                        <img src="{{ asset('images/test.jpg') }}"class="thumbnail">
                        <p class="text-muted">
                            A short ravioli description pasta cut-off atlas for
                            previewing preview purposes...
                            <a href="#"><i>read on</i></a>
                        </p>
                    </div>

                    <div class="col-12">
                        <h2>A Real Nice Tree</h2>
                        <img src="{{ asset('images/test.jpg') }}"class="thumbnail">
                        <p class="text-muted">
                            A short ravioli description pasta cut-off atlas for
                            previewing preview purposes...
                            <a href="#"><i>read on</i></a>
                        </p>
                    </div>

                    <div class="col-12">
                        <h2>A Real Nice Tree</h2>
                        <img src="{{ asset('images/test.jpg') }}"class="thumbnail">
                        <p class="text-muted">
                            A short ravioli description pasta cut-off atlas for
                            previewing preview purposes...
                            <a href="#"><i>read on</i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @include('partial.bottom')
    </div>
</body>
</html>
