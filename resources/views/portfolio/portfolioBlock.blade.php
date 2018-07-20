<div class="4u 12u(mobile)">
    <article class="box style2">
        <a href="portfolioelement?idwork={{ $currWork->id }}" class="image featured">
            <img src="{{ $currWork->name_image_work }}" alt="" />
        </a>
        <h3>
            <a href="portfolioelement?idwork={{ $currWork->id }}">{{ $currWork->name_work }}</a>
        </h3>
        <p>{{ $currWork->preliminary_description_work }}</p>
    </article>
</div>