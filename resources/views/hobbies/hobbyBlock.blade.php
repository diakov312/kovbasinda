<div class="4u 12u(mobile)">
    <article class="box style2">
        <a href="/currhobby?idhobby={{$currHobby->id}}" class="image featured">
            <img src="{{ $currHobby->name_image_hobby }}" alt="" />
        </a>
        <h3>
            <a href="/currhobby?idhobby={{$currHobby->id}}">{{ $currHobby->name_hobby }}</a>
        </h3>
        <p>{{ $currHobby->preliminary_description_hobby }}</p>

        {{--Section delete element--}}
        @auth
            <form action="{{route('admin.add_hobby.destroy', $currHobby)}}" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <input type="hidden" name="idhobby" value="{{$currHobby->id}}">
                <button type="submit"><i class="far fa-trash-alt"></i></button>
            </form>
        @endauth
        {{--End section delete element--}}

    </article>
</div>