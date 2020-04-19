@if (count($tags))
    <div class="card mb-4">
        <div class="card-body pt-2">
            <div class="text-center mt-1 mb-0 text-muted">标签</div>
            <hr class="mt-2 mb-3">
            @foreach ($tags as $tag)
                <a href="{{ route('tags.show', $tag) }}" class="badge badge-{{ $tag->color }}">{{ $tag->name }}({{ $tag->post_count }})</a>
            @endforeach
        </div>
    </div>
@endif

@if (count($categories))
    <div class="card mb-4">
        <div class="card-body pt-2">
            <div class="text-center mt-1 mb-0 text-muted">分类</div>
            <hr class="mt-2 mb-3">
            @foreach ($categories as $category)
                <a class="media mt-1" href="{{ route('categories.show', $category) }}">
                    <div class="media-body">
                        <span class="media-heading text-muted">{{ $category->name }} ({{ $category->post_count }})</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endif

@if (count($archives))
    <div class="card mb-4">
        <div class="card-body pt-2">
            <div class="text-center mt-1 mb-0 text-muted">归档</div>
            <hr class="mt-2 mb-3">
            @foreach ($archives as $date => $archive)
                <a class="media mt-1" href="{{ route('archives.show', ['year_month' => $date]) }}">
                    <div class="media-body">
                        <span class="media-heading text-muted">{{ $date }} ({{ count($archive) }})</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endif
