<div class="4u 12u(mobile)">
    <article class="box style2">
        <a href="/currhobby?idhobby={{$currHobby->id}}" class="image featured">
            <img src="{{ $currHobby->name_image_hobby }}" alt="" />
        </a>
        <h3>
            <a href="/currhobby?idhobby={{$currHobby->id}}">{{ $currHobby->name_hobby }}</a>
        </h3>
        <p>{{ $currHobby->preliminary_description_hobby }}</p>
    </article>
</div>