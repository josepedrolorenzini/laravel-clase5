<!-- resources/views/components/card.blade.php -->
<div class="card">
    <div class="card-header">
        <h3>{{ $title }}</h3>
    </div>
    <div class="card-body">
        <p>{{ $content }}</p>
        @if ($link)
            <a href="{{ $link }}" class="btn btn-primary">Link</a>
        @endif
    </div>
</div>