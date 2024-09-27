<div class="dm-reusable-images js-reusable-images-wrapper">
    @foreach ($reusableImages as $reusableImage)
    <div class="dm-reusable-img-holder">
        <img class="js-reusable-images-image dm-reusable-img" src="{{ route('msuiteReusableImage', ['imageId' => $reusableImage->id]) }}" data-images_id="{{ $reusableImage->id }}" />
    </div>
    @endforeach
</div>