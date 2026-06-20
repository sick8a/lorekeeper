<div class="row world-entry">
    @if ($feature->has_image)
        <div class="col-md-3 world-entry-image">
            <a href="{{ $feature->imageUrl }}" data-lightbox="entry" data-title="{{ $feature->name }}">
                <img src="{{ $feature->imageUrl }}" class="world-entry-image" alt="{{ $feature->name }}" />
            </a>
        </div>
    @endif
    <div class="{{ $feature->has_image ? 'col-md-9' : 'col-12' }}">
        <x-admin-edit title="Trait" :object="$feature" />
        <h3>
            @if (!$feature->is_visible)
                <i class="fas fa-eye-slash mr-1"></i>
            @endif
            {!! $feature->displayName !!}
            <a href="{{ $feature->searchUrl }}" class="world-entry-search text-muted">
                <i class="fas fa-search"></i>
            </a>
        </h3>
        @if ($feature->feature_category_id)
            <div>
                <strong>Category:</strong> {!! $feature->category->displayName !!}
            </div>
        @endif
        @if($feature->feature_subcategory_id)
            <div><strong>Subcategory:</strong> {!! $feature->subcategory->displayName !!}</div>
        @endif
        @if ($feature->parent_id)
            <div><strong>Parent Trait:</strong> {!! $feature->parent->displayName !!}</div>
        @endif
        @if ($feature->species_id)
            <div>
                <strong>Species:</strong> {!! $feature->species->displayName !!}
                @if ($feature->subtype_id)
                    ({!! $feature->subtype->displayName !!} subtype)
                @endif
            </div>
        @endif
        <div class="world-entry-text parsed-text">
            {!! $feature->parsed_description !!}
        </div>
        @if ($feature->altTypes->count())
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="inventory-header">
                        Variations
                    </h5>
                </div>

                <div class="card-body">
                    <div class="row">
                        @foreach ($feature->altTypes as $altType)
                            <div class="col-md-3">

                                <div class="card h-100">

                                    @if ($altType->has_image)
                                        <img src="{{ $altType->imageUrl }}"
                                            class="card-img-top"
                                            alt="{{ $feature->name }}">
                                    @endif

                                    <div class="card-body">

                                        <div class="mb-2">
                                            {!! $altType->displayName !!}
                                            <a href="{{ $altType->searchUrl }}" class="world-entry-search text-muted">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>

                                        @if (!$altType->display_separately)

                                            @if ($altType->species_id)
                                                <div class="small mb-2">
                                                    <strong>Species:</strong>
                                                    {!! $altType->species->displayName !!}
                                                    @if ($altType->subtype_id)
                                                        ({!! $altType->subtype->displayName !!} subtype)
                                                    @endif
                                                </div>
                                            @endif

                                            <div class="world-entry-text parsed-text text-start lh-lg">
                                                {!! $altType->parsed_description !!}
                                            </div>

                                        @endif

                                    </div>

                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
