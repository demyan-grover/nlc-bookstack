@extends('layouts.simple')

@section('body')

    <div class="home-page-top-container">
        <h1 class="home-page-title">VentureWiki</h1>
        @include('layouts.parts.header-search')
    </div>


    <div class="home-page-popular-links">
        <div class="popular-links-grid">
            <a href="#" class="popular-link">
                <div class="link-icon">@icon('popular')</div>
                <div class="link-text">Venture Portal</div>
            </a>
            <a href="#" class="popular-link">
                <div class="link-icon">@icon('popular')</div>
                <div class="link-text">Venture Portal</div>
            </a>
            <a href="#" class="popular-link">
                <div class="link-icon">@icon('popular')</div>
                <div class="link-text">Venture Portal</div>
            </a>
            <a href="#" class="popular-link">
                <div class="link-icon">@icon('popular')</div>
                <div class="link-text">Venture Portal</div>
            </a>
            <a href="#" class="popular-link">
                <div class="link-icon">@icon('popular')</div>
                <div class="link-text">Venture Portal</div>
            </a>
            <a href="#" class="popular-link">
                <div class="link-icon">@icon('popular')</div>
                <div class="link-text">Venture Portal</div>
            </a>
            <a href="#" class="popular-link">
                <div class="link-icon">@icon('popular')</div>
                <div class="link-text">Venture Portal</div>
            </a>
            <a href="#" class="popular-link">
                <div class="link-icon">@icon('popular')</div>
                <div class="link-text">Venture Portal</div>
            </a>
        </div>
    </div>

    <div class="container" id="home-default">
        
        <div class="new-card explenation-container">
            <h2 class="new-card-title ">How does it work?</h2>
            <p class="new-text">First of all, welcome to the new Venture Wiki!</p>
            <p class="new-text2">Explore this structured space to find insights, share knowledge, and enhance your venture's agility.</p>
            <ul class="new-list">
                <li class="new-list-item"><strong>Shelves:</strong> Broad categories covering major themes.</li>
                <li class="new-list-item"><strong>Books:</strong> Collections of material under each theme.</li>
                <li class="new-list-item"><strong>Chapters:</strong> Specific topics within each book for detailed exploration.</li>
                <li class="new-list-item"><strong>Pages:</strong> Individual articles or documents where detailed information is provided.</li>
            </ul>
        </div>

        <div class="{{ request()->is('/') ? 'sections-container' : 'grid third gap-x-xxl no-row-gap' }}">
            <div>
                <div id="{{ auth()->check() ? 'recently-viewed' : 'recent-books' }}" class="{{ request()->is('/') ? 'new-card mb-xl-new' : 'card mb-xl' }}">
                    <h3 class="{{ request()->is('/') ? 'new-card-title' : 'card-title' }}">{{ trans('entities.' . (auth()->check() ? 'my_recently_viewed' : 'books_recent')) }}</h3>
                    <div class="px-m">
                        @include('entities.list', [
                        'entities' => $recents,
                        'style' => 'compact',
                        'emptyText' => auth()->check() ? trans('entities.no_pages_viewed') : trans('entities.books_empty')
                        ])
                    </div>
                </div>
            </div>

            <div>
                <div id="recent-activity" class="{{ request()->is('/') ? 'new-card mb-xl-new' : 'card mb-xl' }}">
                    <h3 class="{{ request()->is('/') ? 'new-card-title' : 'card-title' }}">{{ trans('entities.recent_activity') }}</h3>
                    <div class="px-m">
                        @include('common.activity-list', ['activity' => $activity])
                    </div>
                </div>
            </div>

        </div>
    </div>

@stop
