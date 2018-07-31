<div class="4u 12u(mobile)">
    <article class="box style2">
        <a href="portfolioelement?idwork={{ $currWork->id }}" class="image featured">
            <img src="{{ $currWork->name_image_work }}" alt="" />
        </a>
        <h3>
            <a href="portfolioelement?idwork={{ $currWork->id }}">{{ $currWork->name_work }}</a>
        </h3>
        <p>{{ $currWork->preliminary_description_work }}</p>

        {{--Section delete element--}}
        @auth
            <form action="{{route('admin.add_portfolio.destroy', $currWork->id)}}" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <input type="hidden" name="idportfolio" value="{{$currWork->id}}">
                <button type="submit"><i class="far fa-trash-alt"></i></button>
            </form>
        @endauth
        {{--End section delete element--}}

    </article>
</div>