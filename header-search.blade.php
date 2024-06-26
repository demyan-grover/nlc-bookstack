<form component="global-search" action="{{ url('/search') }}" method="GET" class="{{ request()->is('/') ? 'custom-search-bar' : 'search-box' }}" role="search" tabindex="0">
    <button id="header-search-box-button"
            refs="global-search@button"
            type="submit"
            class="{{ request()->is('/') ? 'search-bar-button' : '' }}"
            aria-label="{{ trans('common.search') }}"
            tabindex="-1">@icon('search')
        </button>

    <input id="header-search-box-input"
           refs="global-search@input"
           type="text"
           name="term"
           data-shortcut="global_search"
           autocomplete="off"
           aria-label="{{ trans('common.search') }}" placeholder="Search the VentureWiki"
           value="{{ $searchTerm ?? '' }}">
    <div refs="global-search@suggestions" class="{{ request()->is('/') ? 'custom-search-bar-suggestions-card card' : 'global-search-suggestions card' }}">
        <div refs="global-search@loading" class="text-center px-m global-search-loading">@include('common.loading-icon')</div>
        <div refs="global-search@suggestion-results" class="px-m"></div>
        <button class="text-button card-footer-link" type="submit">{{ trans('common.view_all') }}</button>
    </div>
</form>