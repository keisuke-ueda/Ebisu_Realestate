@extends('layout')

@section('content')

<!-- 開発対象 -->
<div class="container text-white pt-5">
    <h1 class="p-title text-white row">CONCEPT</h1>
    <div class="main-content">
        <div class="row animation">
            <img  class="col-4 d-block mx-auto" src="{{ asset('/images/logo-white.png') }}">
        </div>

        <div class="row mt-3 mb-3 animation">
            <p class="text-center text-warning h1">恵比寿、その聡明なる選択。</p>
            <p class="text-center text-warning">It S pace w e s pecialize i n p roviding c ustomers w ith a w ide r ange o f t he m ost l uxurious a nd i .</p>
        </div>
        
        <div class="row mt-3 mb-3 animation">
            <img  class="col-4 d-block mx-auto" src="{{ asset('/images/logo-white.png') }}">
        </div>
        
        <div class="row mt-3 mb-3 animation">
            <p class="text-center text-warning">恵比寿、それも「恵比寿ガーデンプレイス」、「ウェスティンホテル東京」を間近とする住宅地。</p>
            <p class="text-center text-warning">その静謐なる佇まいは、そのまま住まわれる方の誇りとなる。多くを語らずとも、本物を知る人を魅了するレジデンス。</p>
            <p class="text-center text-warning">「ラ・アトレ恵比寿グランガーデン」 ゆるぎなき矜持が此処にある。</p>
        </div>
    </div>
</div>


@endsection