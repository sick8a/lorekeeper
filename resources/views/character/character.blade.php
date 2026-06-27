@extends('character.layout', ['isMyo' => $character->is_myo_slot])

@section('profile-title')
    {{ $character->fullName }}
@endsection

@section('meta-img')
    {{ $character->image->thumbnailUrl }}
@endsection

@section('profile-content')
    @if ($character->is_myo_slot)
        {!! breadcrumbs(['MYO Slot Masterlist' => 'myos', $character->fullName => $character->url]) !!}
    @else
        {!! breadcrumbs([
            $character->category->masterlist_sub_id ? $character->category->sublist->name . ' Masterlist' : 'Character masterlist' => $character->category->masterlist_sub_id ? 'sublist/' . $character->category->sublist->key : 'masterlist',
            $character->fullName => $character->url,
        ]) !!}
    @endif

    @include('character._header', ['character' => $character])

    <div class="row justify-content-center mb-3">
        <div class="col-lg-10">
            {{-- MAIN IMAGE --}}
            <div class="row mb-3">
                <div class="col-12">
                    @if (isset($foreground) && is_array($foreground) && Config::get('lorekeeper.extensions.character_foregrounds.enabled'))
                        <div class="text-center" style="position: relative; display: inline-block; width: 100%; {{ isset($background) && Config::get('lorekeeper.extensions.character_backgrounds.enabled') ? implode('; ', $background) : '' }}; background-size: cover;">
                            @foreach ($foreground as $data)
                                <div style="background-image: url('{{ asset('images/data/items/foregrounds/' . $data['item_id'] . '/' . $data['tag_id'] . '/' . $data['tag_id'] . '-image.png') }}'); position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-size: cover; background-repeat: no-repeat; z-index: 2;">
                                </div>
                            @endforeach
                            <a href="{{ $character->image->canViewFull(Auth::check() ? Auth::user() : null) && file_exists(public_path($character->image->imageDirectory.'/'.$character->image->fullsizeFileName)) ? $character->image->fullsizeUrl : $character->image->imageUrl }}">
                                <img src="{{ $character->image->canViewFull(Auth::check() ? Auth::user() : null) && file_exists(public_path($character->image->imageDirectory.'/'.$character->image->fullsizeFileName)) ? $character->image->fullsizeUrl : $character->image->imageUrl }}"
                                    class="image"
                                    style="max-width: 100%;"
                                    alt="{{ $character->fullName }}" />
                            </a>
                        </div>
                    @else
                        <div class="text-center">
                            <a href="{{ $character->image->canViewFull(Auth::check() ? Auth::user() : null) && file_exists(public_path($character->image->imageDirectory.'/'.$character->image->fullsizeFileName)) ? $character->image->fullsizeUrl : $character->image->imageUrl }}">
                                <img src="{{ $character->image->canViewFull(Auth::check() ? Auth::user() : null) && file_exists(public_path($character->image->imageDirectory.'/'.$character->image->fullsizeFileName)) ? $character->image->fullsizeUrl : $character->image->imageUrl }}"
                                    class="image"
                                    style="max-width: 100%;"
                                    alt="{{ $character->fullName }}" />
                            </a>
                        </div>
                    @endif
                    @if ($character->image->canViewFull(Auth::check() ? Auth::user() : null) && file_exists(public_path($character->image->imageDirectory.'/'.$character->image->fullsizeFileName)))
                        <div class="text-right">
                            You are viewing the full-size image.
                            <a href="{{ $character->image->imageUrl }}">View watermarked image</a>?
                        </div>
                    @endif
                </div>
                @include('character._image_info', ['image' => $character->image])
            </div>

            {{-- IMAGE INFO --}}
            <div class="card character-bio">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" id="statsTab" data-toggle="tab" href="#stats" role="tab">Stats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="notesTab" data-toggle="tab" href="#notes" role="tab">Description</a>
                        </li>
                        @if ($character->getLineageBlacklistLevel() < 2)
                            <li class="nav-item">
                                <a class="nav-link" id="lineageTab" data-toggle="tab" href="#lineage" role="tab">Lineage</a>
                            </li>
                        @endif
                        @if (Auth::check() && Auth::user()->hasPower('manage_characters'))
                            <li class="nav-item">
                                <a class="nav-link" id="settingsTab" data-toggle="tab" href="#settings-{{ $character->slug }}" role="tab">
                                    <i class="fas fa-cog"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="card-body tab-content">
                    <div class="tab-pane fade show active" id="stats">
                        @include('character._tab_stats', ['character' => $character])
                    </div>

                    <div class="tab-pane fade" id="notes">
                        @include('character._tab_notes', ['character' => $character])
                    </div>
                    @if ($character->getLineageBlacklistLevel() < 2)
                        <div class="tab-pane fade" id="lineage">
                            @include('character._tab_lineage', ['character' => $character])
                        </div>
                    @endif
                    @if (Auth::check() && Auth::user()->hasPower('manage_characters'))
                        <div class="tab-pane fade" id="settings-{{ $character->slug }}">
                            {!! Form::open(['url' => $character->is_myo_slot ? 'admin/myo/' . $character->id . '/settings' : 'admin/character/' . $character->slug . '/settings']) !!}
                                <div class="form-group">
                                    {!! Form::checkbox('is_visible', 1, $character->is_visible, ['class' => 'form-check-input', 'data-toggle' => 'toggle']) !!}
                                    {!! Form::label('is_visible', 'Is Visible', ['class' => 'form-check-label ml-3']) !!}
                                </div>
                                <div class="text-right">
                                    {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
                                </div>
                            {!! Form::close() !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    @include('character._image_js', ['character' => $character])
@endsection
