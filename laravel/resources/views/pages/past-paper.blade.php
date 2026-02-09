@extends('layouts.app')

@section('title', 'Topical Past Paper')

@section('content')

<h2 class="fw-bold text-blue-custom">TOPICAL PAST PAPER QUESTIONS</h2>
<p class="text-muted">
   Topical past papers are an essential tool for any student looking to  succeed in their exams. These questions are similar to regular past  paper questions, but instead of covering all topics, they focus on a  specific topic or theme. This allows students to test their knowledge in a more targeted way and identify any areas they may need to improve on. By practicing with Topical past papers, students have the opportunity  to enhance their understanding of a topic and build their confidence  ahead of the exam.
</p>

<div class="row g-3 my-3">
    <div class="col-md-3">
        <select class="form-select">
            <option>Curriculum</option>
            <option>Curriculum</option>
            <option>Curriculum</option>
            <option>Curriculum</option>
            <option>Curriculum</option>
        </select>
    </div>
    <div class="col-md-3">
        <select class="form-select">
            <option>Subject</option>
        </select>
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control" placeholder="Cari...">
    </div>
</div>

<h6 class="mt-4">Topic(s)</h6>

<div class="topic-list">
    <div  class="topic-card">
        <a href="{{ route('topic.detail') }}" class="topic-text">CH 1 - SETS (Exclude)</a>
    </div>
    <div class="topic-card">
        <a href="{{ route('topic.detail') }}" class="topic-text">CH 2 - INTERSECTION POINTS</a>
    </div>
    <div class="topic-card">
        <a href="{{ route('topic.detail') }}" class="topic-text">CH 3 - SURDS, INDICES, LOG</a>
    </div>
    <div class="topic-card">
        <a href="{{ route('topic.detail') }}" class="topic-text">CH 4 - FACTOR THEOREM</a>
    </div>
    <div class="topic-card">
        <a href="{{ route('topic.detail') }}" class="topic-text">CH 5 - MATRICES (Exclude)</a>
    </div>
    <div class="topic-card">
        <a href="{{ route('topic.detail') }}" class="topic-text">CH 6 - COORDINATE GEOMETRY</a>
    </div>
    <div class="topic-card">
        <a href="{{ route('topic.detail') }}" class="topic-text">CH 7 - LINEAR LAW</a>
    </div>
</div>

@endsection
