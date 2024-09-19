@extends('Admin.Admin')
@section('main')
<div class="radone" style=" background:red;">
    <div class="Fixture">
        <div class="round">
            <div class="stage"></div>
            <div class="stage"></div>
            <div class="stage"></div>
            <div class="stage"></div>
            <div class="stage"></div>
            <div class="stage"></div>
            <div class="stage"></div>
            <div class="stage"></div>
        </div>
        <div class="round" style=" margin-top:60px;gap:70px">
            <div class="stage"></div>
            <div class="stage"></div>
            <div class="stage"></div>
            <div class="stage"></div>
        </div>
        <div class="round" style=" margin-top:120px;gap:180px">
            <div class="stage"></div>
            <div class="stage"></div>
        </div>
        <div class="round" style=" margin-top:230px;">
            <div class="stage"></div>
        </div>
    </div>
    <div class="Fixture-controler">
        <div class="controller">
            <div>
                <button onclick="random()">random chose</button>
                <a id="save">Save</a>
                <input type="datetime-local">
            </div>
        </div>
        <div class="ClubsList">
            <div class="c">
                <img src="/files/CHhnlhcb6Onmxi8AWaDm.webp" alt="">
                <h3>Gurth N Turfe1</h3>
            </div>
            <div class="c">
                <img src="/files/CHhnlhcb6Onmxi8AWaDm.webp" alt="">
                <h3>Gurth N Turfe2</h3>
            </div>
            <div class="c">
                <img src="/files/CHhnlhcb6Onmxi8AWaDm.webp" alt="">
                <h3>Gurth N Turfe3</h3>
            </div>
            <div class="c">
                <img src="/files/CHhnlhcb6Onmxi8AWaDm.webp" alt="">
                <h3>Gurth N Turfe4</h3>
            </div>
            <div class="c">
                <img src="/files/CHhnlhcb6Onmxi8AWaDm.webp" alt="">
                <h3>Gurth N Turfe5</h3>
            </div>
            <div class="c">
                <img src="/files/CHhnlhcb6Onmxi8AWaDm.webp" alt="">
                <h3>Gurth N Turfe6</h3>
            </div>
            <div class="c">
                <img src="/files/CHhnlhcb6Onmxi8AWaDm.webp" alt="">
                <h3>Gurth N Turfe7</h3>
            </div>
            <div class="c">
                <img src="/files/CHhnlhcb6Onmxi8AWaDm.webp" alt="">
                <h3>Gurth N Turfe8</h3>
            </div>
            <div class="c">
                <img src="/files/CHhnlhcb6Onmxi8AWaDm.webp" alt="">
                <h3>Gurth N Turfe9</h3>
            </div>
            <div class="c">
                <img src="/files/CHhnlhcb6Onmxi8AWaDm.webp" alt="">
                <h3>Gurth N Turfe10</h3>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/Fixtur.js') }}"></script>
@endsection('main')