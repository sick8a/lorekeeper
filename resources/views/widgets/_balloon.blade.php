<div style="text-transform: none; font-size: 20px; text-align: center; margin-top: 20px;">
    <div>Heyito, friend.</div>
    <div>All Wehota are welcome beneath the painted skies.</div>
</div>

<div class="d-flex justify-content-end" style="margin-top: 20px;">
    <a href="{{ route('login') }}">
        <button class="btn btn-outline-success" style="margin-right: 10px;">Sign In!</button>
    </a>
    @if (Route::has('register'))
        <a href="{{ route('register') }}">
            <button class="btn btn-outline-success">Sign Up!</button>
        </a>
    @endif
</div>