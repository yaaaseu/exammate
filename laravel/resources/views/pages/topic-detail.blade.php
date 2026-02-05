@extends('layouts.app')

@section('title', 'CH1 - Sets')

@section('content')

<h3 class="fw-bold mb-4">CH1 - SETS (Exclude)</h3>

<!-- FILTER BAR -->
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <select class="form-select">
            <option>Paper</option>
        </select>
    </div>
    <div class="col-md-3">
        <select class="form-select">
            <option>Year</option>
        </select>
    </div>
    <div class="col-md-3">
        <select class="form-select">
            <option>Season</option>
        </select>
    </div>
    <div class="col-md-2">
        <select class="form-select">
            <option>Zone</option>
        </select>
    </div>
    <div class="col-md-1 d-flex align-items-center">
        <button class="btn btn-primary-custom w-100">
            🔍
        </button>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="row">
    <!-- QUESTION LIST -->
    <div class="col-md-4">
        <div class="question-list-card">
            @for ($i = 1; $i <= 15; $i++)
                <div class="question-item {{ $i == 1 ? 'active' : '' }}">
                    Question - {{ $i }}
                </div>
            @endfor
        </div>
    </div>

    <!-- QUESTION CONTENT -->
    <div class="col-md-8">
        <div class="question-card">
            <div class="question-header">
                <button class="nav-arrow">‹</button>
                <span>Question - 1</span>
                <button class="nav-arrow">›</button>
            </div>

            <div class="question-body">
                <p>
                    In a class of 30 students, 17 are studying politics, 14 are studying
                    economics and 10 are studying both of these subjects.
                </p>

                <p>
                    <strong>(i)</strong> Illustrate this information using a Venn diagram. <span class="float-end">[1]</span>
                </p>
                <p>
                    Find the number of students studying
                </p>
                <p>
                    <strong>(ii)</strong> neither of these subjects, <span class="float-end">[1]</span>
                </p>
                <p>
                    <strong>(iii)</strong> exactly one of these subjects. <span class="float-end">[1]</span>
                </p>

                <button class="btn btn-secondary mt-4">
                    👁 Show Answer
                </button>
            </div>
        </div>
    </div>
</div>

@endsection
