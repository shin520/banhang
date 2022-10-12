<li>
    <label class="selectgroup-item" for="cate-{{ $childCategory->id }}">
        <input type="radio" name="category_id" value="{{ $child_category->id }}" class="selectgroup-input-radio" id="cate-{{ $child_category->id }}">
        <span class="selectgroup-button selectgroup-button-icon">{{ $child_category->seo->name }}</span>
    </label>
    {{-- <label for="cate-{{ $childCategory->id }}">
        {{ $child_category->seo->name }}
    </label>
    <input type="radio" id="cate-{{ $childCategory->id }}" name="category_id" value="{{ $childCategory->id }}"> --}}
</li>
@if ($child_category->categories)
    <ul>
        @foreach ($child_category->categories as $childCategory)
            @include('products.child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
@endif