@foreach ($searchnews as $key => $item)
    <div class="card blog-detail">
        <div class="img">
            <img src="{{ asset($item->image) }}" class="img-fluid thumb" alt="">
        </div>

        <div class="desc">
            <h6>{{ $item->title }}</h6>

            <p>{{ $item->description }}</p>

            <ul>
                <li class="usr-icn">
                    By Admin
                </li>
                <li class="cln-icn">
                    28 January, 2020
                </li>

                <li class="vws-icn">
                    100 Views
                </li>
            </ul>
        </div>
    </div>
@endforeach
